document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll(".sections");
  const anchors = document.querySelectorAll(".anchor");

  window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    const scrollPosition = window.scrollY - header.offsetHeight;

    if (scrollPosition > 0) {
      header.style.boxShadow = "5px 1px 10px rgba(0, 0, 0, 0.4)";
    } else {
      header.style.boxShadow = "none";
    }

    let activeSectionIndex = 0;

    sections.forEach((section, index) => {
      const sectionTop = section.offsetTop - header.offsetHeight;
      const sectionBottom = sectionTop + section.offsetHeight;

      if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
        activeSectionIndex = index;
      }
    });

    const maxScroll = document.documentElement.scrollHeight - window.innerHeight - 200;

    if (scrollPosition >= maxScroll) {
      activeSectionIndex = sections.length - 1;
    }

    anchors.forEach((anchor) => anchor.classList.remove("activeAnchor"));
    anchors[activeSectionIndex].classList.add("activeAnchor");
  });

  const revealElements = [
    { id: "Full-stack", origin: "left" },
    { id: "Front-end", origin: "right" },
    { id: "Mentor", origin: "left" },
    { id: "LinkedIn", origin: "bottom" },
    { id: "GitHub", origin: "bottom", delay: 150 },
    { id: "Youtube", origin: "bottom", delay: 300 },
    { id: "cv", origin: "bottom", delay: 450 }
  ];

  function animateScrollReveal({ id, origin, delay = 0 }) {
    ScrollReveal().reveal(`#${id}`, {
      origin: origin,
      duration: 1500,
      distance: "30%",
      delay: delay
    });
  }

  revealElements.forEach(animateScrollReveal);
});
