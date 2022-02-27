let purchased = [];
let products = document.querySelectorAll(".product-name");
let product = Array.from(products);
let cart = document.querySelector(".lowercart");
var a = document.getElementsByClassName("product-name");
var b = document.getElementById("removethis");
console.log(a[0].innerText);

console.log(product);

function addToCart(val) {
  purchased.push(a[val].innerText);
  b.remove();
  //
  let row = document.createElement("div");
  row.innerHTML = purchased[purchased.length - 1];
  row.style.display = "flex";
  row.style.justifyContent = "space-between";
  let btn = document.createElement("button");
  btn.innerHTML = "remove";
  btn.type = "submit";
  btn.onclick = function (event) {
    console.log(purchased);
    event.target.parentElement.remove();
  };
  row.appendChild(btn);
  cart.appendChild(row);
  //
}
