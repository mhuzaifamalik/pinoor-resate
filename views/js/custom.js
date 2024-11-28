AOS.init({ once: true })
$(document).ready(function () {
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf('/') + 1);
  if (filename == "") {
    filename = "/"
  }
  $("header .nav-item .nav-link").removeClass("active");
  $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
});
(function () {
  perfData = window.performance.timing; // The PerformanceTiming interface represents timing-related performance information for the given page.
  const EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart);
  const time = parseInt((EstimatedTime / 1000) % 60) * 100;
  $("#loader ul").css({ transform: 'translateY(-99%)', transition: time + 'ms ease-in-out' });
  $("#loader .side-loader").css({ height: '0', transition: time + 'ms ease-in-out' });
  console.log('time', time)
  $('.banner-wrapper-main .home-banner .banner-img-wrap').css({ transform: 'scaleY(1)', transition: 'transform ' + time + 'ms ease-in-out, width 3s ease-in-out' });
  setTimeout(() => {
    setTimeout(() => {
      $('body').addClass('loaded')
    }, 1000);
    $("#loader").fadeOut('300')
  }, time + 500);
})()


$(document).ready(function () {
  $("body").addClass('animate')
})
// const locoScroll = new LocomotiveScroll({
//   el: document.querySelector("main"),
//   smooth: true
// });
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
ScrollSmoother.create({
  // wrapper: 'body',
  content: 'main',
  smooth: 3, // how long (in seconds) it takes to "catch up" to the native scroll position
  effects: true, // looks for data-speed and data-lag attributes on elements
  smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
});
function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewCenter = $(window).scrollTop() + (innerHeight / 2);
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  // return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  return ((elemBottom >= docViewCenter) && (elemTop <= docViewCenter));
}
$('.about-filters').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 4.5
    }
  }
})

setInterval(() => {
  $('section').each(function (ind, elem) {
    // console.log(elem)
    if (!$(".leaf-img-2").hasClass('animate-2')) {
      const top = $(".impact-section .sec-heading").offset().top + $(".impact-section .sec-heading")[0].getBoundingClientRect().height
      $(".leaf-img-2").css('top', top)
    }
    if (!$(".leaf-img-2").hasClass('animate-1')) {
      const top = $(".luxurious-sec").offset().top + ($(".luxurious-sec")[0].getBoundingClientRect().height / 1.5)
      $(".leaf-img-2").css('top', top)
    }
    // const top = $(".impact-section .sec-heading")[0].getBoundingClientRect().top + $(".impact-section .sec-heading")[0].getBoundingClientRect().height
    if (isScrolledIntoView($(elem)[0])) {
      $(elem).addClass('animate')
      if ($(elem).hasClass('impact-section')) {
        $(".leaf-img-2").addClass('animate-1')
        $(".leaf-img-2").removeClass('animate-2')

      } else if ($(elem).hasClass('luxurious-sec')) {
        $(".leaf-img-2").addClass('animate-2')
        $(".leaf-img-2").removeClass('animate-1')
      }
    }
  })
}, 100);

$('#banner-slider-home').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  autoplay: false,
  touchDrag: false,
  autoplayTimeout: 10000,
  autoplayHoverPause: false,
  items: 1,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  dotData: true,
  dotsData: true,
  URLhashListener: true,
  responsive: {
    0: {
      autoplay: false,
    },
    767: {
      autoplay: false,
    }
  }
})

$(document).ready(function () {
  var swiper = new Swiper("#luxurious-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 2,
    spaceBetween: 100,
    slidesPerView: "auto",
    loop: true,
    scrollbar: {
      el: "#luxurious-slider .swiper-scrollbar",
      hide: true,
    },
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 50,
      modifier: 1,
      slideShadows: false,
    },
    on: {
      slideChangeTransitionStart: function () {
        // Remove skew classes from all slides
        $('.swiper-slide').removeClass('swiper-slide-prev swiper-slide-next');

        // Add skew classes to previous and next slides
        var activeIndex = this.activeIndex;
        $('.swiper-slide').eq(activeIndex - 1).addClass('swiper-slide-prev');
        $('.swiper-slide').eq(activeIndex + 1).addClass('swiper-slide-next');
      },
    }
  });
})

