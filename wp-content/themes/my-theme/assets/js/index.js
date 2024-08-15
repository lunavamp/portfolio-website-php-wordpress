//responsive menu
const burgerMenu = document.querySelector(".burger-menu-container");
const body = document.body;

burgerMenu.addEventListener("click", () => {
  body.classList.toggle("menu-active");
});
document.addEventListener("click", (e) => {
  const $el = e.target;
  if ($el.tagName === "A" && $el.hash.startsWith("#")) {
    body.classList.remove("menu-active");
  }
});

// glide
document.addEventListener("DOMContentLoaded", function () {
  new Glide(".glide", {
    type: "carousel",
    startAt: 0,
    autoplay: 3000,
    hoverpause: true,
    perView: 3,
    animationDuration: 800,
    animationTimingFunc: "ease-in-out",
    breakpoints: {
      990: { perView: 1 },
    },
  }).mount();
});

//modal
const modal = document.getElementById("modal");
const btn = document.querySelector(".openModal");
const span = document.getElementById("closeModal");

btn.onclick = function () {
  modal.classList.add("show");
};

span.onclick = function () {
  modal.classList.remove("show");
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.classList.remove("show");
  }
};

document.addEventListener("DOMContentLoaded", function () {
  const cursor = document.querySelector(".cursor");
  const allElements = document.querySelectorAll(
    "a, button, .glide__slide, summary"
  );

  document.addEventListener("mousemove", (e) => {
    cursor.setAttribute(
      "style",
      "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;"
    );
  });

  document.addEventListener("click", (e) => {
    cursor.classList.add("expand");
    setTimeout(() => {
      cursor.classList.remove("expand");
    }, 500);
  });

  allElements.forEach((el) => {
    el.addEventListener("mouseover", () => {
      cursor.classList.add("cursor-hover");
    });
    el.addEventListener("mouseout", () => {
      cursor.classList.remove("cursor-hover");
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const elObserve = document.querySelectorAll(".el-observe");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.1,
    }
  );
  elObserve.forEach((el) => {
    observer.observe(el);
  });
});
document.querySelector(".modal-form").addEventListener("submit", function (e) {
  e.preventDefault();
  const formData = new FormData(this);
  fetch("./functions.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      alert("Your message was sent successfully!");
    })
    .catch((error) => {
      alert("Error: Email failed to send.");
      console.error("Error:", error);
    });
});
