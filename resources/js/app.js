const accordion = () => {
  const accordionContainer = document.querySelector(".accordion");
  const accordionItems = accordionContainer.querySelectorAll(".accordion-item");

  accordionItems.forEach((item, index) => {
      const content = item.querySelector(".accordion-collapse");
      content.style.maxHeight = index === 0 ? `${content.scrollHeight}px` : "0px";
      if (index === 0) item.querySelector(".accordion-arrow").classList.add("rotate-180");
  });

  accordionContainer.addEventListener("click", (e) => {
      const toggle = e.target.closest(".accordion-toggle");
      if (!toggle) return;

      const item = toggle.closest(".accordion-item");
      const content = item.querySelector(".accordion-collapse");
      const icon = toggle.querySelector(".accordion-arrow");
      const isOpen = content.style.maxHeight !== "0px";

      accordionItems.forEach((otherItem) => {
          const otherContent = otherItem.querySelector(".accordion-collapse");
          const otherIcon = otherItem.querySelector(".accordion-arrow");
          otherContent.style.maxHeight = "0px";
          otherIcon.classList.remove("rotate-180");
      });

      if (!isOpen) {
          content.style.maxHeight = `${content.scrollHeight}px`;
          icon.classList.add("rotate-180");
      }
  });
}

const mobileNavigation = () => {
  const navToggle = document.getElementById("navToggle");
  const nav = document.getElementById("nav");

  navToggle.addEventListener("click", (event) => {
      event.stopPropagation();
      nav.classList.toggle("show");
  });

  document.addEventListener("click", (event) => {
      if (!nav.contains(event.target) && !navToggle.contains(event.target)) {
          nav.classList.remove("show");
      }
  });
}

accordion();
mobileNavigation();