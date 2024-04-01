jQuery(document).ready(function ($) {
  clampText();

  $(window).resize(function () {
    clampText();
  });
});

function clampText() {
  const storyTitles = document.querySelectorAll(".story__link-title");
  const imageWidth = document.querySelector(".story__image").offsetWidth;

  storyTitles.forEach((title) => {
    if (title.offsetWidth > imageWidth) {
      title.classList.add("clamp-size");
    }
  });
}
