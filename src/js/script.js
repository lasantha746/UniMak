// Page Loading
window.addEventListener("load", function () {
  setTimeout(() => {
    document.getElementById("pageLoader").classList.add("hidden");
  }, 1000);
});

// Side Navigation
const menuToggle = document.getElementById("menuToggle");
const sideNav = document.getElementById("sideNav");
const sideNavOverlay = document.getElementById("sideNavOverlay");
const sideNavClose = document.getElementById("sideNavClose");

function openSideNav() {
  sideNav.classList.add("active");
  sideNavOverlay.classList.add("active");
}

function closeSideNav() {
  sideNav.classList.remove("active");
  sideNavOverlay.classList.remove("active");
}

menuToggle.addEventListener("click", openSideNav);
sideNavClose.addEventListener("click", closeSideNav);
sideNavOverlay.addEventListener("click", closeSideNav);

// Modal Functions
function openModal(productId) {
  const modal = document.getElementById("modalOverlay");
  modal.classList.add("active");
  document.body.style.overflow = "hidden";
}

function closeModal() {
  const modal = document.getElementById("modalOverlay");
  modal.classList.remove("active");
  document.body.style.overflow = "auto";
}

// Close modal on overlay click
function handleModalClick(e) {
  if (e.target === e.currentTarget) {
    closeModal();
  }
}
const modal = document.getElementById("modalOverlay");
if (modal) modal.addEventListener("click", handleModalClick);


// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
      closeSideNav();
    }
  });
});

// Scroll animations
const observerOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.animationPlayState = "running";
    }
  });
}, observerOptions);

// Observe all product cards for scroll animations
document.querySelectorAll(".product-card").forEach((card) => {
  observer.observe(card);
});

// Add stagger animation to cards
document.querySelectorAll(".product-card").forEach((card, index) => {
  card.style.animationDelay = `${index * 0.1}s`;
});

// Navbar scroll effect
window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");

  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// Optional: Add smooth scroll behavior
document.documentElement.style.scrollBehavior = "smooth";

// Menu toggle functionality (if needed)
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menuToggle");

  if (menuToggle) {
    menuToggle.addEventListener("click", function () {
      // Add your mobile menu toggle logic here
      console.log("Menu toggled");
    });
  }
});

//AOS animation



//SendContact
function sendContactMail() {
  showloder();

  var namec = document.getElementById("name");
  var emailc = document.getElementById("email");
  var mobilec = document.getElementById("mobile");
  var messagec = document.getElementById("message");

  var productTitle = document.getElementById("product_title");
  var productImg = document.getElementById("product_img");
  const fullImgUrl = productImg.value.replace(/^\.?\/?/, "https://unimak.lk/");

  var f = new FormData();
  f.append("namec", namec.value);
  f.append("emailc", emailc.value);
  f.append("mobilec", mobilec.value);
  f.append("messagec", messagec.value);

  if (productTitle && productImg) {
    f.append("product_title", productTitle.value);
    f.append("product_img", fullImgUrl);
  }

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      // alert(response);

      if (response == 1) {
        hidenloder();
        alert("Send Successfull");
        window.location.href = "contact.php";

      } else {
        hidenloder();
        alert(response);
      }

    }
  };

  request.open("POST", "./process/sendMailContact.php", true);
  request.send(f);
}


function showloder() {
  document.getElementById('mailLoder').style.visibility = 'visible';
}

function hidenloder() {
  document.getElementById('mailLoder').style.visibility = 'hidden';
}