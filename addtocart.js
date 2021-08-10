inputElement = document.getElementById("cartCount");
addToCart = document.getElementById("addToCartButton");
price = document.getElementById("price");
titleName = document.getElementsByTagName("title")[0].innerText;

function updateCartPrice()
{
    if (typeof(Storage) !== "undefined") 
    {
        // Store
        sessionStorage.setItem(titleName, Number(inputElement.value));
        // Retrieve
        addToCart.innerText = "$" + (Number(sessionStorage.getItem(titleName)) * Number(price.innerHTML.replace("$", ""))).toFixed(2) + " Add To Cart";

        console.log(sessionStorage.getItem(titleName));
    } 
    else 
    {
        alert("Sorry, your browser does not support Web Storage...");
    }
}