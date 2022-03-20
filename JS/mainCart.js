// // cart
// let cartIcon = document.querySelector("#cart-icon");
// let cart = document.querySelector(".cart");
// let closeCart = document.querySelector("#close-cart");

// //open cart
// cartIcon.onlclick = () => {
//   cart.classList.add("active");
// };

// //close cart
// closeCart.onlclick = () => {
//   cart.classList.remove("active");
// };

function open() {
  document.querySelector(".cart").classList.add("active");
}

function close() {
  document.querySelector(".cart").classList.remove("active");
}

document.querySelector("#cart-icon").onlclick = function () {
  open();
};

document.querySelector("#close-cart").onlclick = function () {
  close();
};
