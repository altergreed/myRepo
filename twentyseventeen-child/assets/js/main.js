jQuery(document).ready(function ($) {
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 25,
        responsiveClass: true,
        stagePadding: 20,
        rewind: true,
        responsive: {
            0: {
                mergeFit: true,
                margin: 25,
                items: 1,
                nav: true,
                navText: ['<div class="nav-btn prev-slide"><div class="prev-slide-icon"></div></div>', '<div class="nav-btn next-slide"><div class="next-slide-icon"></div></div>'
                    ],
                dots: false
            },
            576: {
                items: 2,
                nav: true,
                navText: ['<div class="nav-btn prev-slide"><div class="prev-slide-icon"></div></div>', '<div class="nav-btn next-slide"><div class="next-slide-icon"></div></div>'
                    ],
                dots: false
            },
            1000: {
                items: 4,
                nav: true,
                navText: ['<div class="nav-btn prev-slide"><div class="prev-slide-icon"></div></div>', '<div class="nav-btn next-slide"><div class="next-slide-icon"></div></div>'
                    ],
                loop: false,
                dots: false
            }
        }
    });
});