var swiper = new Swiper(".mySwiper1", {
  slidesPerView: 3, // Show only three slides
  spaceBetween: 50,
  scrollbar: {
    el: ".mySwiper1 .swiper-scrollbar",
    hide: true,
  },
  breakpoints: {
    // when window width is >= 320px
    0: {
      slidesPerView: 1,
      spaceBetween: 30, // Adjust margin for smaller screens
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 15, // Adjust margin for medium screens
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
      spaceBetween: 50, // Margin for larger screens
    }
  }
});

$('.picks-silder').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  items: 1,
  navText: [
    '<i class="fa-sharp fa-light fa-arrow-left"></i>',  // Custom left navigation icon
    '<i class="fa-sharp fa-light fa-arrow-right"></i>'  // Custom right navigation icon
  ],
  // responsive: {
  //   0: {
  //   },
  //   600: {
  //     items: 3
  //   },
  //   1000: {
  //     items: 1
  //   }
  // }
});

$('.spirter').owlCarousel({
  loop: true,
  margin: 40,
  nav: true,
  dots: false,
  navText: [
    '<i class="fa-sharp fa-light fa-arrow-left"></i>',
    '<i class="fa-sharp fa-light fa-arrow-right"></i>'
  ],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1.5
    },
    1000: {
      items: 2.5
    }
  }
})

let question = document.querySelectorAll(".question");

