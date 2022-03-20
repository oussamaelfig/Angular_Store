$("#open-cart").click(function () {
  $(".cart").addClass("active");
});

$("#close-cart").click(function () {
  $(".cart").removeClass("active");
});

//cart working JS
if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}

function ready() {
  //Remove items from cart
  var reomveCartButtons = document.getElementsByClassName("cart-remove");
  console.log(reomveCartButtons);
  for (var i = 0; i < reomveCartButtons.length; i++) {
    var button = reomveCartButtons[i];
    button.addEventListener("click", removeCartItem);
  }
}

function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.remove();
}
