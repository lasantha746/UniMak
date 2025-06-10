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
document.getElementById("modalOverlay").addEventListener("click", function (e) {
  if (e.target === this) {
    closeModal();
  }
});

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
