// International Telephone Input
const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
  initialCountry: "auto",
  geoIpLookup: true,
  separateDialCode: true,
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});
phoneInputField.addEventListener("change", () => {
  const selectedCountryData = phoneInput.getSelectedCountryData();
});
fetch("https://ipapi.co/json/")
  .then(response => response.json())
  .then(data => {
    const countryCode = data.country_code;
    console.log(data)
    phoneInput.setCountry(countryCode.toLowerCase());
  })
  .catch(error => {
    console.error("Error fetching IP geolocation:", error);
  });

//carousel
$('.review-carousel').owlCarousel({
  autoplay: true,
  smartSpeed: 1000,
  loop: true,
  margin: 30,
  center: false,
  dots: false,
  nav: false,
  navText: [
    '<button class="arrow_btn><i class="fa-solid fa-arrow-left"></i></button>',
    '<button class="arrow_btn"><i class="fa-solid fa-arrow-right"></i></button>'
  ],
  responsive: {
    0: {
      items: 1
    },
    992: {
      items: 1
    },
    1000: {
      items: 2
    }
  }
})
$('.service-carousel').owlCarousel({
  autoplay: true,
  smartSpeed: 1000,
  loop: true,
  margin: 30,
  center: false,
  dots: false,
  nav: false,
  navText: [
    '<button class="arrow_btn><i class="fa-solid fa-arrow-left"></i></button>',
    '<button class="arrow_btn"><i class="fa-solid fa-arrow-right"></i></button>'
  ],
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 2,
      margin: 50
    },
    1200: {
      items: 3
    }
  }
})

//counter
let counterWrapper = document.querySelector(".counter_section");
const counterWrapperObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            counter()
        }
    }, {
        root: null,
        rootMargin: "-200px",
        threshold: "0"
    });
});
counterWrapperObserver.observe(counterWrapper)

function counter() {
    $(document).ready(function () {
        $('.counter').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',

                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
}