question.forEach(question => {
  question.addEventListener("click", event => {
    const active = document.querySelector(".question.active");
    if (active && active !== question) {
      active.classList.toggle("active");
      active.nextElementSibling.style.maxHeight = 0;
    }
    question.classList.toggle("active");
    const answer = question.nextElementSibling;
    if (question.classList.contains("active")) {
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }
  })
})
document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.querySelector('.carousel');
  const cells = carousel.querySelectorAll('.carousel__cell');
  const cellCount = cells.length; // Updated to 6
  // const cellWidth = carousel.offsetWidth;
  const cellWidth = cells[0].offsetWidth;
  // let selectedIndex = 0;
  const radius = Math.round((cellWidth / 2) / Math.tan(Math.PI / cellCount));

  // function rotateCarousel() {
  //   const angle = (selectedIndex + 1) / cellCount * -360;
  //   carousel.style.transform = `translateZ(${-radius}px) rotateY(${angle}deg)`;
  //   selectedIndex = cellCount == selectedIndex ? 0 : selectedIndex++
  // }

  cells.forEach((cell, i) => {
    const cellAngle = i / cellCount * 360;
    cell.style.transform = `rotateY(${cellAngle}deg) translateZ(${radius}px)`;
  });
  // const cellCount = cells.length;
  // const cellWidth = cells[0].offsetWidth;

  let rotateY = 0;

  function rotateCarousel() {
    const angle = 360 / cellCount;
    cells.forEach((cell, index) => {
      const theta = angle * index;
      cell.style.transform = `rotateY(${theta}deg) translateZ(${radius}px)`;
    });
  }

  function rotateNext() {
    rotateY -= 360 / cellCount;
    const currentActive = $(carousel).find(".center")
    let targetPrev;
    let targetActive;
    let targetNext;
    $('.carousel .carousel__cell').removeClass("active")
    $('.carousel .carousel__cell').removeClass("center")
    if ($(currentActive).next().length == 0) {
      targetActive = $('.carousel .carousel__cell').first()
    } else {
      targetActive = $(currentActive).next()
    }
    if (targetActive.next().length == 0) {
      targetNext = $('.carousel .carousel__cell').first()
      targetPrev = $(targetActive).prev()
    } else if (targetActive.prev().length == 0) {
      targetNext = $(targetActive).next()
      targetPrev = $('.carousel .carousel__cell').last()
    } else {
      targetNext = $(targetActive).next()
      targetPrev = $(targetActive).prev()
    }
    $(targetActive).addClass('active')
    $(targetActive).addClass('center')
    $(targetNext).addClass('active')
    $(targetPrev).addClass('active')
    const activeIndex = $('.carousel .carousel__cell.center').index()
    $(".carousel-indicator ul li").removeClass('active')
    $(`.carousel-indicator ul li:nth-child(${activeIndex + 1})`).addClass('active')
    $(`.carousel-indicator span`).html(`0${activeIndex + 1}`)
    if (innerWidth <= 1440) {
      document.querySelector('.carousel').style.transform = `rotateY(${rotateY}deg) translateY(26vw)`;
    } else {
      document.querySelector('.carousel').style.transform = `rotateY(${rotateY}deg) translateY(15vw)`;
    }
  }
  function rotateLeft() {
    rotateY += 360 / cellCount;
    const currentActive = $(carousel).find(".center")
    let targetPrev;
    let targetActive;
    let targetNext;
    $('.carousel .carousel__cell').removeClass("active")
    $('.carousel .carousel__cell').removeClass("center")
    if ($(currentActive).prev().length == 0) {
      targetActive = $('.carousel .carousel__cell').last()
    } else {
      targetActive = $(currentActive).prev()
    }
    if (targetActive.next().length == 0) {
      targetNext = $('.carousel .carousel__cell').first()
      targetPrev = $(targetActive).prev()
    } else if (targetActive.prev().length == 0) {
      targetNext = $(targetActive).next()
      targetPrev = $('.carousel .carousel__cell').last()
    } else {
      targetNext = $(targetActive).next()
      targetPrev = $(targetActive).prev()
    }
    $(targetActive).addClass('active')
    $(targetActive).addClass('center')
    $(targetNext).addClass('active')
    $(targetPrev).addClass('active')
    const activeIndex = $('.carousel .carousel__cell.center').index()
    $(".carousel-indicator ul li").removeClass('active')
    $(`.carousel-indicator ul li:nth-child(${activeIndex + 1})`).addClass('active')
    $(`.carousel-indicator span`).html(`0${activeIndex + 1}`)
    if (innerWidth <= 1440) {
      document.querySelector('.carousel').style.transform = `rotateY(${rotateY}deg) translateY(26vw)`;
    } else {
      document.querySelector('.carousel').style.transform = `rotateY(${rotateY}deg) translateY(15vw)`;
    }
  }
  $(".carousel-container .prv-btn").click(rotateLeft)
  $(".carousel-container .next-btn").click(rotateNext)
  // Initial positioning
  rotateCarousel();
  carousel.addEventListener('touchstart', function (e) {
    startX = e.touches[0].clientX;
  });

  carousel.addEventListener('touchmove', function (e) {
    endX = e.touches[0].clientX;
  });

  carousel.addEventListener('touchend', function () {
    if (startX > endX) {
      rotateNext();
    } else {
      rotateLeft();
    }
  });
  carousel.addEventListener('mousedown', function (e) {
    startX = e.touches[0].clientX;
  });

  carousel.addEventListener('mousemove', function (e) {
    endX = e.touches[0].clientX;
  });

  carousel.addEventListener('mouseup', function () {
    if (startX > endX) {
      rotateNext();
    } else {
      rotateLeft();
    }
  });
  // Add event listeners for manual navigation
  // carousel.addEventListener('click', () => {
  //   selectedIndex = (selectedIndex + 1) % cellCount;
  //   rotateCarousel();
  // });
});
$(".hame-burger").click(function () {
  // debugger
  if ($(this).hasClass('collapsed')) {
    $(this).find('.btn-sm').html(`Menu`)
    // $(this).find('.btn-icon-sm').html(``)
  } else {
    $(this).find('.btn-sm').html(`Close`)
  }
})
$(".hame-burger").click(function () {
  // debugger
  if ($(this).hasClass('collapsed')) {
    $(this).find('.btn-sm').html(`Menu`)
    // $(this).find('.btn-icon-sm').html(``)
  } else {
    $(this).find('.btn-sm').html(`Close`)
  }
})
$("#menu-toggler").click(function () {
  if ($(this).hasClass("active")) {
    $(this).removeClass("active")
    $(".toggle-icon-text").html("menu")
    $("#menu-nav").removeClass("show-menu")
  }
  else {
    $(this).addClass("active")
    $(".toggle-icon-text").html("close")
    $("#menu-nav").addClass("show-menu")
  }
})
$(".menu-sec.show-menu .menu .menu-item").mouseenter(function () {
  debugger
  $(".menu-bg-images img").css("opacity", "0")
})
$(".menu-sec.show-menu .menu .menu-item").mouseenter(function () {
  debugger
  $(".menu-bg-images img").css("opacity", "0")
})

