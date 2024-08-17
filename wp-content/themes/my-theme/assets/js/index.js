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

//recaptcha and form
const d = document,
  bC = body.classList,
  l = location,
  $ = (e, c = d) => c.querySelector(e),
  $$ = (e, c = d) => c.querySelectorAll(e),
  $e = (sel, type, func) => sel.addEventListener(type, func);

const $form = $("form");
const $formStatus = $(".form-status", $form);

$e($form, "input", function (e) {
  const els = this.elements;
  const el = e.target;

  els.submit.disabled = !els.name.value || !els.message.value;
});
const mailStatus = (msg, s) => {
  $formStatus.textContent = msg;
  $formStatus.classList[s ? "add" : "remove"]("success");
  $formStatus.classList[s ? "remove" : "add"]("error");
};
$e($form, "submit", function (e) {
  const els = this.elements;
  e.preventDefault();
  grecaptcha.ready(function () {
    grecaptcha
      .execute("6Le1KSgqAAAAANObgXPpNY3q0HMR2YBzOFvf8GKH", { action: "submit" })
      .then(function (token) {
        $formStatus.textContent = "Sending in progress";
        els.submit.disabled = true;
        const form = { token };
        for (let i = 0; i < els.length; i++) {
          const item = els[i];
          form[item.name] = item.value;
        }
        fetch("/wp-content/themes/my-theme/sendMail.php", {
          method: "POST",
          body: JSON.stringify(form),
        })
          .then((v) => v.json())
          .then((v) => {
            if (v.status) {
              for (let i = 0; i < els.length; i++) {
                els[i].value = "";
              }
              mailStatus("Send successfully", 1);
            } else {
              mailStatus("Message didnt send", 0);
            }
            els.submit.disabled = false;
          })
          .catch(() => {
            mailStatus("Message didnt send", 0);
            els.submit.disabled = false;
          });
      });
  });
});
