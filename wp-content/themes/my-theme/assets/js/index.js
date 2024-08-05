!(function () {
  const e = document.querySelector(".page-top");
  new IntersectionObserver(
    ([e]) => {
      const t = 0 === e.intersectionRatio ? "add" : "remove";
      document.documentElement.classList[t]("is-scroll");
    },
    { rootMargin: "0px", threshold: 1 }
  ).observe(e),
    document.querySelector(".header-menu");
  const t = document.querySelector(".burger-menu-container"),
    n = document.body;
  t.addEventListener("click", () => {
    n.classList.toggle("menu-active");
  }),
    document.addEventListener("click", (e) => {
      const t = e.target;
      "A" === t.tagName &&
        t.hash.startsWith("#") &&
        n.classList.remove("menu-active");
    }),
    document.addEventListener("DOMContentLoaded", function () {
      new Glide(".glide", {
        type: "carousel",
        startAt: 0,
        autoplay: 3000,
        hoverpause: !0,
        perView: 3,
        animationDuration: 800,
        animationTimingFunc: "ease-in-out",
        breakpoints: {
          990: { perView: 1 },
        },
      }).mount();
    });
  const o = document.getElementById("modal"),
    c = document.querySelector(".openModal"),
    i = document.getElementById("closeModal");
  (c.onclick = function () {
    o.classList.add("show");
  }),
    (i.onclick = function () {
      o.classList.remove("show");
    }),
    (window.onclick = function (e) {
      e.target == o && o.classList.remove("show");
    });
})();
document.addEventListener("DOMContentLoaded", function () {
  const cursor = document.querySelector(".cursor");
  const links = document.querySelectorAll("a");
  const btns = document.querySelectorAll("button");
  const slides = document.querySelectorAll(".glide__slide");
  const allElements = [...links, ...btns, ...slides];

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
