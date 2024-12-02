var stickyNavTop = $('#header').offset().top;
var stickyNav = function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > stickyNavTop) {

        $('#header').addClass('sticky');

    } else {

        $('#header').removeClass('sticky');

    }

};


 // Select all buttons with the "read-more-btn" class
    document.querySelectorAll('.read-more-btn').forEach(button => {
      button.addEventListener('click', () => {
        const content = button.previousElementSibling; // Selects the associated content
        const arrow = button.querySelector('.arrow'); // Selects the arrow icon

        // Toggle visibility of content
        if (content.style.display === 'none' || !content.style.display) {
          content.style.display = 'block';
          button.innerHTML = 'Read Less <span class="arrow rotate"><i class="fa-solid fa-chevron-up"></i></span>';
        } else {
          content.style.display = 'none';
          button.innerHTML = 'Read More <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>';
        }
      });
    });

stickyNav();



$(window).scroll(function () {

    stickyNav();

});


//recruiters-slider
$("#testimonial-slider").owlCarousel({

    items: 3, //Set Testimonial items
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: false,
    loop: true,
    margin: 20,
    singleItem: true,
    touchDrag: true,
    mouseDrag: true,
    pagination: true,
    nav: false,
    dots: false,

    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        480: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        568: {
            items: 2,
        },
        600: {
            items: 2,
        },
        667: {
            items: 3,
        },
        1000: {
            items: 3
        }
    }
});


$("#collaborations-slider").owlCarousel({

    items: 7, //Set Testimonial items
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: false,
    loop: true,
    margin: 15,
    singleItem: true,
    touchDrag: true,
    mouseDrag: true,

    pagination: true,
    nav: true,
    dots: false,

    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        480: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        568: {
            items: 2,
        },
        600: {
            items: 2,
        },
        667: {
            items: 3,
        },
        1000: {
            items: 7,
            nav: true
        }
    }
});


$(".gallery-slider").owlCarousel({

    items: 4, //Set Testimonial items
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: false,
    loop: true,
    margin: 15,
    singleItem: true,
    touchDrag: true,
    mouseDrag: true,

    pagination: true,
    nav: true,
    dots: false,

    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        480: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        568: {
            items: 2,
        },
        600: {
            items: 2,
        },
        667: {
            items: 3,
        },
        1000: {
            items: 4,
            nav: true
        }
    }
});



//recruiters-slider
$("#cags-marunji-slider").owlCarousel({

    items: 4, //Set Testimonial items

    margin: 14,
    singleItem: true,
    touchDrag: true,
    mouseDrag: true,
    pagination: true,
    nav: false,
    dots: false,

    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        480: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        568: {
            items: 2,
        },
        600: {
            items: 2,
        },
        667: {
            items: 3,
        },
        1000: {
            items: 4
        }
    }
});


//recruiters-slider
$("#about-jounrey-slider").owlCarousel({

    items: 7, //Set Testimonial items
    center: true,
    loop: true,
    margin: 100,
    singleItem: true,
    touchDrag: true,
    mouseDrag: true,
    pagination: true,
    nav: true,
    dots: false,

    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        480: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        568: {
            items: 2,
        },
        600: {
            items: 2,
        },
        667: {
            items: 3,
        },
        1000: {
            items: 7,
            nav: true
        }
    }
});


$("#why-choose-cbse-slider").owlCarousel({
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: false,
    items: 1, //Set Testimonial items
    loop: true,
    margin: 20,
    singleItem: true,
    touchDrag: true,
    mouseDrag: true,
    pagination: true,
    nav: true,
    dots: false,
    navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        480: {
            items: 2,
            stagePadding: 0,
            margin: 30,
        },
        568: {
            items: 2,
        },
        600: {
            items: 2,
        },
        667: {
            items: 3,
        },
        1000: {
            items: 2,
            nav: true
        }
    }
});





// Get the button element
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Show or hide the button based on scroll position
window.onscroll = function () {
    if (window.scrollY > window.innerHeight) { // 100vh
        scrollToTopBtn.style.display = "inline-flex";
    } else {
        scrollToTopBtn.style.display = "none";
    }
};

// Scroll smoothly to the top of the page
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
}



/* -------------------------------  
     WOW ANIMATED JS START
/* ----------------------------- */

new WOW().init();

// Elements Animation
if ($('.wow').length) {
    var wow = new WOW(
        {
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0,          // distance to the element when triggering the animation (default is 0)
            mobile: true,       // trigger animations on mobile devices (default is true)
            live: true       // act on asynchronously loaded content (default is true)
        }
    );
    wow.init();
}

const mainBaner = document.querySelector('.main-baner');

if (mainBaner) {
    // Check if it contains an element with the class 'video-container' at any level
    const hasVideoContainer = mainBaner.querySelector('.video-container') !== null;

    // Set height based on presence of 'video-container'
    mainBaner.style.height = hasVideoContainer ? '100vh' : null;
}