$(".menu-sec.show-menu .menu .menu-item").mouseenter(function () {
  debugger
  $(".menu-bg-images img").css("opacity", "0")
})



function forFaq() {
  const accordionSections = document.querySelectorAll(".faq-item");

  accordionSections.forEach((section) => {
    const accordionItemHeaders = section.querySelectorAll(
      ".accordion-item-header"
    );

    if (accordionItemHeaders.length > 0) {
      const firstAccordionItemHeader = accordionItemHeaders[0];
      const firstAccordionItemBody =
        firstAccordionItemHeader.nextElementSibling;

      firstAccordionItemHeader.classList.add("active");
      firstAccordionItemBody.style.maxHeight =
        firstAccordionItemBody.scrollHeight + "px";
    }

    accordionItemHeaders.forEach((accordionItemHeader) => {
      accordionItemHeader.addEventListener("click", (event) => {
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        accordionItemHeaders.forEach((item) => {
          if (item !== accordionItemHeader) {
            item.classList.remove("active");
            item.nextElementSibling.style.maxHeight = 0;
          }
        });
        accordionItemHeader.classList.toggle("active");
        if (accordionItemHeader.classList.contains("active")) {
          accordionItemBody.style.maxHeight =
            accordionItemBody.scrollHeight + "px";
        } else {
          accordionItemBody.style.maxHeight = 0;
        }
      });
    });
  });
}
forFaq();



// Get all list items with data-image attribute
const listItems = document.querySelectorAll("li[data-image]");

// Get the dynamic image tag
const dynamicImage = document.getElementById("dynamic-image");

// Add hover event listeners
listItems.forEach((item) => {
    item.addEventListener("mouseover", () => {
        const newImage = item.getAttribute("data-image");
        dynamicImage.src = newImage; // Change the image source
    });

    item.addEventListener("mouseout", () => {
        dynamicImage.src = "images/introo.png"; // Reset to default image
    });
});

// Get references to the elements
const searchIcon = document.getElementById("search-icon");
const customFilter = document.getElementById("custom-filter");

// Toggle the filter visibility on click
searchIcon.addEventListener("click", () => {
    if (customFilter.style.display === "none" || customFilter.style.display === "") {
        customFilter.style.display = "block"; // Show the filter
    } else {
        customFilter.style.display = "none"; // Hide the filter
    }
});
document.addEventListener("click", (event) => {
  if (!customFilter.contains(event.target) && !searchIcon.contains(event.target)) {
      customFilter.style.display = "none";
  }
});
searchIcon.addEventListener("click", () => {
  customFilter.classList.toggle("show");
});


var myOffcanvas = document.getElementById('menu-nav')
myOffcanvas.addEventListener('hidden.bs.offcanvas', function () {
  de.bs.offcanvas
})



$('.tems').owlCarousel({
  loop:true,
  margin:30,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
})
document.getElementById("playButton").addEventListener("click", function () {
  const thumbnail = document.querySelector(".thumbnail-bg");
  const video = document.querySelector(".video-bg");
  thumbnail.style.display = "none";
  video.classList.remove("d-none");
  video.play();
});


// document.addEventListener('DOMContentLoaded', function () {
//   const playButton = document.getElementById('playButton');
//   const video = document.getElementById('video');
//   const thumbnail = document.getElementById('thumbnail');

//   playButton.addEventListener('click', function () {
//       // Hide the thumbnail and play the video
//       thumbnail.style.display = 'none';
//       video.style.display = 'block';
//       video.play();

//       // Optionally hide the button after playing the video
//       playButton.style.display = 'none';
//   });
// });