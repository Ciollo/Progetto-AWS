const accordionButtons = document.querySelectorAll("[data-accordion-target]");

accordionButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    const targetId = event.currentTarget.getAttribute("data-accordion-target");
    const targetEl = document.querySelector(targetId);

    targetEl.classList.toggle("hidden");
  });
});