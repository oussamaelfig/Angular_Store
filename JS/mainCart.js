import products from "../JSON/produits.json" assert { type: "json" };

//dynamic import
// setTimeout(() => {
//   import("../JSON/produits.json", { assert: { type: "json" } }).then((mod) => {
//     //mod is my module
//     console.log(mod.default);
//   });
// }, 2000);

// console.log(mod.default[3].nom);

//static import
// import data from "../JSON/produits.json" assert { type: "json" };
// console.log(data.characters);
// let products = data.characters;

// var json = JSON.parse(
//   $.getJSON({
//     url: "../JSON/produits.json",
//     async: false,
//   }).responseText
// );

//Cart va être un tableau contenant tout les produits avec leurs indices
let carts = document.querySelectorAll(".add-cart");

console.log(products[1].photo);
//À chaque click j'increment le nombre de produit dans le panier et met à jour le prix
for (let i = 0; i < carts.length; i++) {
  carts[i].addEventListener("click", () => {
    cartNumbers(products[i]);
    totalCost(products[i]);
  });
}

//fonction qui ompte le nombre de prosuit dans le panier avec le sessionStorage
function onLoadCartNumbers() {
  let productNumbers = sessionStorage.getItem("cartNumbers");
  if (productNumbers) {
    document.querySelector(".cartCount").textContent = productNumbers;
  }
}

//fonction qui ajoute au local storage le nombre
//de produit selectionne par l'utilisateur à mettre dans le panier
function cartNumbers(product) {
  console.log("the product", product);
  let productNumbers = sessionStorage.getItem("cartNumbers");

  productNumbers = parseInt(productNumbers);
  if (productNumbers) {
    sessionStorage.setItem("cartNumbers", productNumbers + 1);
    document.querySelector(".cartCount").textContent = productNumbers + 1;
  } else {
    sessionStorage.setItem("cartNumbers", 1);
    document.querySelector(".cartCount").textContent = 1;
  }
  setItems(product);
}

//Bouton de reinitialisation
//lorsqu'on reinitialise on met le panier à 0
function resetButtonClicked() {
  var cartContent = document.getElementsByClassName("product-add")[0];
  while (cartContent.hasChildNodes()) {
    cartContent.removeChild(cartContent.firstChild);
  }
  sessionStorage.clear();
  location.reload(true);
}

//bouttion d'achat
//à l'achat d'un produit on affiche une alerte avec un messsage et on rememt le panier à 0
function buyButtonClicked() {
  alert("Votre commande a été placée");
  var cartContent = document.getElementsByClassName("product-add")[0];
  while (cartContent.hasChildNodes()) {
    cartContent.removeChild(cartContent.firstChild);
  }
  sessionStorage.clear();
  location.reload(true);
}

//mettre dans le local storage le nomre de prioduit ainsi
//que la description et tout les caracteristique du peoduit au sessionStorage
//on désincrement la quantit en stock aussi
function setItems(product) {
  let cartItems = sessionStorage.getItem("productsInCart");
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

  sessionStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

//mettre à jour le prix dans le panier dans le sessionStorage
function totalCost(product) {
  let cartCost = sessionStorage.getItem("totalCost");

  if (cartCost != null) {
    cartCost = parseInt(cartCost);
    sessionStorage.setItem("totalCost", cartCost + product.prix);
  } else {
    sessionStorage.setItem("totalCost", product.prix);
  }
}

//Affichage du panier à chaque fois qu'un utilisateur selectionne un produit
//afficher ce produit au panier et afficher son pris et ses caracteristiques
function displayCart() {
  let cartItems = sessionStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let productContainer = document.querySelector("tbody.product-add");
  let cartCost = sessionStorage.getItem("totalCost");

  if (cartItems && productContainer) {
    productContainer.innerHTML = "";
    Object.values(cartItems).map((item) => {
      productContainer.innerHTML += `
      <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="${
                      item.photo
                    }" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">${item.nom}</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <p id="total" class="mb-0" style="font-weight: 500;">${
                    item.quantité - item.incart
                  }</p>
                </td>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="${
                      item.incart
                    }" type="number"
                      class="form-control form-control-sm" style="width: 50px;" />
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;">$${
                    Math.round(item.incart * item.prix * 100) / 100
                  }</p>
                </td>
              </tr>
        `;
    });

    cartCost = parseFloat(cartCost);

    productContainer.innerHTML += `
    <div class="basketTotalContainer" align="right" style = "width:100%;">
    <h4 class="basketTotalTitle">
        Total (Hors Taxes) = $${Math.round(cartCost * 100) / 100}
    </h4>
    <h4 class="basketTotal">
Total (Taxes incluses) = $${
      Math.round((cartCost + cartCost * 0.05 + cartCost * 0.1) * 100) / 100
    }
    </h4>
</div>`;

    console.log(typeof cartCost);
  }
}

onLoadCartNumbers();
displayCart();

//Une fois on clique sur le bouton achat executer la fonction buyButtonClicked
document
  .getElementsByClassName("btn-buy")[0]
  .addEventListener("click", buyButtonClicked);
//Une fois on clique sur le bouton reinitialiser le panier executer la fonction buyButtonClicked
document
  .getElementsByClassName("btn-buy")[1]
  .addEventListener("click", resetButtonClicked);
