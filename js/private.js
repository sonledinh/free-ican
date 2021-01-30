
if($(window).innerWidth() >= 1024){
    new WOW().init();
}

$('.slide-baner').slick({
    autoplay: false,
    arrow: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '<button class="prev"><img src="images/left.svg" class="img-fluid" alt=""></button>',
    nextArrow: '<button class="next"><img src="images/right.svg" class="img-fluid" alt=""></button>',
    // responsive: [
    //     { 
    //         breakpoint: 1023,
    //         settings: {
    //             slidesToShow: 3,
    //         }
    //     },
    //     {
    //         breakpoint: 767,
    //         settings: {
    //             slidesToShow: 3, 
    //         }
    //     },
    //     {
    //         breakpoint: 480,
    //         settings: {
    //             slidesToShow: 2,
    //         }
    //     }
    // ]
});


$('.slide-teacher').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
    responsive: [
        { 
            breakpoint: 1023,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2, 
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});


$('.slide-feedback').slick({
    autoplay: false,
    arrow: false,
    dots: false,
    slidesToShow: 3, 
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
    responsive: [
        { 
            breakpoint: 1023,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2, 
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});


$('.slide-khoahoc').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow: '<button class="prev"><img src="images/left.svg" class="img-fluid" alt=""></button>',
    nextArrow: '<button class="next"><img src="images/right.svg" class="img-fluid" alt=""></button>',
    responsive: [
        { 
            breakpoint: 1023,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2, 
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});


$('.slide-list-docs').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
    responsive: [
        { 
            breakpoint: 1023,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2, 
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

$('.list-subject ul').slick({
    autoplay: false,
    arrow: false,
    dots: false,
    slidesToShow: 7,
    slidesToScroll: 3, 
    prevArrow: '',
    nextArrow: '',
    responsive: [
        { 
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            }
        },
        { 
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3, 
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
            }
        }
    ]
});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function cmndURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#cmnd').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

jQuery(document).ready(function( $ ) {
  $("#menu").mmenu({
     "extensions": [
        "fx-menu-zoom"
     ],
     "counters": true
  });
});


$('.slide-bar').slick({
    autoplay: false,
    arrow: true,
    dots: false,
    slidesToShow: 1, 
    prevArrow: '<a href="javascript:void(0)" class="prev"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a href="javascript:void(0)" class="next"><i class="fa fa-angle-right"></i></a>',
}); 

$('.slide-other').slick({
    autoplay: false,
    arrow: true,
    dots: false,
    slidesToShow: 2, 
    prevArrow: '<a href="javascript:void(0)" class="prev"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a href="javascript:void(0)" class="next"><i class="fa fa-angle-right"></i></a>',
}); 