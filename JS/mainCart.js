// $("#open-cart").click(function () {
//   $(".cart").addClass("active");
// });

// $("#close-cart").click(function () {
//   $(".cart").removeClass("active");
// });

// //cart working JS
// if (document.readyState == "loading") {
//   document.addEventListener("DOMContentLoaded", ready);
// } else {
//   ready();
// }

// function ready() {
//   //Remove items from cart
//   var reomveCartButtons = document.getElementsByClassName("cart-remove");
//   console.log(reomveCartButtons);
//   for (var i = 0; i < reomveCartButtons.length; i++) {
//     var button = reomveCartButtons[i];
//     button.addEventListener("click", removeCartItem);
//   }
//   //Quantity changes
//   var quantityInputs = document.getElementsByClassName("cart-quantity");
//   for (var i = 0; i < quantityInputs.length; i++) {
//     var input = quantityInputs[i];
//     input.addEventListener("change", quantityChanged);
//   }
//   //Add to cart
//   var addCart = document.getElementsByClassName("add-cart");
//   for (var i = 0; i < addCart.length; i++) {
//     var button = addCart[i];
//     button.addEventListener("click", addCartClicked);
//   }
//   //Buy button Work
//   document
//     .getElementsByClassName("btn-buy")[0]
//     .addEventListener("click", buyButtonClicked);
//   document
//     .getElementsByClassName("btn-buy")[1]
//     .addEventListener("click", resetButtonClicked);
// }

// //reset button
// function resetButtonClicked() {
//   var cartContent = document.getElementsByClassName("cart-content")[0];
//   while (cartContent.hasChildNodes()) {
//     cartContent.removeChild(cartContent.firstChild);
//   }
//   updatetotal();
// }

// //Buy Button
// function buyButtonClicked() {
//   alert("Votre commande a été placée");
//   var cartContent = document.getElementsByClassName("cart-content")[0];
//   while (cartContent.hasChildNodes()) {
//     cartContent.removeChild(cartContent.firstChild);
//   }
//   updatetotal();
// }

// //Remove items from cart
// function removeCartItem(event) {
//   var buttonClicked = event.target;
//   buttonClicked.parentElement.remove();
//   updatetotal();
// }

// //Quantity changes
// function quantityChanged(event) {
//   var input = event.target;
//   if (isNaN(input.value) || input.value <= 0) {
//     input.value = 1;
//   }
//   updatetotal();
// }

// //Add to cart
// function addCartClicked(event) {
//   var button = event.target;
//   var shopProducts = button.parentElement;
//   var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
//   var price = shopProducts.getElementsByClassName("price")[0].innerText;
//   var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
//   addProductToCart(title, price, productImg);
//   localStorage.setItem(
//     "ShoppingCart",
//     JSON.stringify(addProductToCart(title, price, productImg))
//   );
//   updatetotal();
// }

// function addProductToCart(title, price, productImg) {
//   var cartShopBox = document.createElement("div");
//   cartShopBox.classList.add("cart-box");
//   var cartItems = document.getElementsByClassName("cart-content")[0];
//   var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
//   for (var i = 0; i < cartItemsNames.length; i++) {
//     if (cartItemsNames[i].innerText == title) {
//       alert("Vous avez déjà ajouté ce produit au panier");
//       return;
//     }
//   }

//   var cartBoxContent = `
//           <img src="${productImg}" alt=""  class="cart-img">
//             <div class="detail-box">
//           <div class="cart-product-title">${title}</div>
//           <div class="cart-price">${price}</div>
//           <input type="number" value="1" class="cart-quantity">
//           </div>
//           <!--Remove cart-->
//           <i class="bi bi-trash-fill cart-remove"></i>`;

//   cartShopBox.innerHTML = cartBoxContent;
//   cartItems.append(cartShopBox);
//   cartShopBox
//     .getElementsByClassName("cart-remove")[0]
//     .addEventListener("click", removeCartItem);
//   cartShopBox
//     .getElementsByClassName("cart-quantity")[0]
//     .addEventListener("change", quantityChanged);
// }
// //Update Total
// function updatetotal() {
//   var cartContent = document.getElementsByClassName("cart-content")[0];
//   var cartBoxes = cartContent.getElementsByClassName("cart-box");
//   var total = 0;
//   var totalApresTaxes = 0;
//   var montanttTPS = 0;
//   var montantTVQ = 0;

//   for (var i = 0; i < cartBoxes.length; i++) {
//     var cartBox = cartBoxes[i];
//     var priceElement = cartBox.getElementsByClassName("cart-price")[0];
//     var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
//     var price = parseFloat(priceElement.innerText.replace("$", ""));
//     var quantity = quantityElement.value;
//     total = total + price * quantity;
//     montanttTPS = total * 0.05;
//     montantTVQ = total * 0.1;
//     totalApresTaxes = total + montantTVQ + montanttTPS;
//   }
//   //If price contain some Cents Value
//   total = Math.round(total * 100) / 100;
//   totalApresTaxes = Math.round(totalApresTaxes * 100) / 100;
//   console.log(totalApresTaxes);
//   document.getElementsByClassName("total-price")[0].innerText = "$" + total;
//   document.querySelectorAll(".total-price-apres-taxes")[0].innerText =
//     "$" + totalApresTaxes;
// }

