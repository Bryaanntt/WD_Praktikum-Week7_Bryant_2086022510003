// Laba-laba di footer: seperti gantungan kunci (bandul)
document.addEventListener('DOMContentLoaded', function () {
    var spider = document.getElementById('spiderWrap');
    if (!spider) return;

    // pengaturan
    var GRAVITY = 40;    // makin besar = ayunan makin cepat dan kaku
    var DAMPING = 1.2;   // makin besar = makin cepat berhenti
    var MAX_SPIN = 15;   // batas kecepatan putar (radian per detik)

    var svg = spider.firstElementChild;
    spider.style.transition = 'none';
    spider.style.transformOrigin = '50% 0';   // titik putar = ujung atas tali
    if (svg) svg.style.animation = 'none';

    // keadaan 
    var theta = 0;        // sudut (radian). 0 = menggantung lurus ke bawah
    var omega = 0;        // kecepatan putar
    var dragging = false;
    var running = false;
    var last = 0;         // waktu frame sebelumnya
    var lastMove = 0;     // waktu gerakan mouse terakhir

    // Posisi ujung tali di layar (titik tengah-atas kotak laba-laba, sebelum diputar)
    function anchor() {
        var p = spider.offsetParent.getBoundingClientRect();
        return {
            x: p.left + spider.offsetLeft + spider.offsetWidth / 2,
            y: p.top + spider.offsetTop
        };
    }

    // Rapikan sudut ke rentang -180 sampai 180 derajat
    function wrap(a) { return Math.atan2(Math.sin(a), Math.cos(a)); }

    // Satu langkah animasi (dipanggil terus selama laba-laba bergerak)
    function frame(now) {
        var dt = Math.min((now - last) / 1000, 0.033);
        last = now;

        if (!dragging) {
            // fisika bandul: percepatan = tarikan gravitasi + redaman
            var alpha = -GRAVITY * Math.sin(theta) - DAMPING * omega;
            omega += alpha * dt;
            theta = wrap(theta + omega * dt);
        }

        spider.style.transform = 'rotate(' + theta + 'rad)';

        // sudah diam? hentikan loop supaya hemat tenaga
        if (!dragging && Math.abs(theta) < 0.0005 && Math.abs(omega) < 0.0005) {
            theta = 0;
            omega = 0;
            spider.style.transform = 'rotate(0rad)';
            running = false;
            return;
        }
        requestAnimationFrame(frame);
    }

    function start() {
        if (running) return;
        running = true;
        last = performance.now();
        requestAnimationFrame(frame);
    }

    // drag
    spider.addEventListener('pointerdown', function (e) {
        dragging = true;
        omega = 0;
        lastMove = performance.now();
        spider.setPointerCapture(e.pointerId);
        spider.classList.add('dragging');
        start();
    });

    spider.addEventListener('pointermove', function (e) {
        if (!dragging) return;

        // arahkan tali ke posisi mouse (laba-laba tetap sejauh panjang tali)
        var a = anchor();
        var newTheta = Math.atan2(-(e.clientX - a.x), e.clientY - a.y);

        // hitung kecepatan ayunan, supaya saat dilepas ia terlempar mengikuti arah tarikan
        var now = performance.now();
        var seconds = (now - lastMove) / 1000;
        if (seconds > 0) {
            var speed = wrap(newTheta - theta) / seconds;
            omega = 0.6 * omega + 0.4 * speed;
            omega = Math.max(-MAX_SPIN, Math.min(MAX_SPIN, omega));
        }

        theta = newTheta;
        lastMove = now;
    });

    function release() {
        if (!dragging) return;
        dragging = false;
        spider.classList.remove('dragging');

        // kalau ditahan diam sebelum dilepas, jangan terlempar
        if (performance.now() - lastMove > 80) omega = 0;
        start();
    }

    spider.addEventListener('pointerup', release);
    spider.addEventListener('pointercancel', release);

    // ayunan kecil di awal supaya terlihat "hidup" (kecuali pengunjung mematikan animasi)
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (!reduceMotion) {
        omega = 1.2;
        start();
    }
});