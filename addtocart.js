inputElement = document.getElementById("cartCount");
addToCart = document.getElementById("addToCartButton");
price = document.getElementById("price");

function updateCartPrice()
{
    addToCart.innerText = "$" + Number(inputElement.value) * Number(price.innerHTML.replace("$", "")) + " Add To Cart";
}