const productContainer = [
  ...document.querySelectorAll(".container__row-wrap-list"),
];
const btnPrev = [...document.querySelectorAll(".container__row-btn-prev")];
const btnNext = [...document.querySelectorAll(".container__row-btn-next")];
const card = document.querySelector(".container__row-card");
let cardWidth = Math.floor(card.getBoundingClientRect().width);
let containerWidth = productContainer[0].getBoundingClientRect().width;
let tile = Math.floor(containerWidth / cardWidth);
let numberItem = 5;

console.log(productContainer[0].getBoundingClientRect().width);
productContainer.forEach((item, i) => {
  window.addEventListener("resize", () => {
    productContainer[i].scrollLeft = 0;
    cardWidth = Math.ceil(card.getBoundingClientRect().width);
    containerWidth = productContainer[0].getBoundingClientRect().width;
    tile = Math.floor(containerWidth / cardWidth);
  });
  btnNext[i].addEventListener("click", () => {
    productContainer[i].scrollLeft += Math.ceil(containerWidth / tile);
    if (
      productContainer[i].scrollLeft >=
      Math.ceil(containerWidth / tile) * numberItem - 10
    ) {
      productContainer[i].scrollLeft = 0;
    }
  });
  btnPrev[i].addEventListener("click", () => {
    productContainer[i].scrollLeft -= Math.ceil(containerWidth / tile);
    if (productContainer[i].scrollLeft <= 0) {
      productContainer[i].scrollLeft =
        Math.ceil(containerWidth / tile) * numberItem;
    }
  });
});


