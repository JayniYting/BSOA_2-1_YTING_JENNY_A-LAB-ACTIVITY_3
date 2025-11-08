jQuery(document).ready(function($) {
  var scroll = $(window).scrollTop();
  var scrollup = $('.scroll-top');
  /*------------------------------------------------
            Scroll Top
  ------------------------------------------------*/
  scrollup.click(function () {
    $('html, body').animate({
      scrollTop: '0px'
    }, 800);
    return false;
  });
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
      scrollup.fadeIn();
    } else {
      scrollup.fadeOut();
    }
  });
});

// Slider
jQuery(document).ready(function() {
  jQuery('.testimonial-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: ["<i class='fa-solid fa-angles-left'></i>", "<i class='fa-solid fa-angles-right'></i>"], 
    dots: true,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    600: { 
      items: 2 
    },
    992: { 
      items: 3 
    },
    1200: { 
      items: 4 
    }
  },
    autoplay: true,
  });
});

jQuery(document).ready(function() {
  jQuery('.latest-news .owl-carousel').owlCarousel({
    loop: true,
    margin: 40,
    nav: true,
    navText: ["<i class='fa-solid fa-angles-left'></i>", "<i class='fa-solid fa-angles-right'></i>"], 
    dots: false,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    600: { 
      items: 2 
    },
    992: { 
      items: 3 
    },
    1200: { 
      items: 3 
    }
  },
    autoplay: true,
  });
});

// tabs.js
document.addEventListener("click", e => {  if (e.target.parentElement.classList.contains("tab-title")  ) { corporate_firm_redTab(e) }  });

[...document.querySelectorAll("div.main-tab div")].forEach((tabTile, index) => {
    tabTile.classList.toggle('active', index == 0)
  });
[...document.querySelectorAll(".tab-content")].forEach((tabcontent, index) => {
  tabcontent.classList.toggle('active', index == 0)
  });
function corporate_firm_redTab(e) {  
  let corporate_firm_tabTiles = [...document.querySelectorAll("div.main-tab div")];
  let corporate_firm_tabcontents = [...document.querySelectorAll(".tab-content")];
  let corporate_firm_activeTabIndex = corporate_firm_tabTiles.findIndex(tab => { return tab == e.target.parentElement })
  corporate_firm_tabTiles.forEach((tabTile, index) => {
    tabTile.classList.toggle('active', index === corporate_firm_activeTabIndex)
  })
  corporate_firm_tabcontents.forEach((tabcontent, index) => {
  tabcontent.classList.toggle('active', index === corporate_firm_activeTabIndex)
  })
}