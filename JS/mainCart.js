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

var nomProduit = products.nom;
var quantityInStock = products.quantité;
var prixProduit = products.prix;
var incart = products.incart;

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

//reset button
function resetButtonClicked() {
  var cartContent = document.getElementsByClassName("product-add")[0];
  while (cartContent.hasChildNodes()) {
    cartContent.removeChild(cartContent.firstChild);
  }
  localStorage.clear();
  location.reload(true);
}

//Buy Button
function buyButtonClicked() {
  alert("Votre commande a été placée");
  var cartContent = document.getElementsByClassName("product-add")[0];
  while (cartContent.hasChildNodes()) {
    cartContent.removeChild(cartContent.firstChild);
  }
  localStorage.clear();
  location.reload(true);
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
  let productContainer = document.querySelector("tbody.product-add");
  let cartCost = localStorage.getItem("totalCost");

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

//Buy button Work
document
  .getElementsByClassName("btn-buy")[0]
  .addEventListener("click", buyButtonClicked);
//reset button
document
  .getElementsByClassName("btn-buy")[1]
  .addEventListener("click", resetButtonClicked);