let carts = document.querySelectorAll(".add-cart");
let products = [
  {
    nom: "APPLE IPHONE 13 256GO",
    quantité: 15,
    prix: 1599.0,
    photo: "../Images/iphone-13-pro-green-select.png",
    incart: 0,
  },
  {
    nom: "APPLE IPHONE 12 128GO",
    quantité: 40,
    prix: 899.99,
    photo: "../Images/iphone12.jpg",
    incart: 0,
  },
  {
    nom: "GALAXY NOTE10, NOTE10+ 5G 246GO",
    quantité: 12,
    prix: 799.0,
    photo: "../Images/SamsungGalaxyNote10+.webp",
    incart: 0,
  },
  {
    nom: "GOOGLE PIXEL 6 128GO",
    quantité: 20,
    prix: 599.99,
    photo: "../Images/GooglePixel6Pro.png",
    incart: 0,
  },
  {
    nom: "MACBOOK PRO 14 PO",
    quantité: "20",
    prix: 2499.0,
    photo: "../Images/macbook-product.jpg",
    incart: 0,
  },
  {
    nom: "IMAC 24 PO",
    quantité: 30,
    prix: 1199.99,
    photo: "../Images/imac-po.jpg",
    incart: 0,
  },
  {
    nom: "SKYTECH ARCHANGEL GAMING COMPUTER PC DESKTOP – RYZEN",
    quantité: 55,
    prix: 1049.99,
    photo: "../Images/PcGamer-Ryzen.jpg",
    incart: 0,
  },
  {
    nom: "ZENBOOK PRO DUO 15 OLED (UX582, 11TH GEN INTEL)",
    quantité: 6,
    prix: 4199.0,
    photo: "../Images/Zenbook-Pro.webp",
    incart: 0,
  },
  {
    nom: "AIRPODS PRO",
    quantité: 14,
    prix: 329.0,
    photo: "../Images/airpods-product.jpg",
    incart: 0,
  },
  {
    nom: "APPLE WATCH SE",
    quantité: 10,
    prix: 369.0,
    photo: "../Images/watch.jpg",
    incart: 0,
  },
  {
    nom: "MAGIC MOUSE - SURFACE MULTI-TOUCH NOIRE",
    quantité: 10,
    prix: 119.0,
    photo: "../Images/souris-apple.jpg",
    incart: 0,
  },
  {
    nom: "EVE CAM",
    quantité: 111,
    prix: 219.95,
    photo: "../Images/eve-cam.jpg",
    incart: 0,
  },
];

for (let i = 0; i < carts.length; i++) {
  carts[i].addEventListener("click", () => {
    cartNumbers(products[i]);
    totalCost(products[i]);
  });
}

function onLoadCartNumbers() {
  let productNumbers = localStorage.getItem("cartNumbers");
  if (productNumbers) {
    document.querySelector(".cartCount").textContent = productNumbers;
  }
}

function cartNumbers(product) {
  console.log("the product", product);
  let productNumbers = localStorage.getItem("cartNumbers");

  productNumbers = parseInt(productNumbers);
  if (productNumbers) {
    localStorage.setItem("cartNumbers", productNumbers + 1);
    document.querySelector(".cartCount").textContent = productNumbers + 1;
  } else {
    localStorage.setItem("cartNumbers", 1);
    document.querySelector(".cartCount").textContent = 1;
  }
  setItems(product);
}

function setItems(product) {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);

  if (cartItems != null) {
    if (cartItems[product.nom] == undefined) {
      cartItems = {
        ...cartItems,
        [product.nom]: product,
      };
    }
    cartItems[product.nom].incart += 1;
    cartItems[product.nom].quantité -= 1;
  } else {
    product.incart = 1;
    cartItems = {
      [product.nom]: product,
    };
  }

  localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
  let cartCost = localStorage.getItem("totalCost");

  if (cartCost != null) {
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost", cartCost + product.prix);
  } else {
    localStorage.setItem("totalCost", product.prix);
  }
}

function displayCart() {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let productContainer = document.querySelector(".product-container-plus");
  let cartCost = localStorage.getItem("totalCost");

  if (cartItems && productContainer) {
    productContainer.innerHTML = "";
    Object.values(cartItems).map((item) => {
      productContainer.innerHTML += `
      <div class="d-flex justify-content-around">
          <div class="col-12 col-md-8 product-pic-name">
            <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
            <img src="${item.photo}" style="width: 100px" alt="" />
            <span>${item.nom}</span>
          </div>
          <div class="price">
            ${item.prix}
          </div>
          <div class="quantity">    
          <i class="bi bi-arrow-left-circle-fill"></i>
          <span>${item.incart}</span>
          <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
          <div class="total">$${item.incart * item.prix},00</div>
        </div>
        `;
    });

    productContainer.innerHTML += `
    <div class="basketTotalContainer">
    <h4 class="basketTotalTitle">
        Total
    </h4>
    <h4 class="basketTotal">
        $${cartCost},00
    </h4>
</div>`;
  }
}

onLoadCartNumbers();
displayCart();
