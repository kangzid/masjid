(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);
    
    
    // Initiate the wowjs
    new WOW().init();

    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('bg-white shadow');
            } else {
                $('.fixed-top').removeClass('bg-white shadow');
            }
        } else {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('bg-white shadow').css('top', -45);
            } else {
                $('.fixed-top').removeClass('bg-white shadow').css('top', 0);
            }
        }
    });
    
    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: false,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });

})(jQuery);


document.addEventListener("DOMContentLoaded", function () {
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan mulai dari 0
    const day = String(today.getDate()).padStart(2, '0');
    const formattedDate = `${year}-${month}-${day}`;
    
    const apiUrl = `https://api.myquran.com/v2/sholat/jadwal/1505/${formattedDate}`;
    const jadwalContainer = document.getElementById("jadwalSholatContainer");

    // Ambil data jadwal sholat dari API
    fetch(apiUrl)
        .then((response) => response.json())
        .then((data) => {
            const jadwal = data.data.jadwal;
            const lokasi = data.data.lokasi; // Lokasi dari API
            const tanggal = jadwal.tanggal; // Tanggal dari API dalam format yang sudah diformat

            // Tampilkan nama lokasi dan tanggal pada elemen jadwalTanggal
            document.getElementById("jadwalTanggal").textContent = `(${lokasi}, ${tanggal})`;

            // Membuat list jadwal sholat tanpa data imam
            const jadwalList = [
                { name: "Imsak", time: jadwal.imsak },
                { name: "Subuh", time: jadwal.subuh },
                { name: "Dzuhur", time: jadwal.dzuhur },
                { name: "Ashar", time: jadwal.ashar },
                { name: "Maghrib", time: jadwal.maghrib },
                { name: "Isya", time: jadwal.isya }
            ];

            jadwalContainer.innerHTML = ""; // Kosongkan kontainer sebelum menambahkan jadwal baru
            jadwalList.forEach((jadwalItem) => {
                const jadwalHtml = `
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-lg" style="border-radius: 15px;">
                            <div class="card-body text-center p-4">
                                <div class="icon-container mb-3">
                                    <div class="icon-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px; border-radius: 50%;">
                                        <i class="fa fa-clock" style="font-size: 1.5rem;"></i>
                                    </div>
                                </div>
                                <h5 class="mb-1" style="font-weight: bold;">${jadwalItem.name}</h5>
                                <p class="m-0 fs-4 text-muted">${jadwalItem.time}</p>
                            </div>
                        </div>
                    </div>
                `;
                jadwalContainer.innerHTML += jadwalHtml;
            });
        })
        .catch((error) => {
            console.error("Error fetching jadwal sholat:", error);
        });
});
