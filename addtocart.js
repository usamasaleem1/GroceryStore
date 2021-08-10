inputElement = document.getElementById("cartCount");
addToCart = document.getElementById("addToCartButton");
price = document.getElementById("price");
titleName = document.getElementsByTagName("title")[0].innerText;

loadedStorage = false;

function updateCartPrice()
{
    if (localStorage.getItem(String(titleName))) 
    {
        if(!loadedStorage)
        {
            addToCart.innerText = "$" + (Number(localStorage.getItem(String(titleName))) * Number(price.innerHTML.replace("$", ""))).toFixed(2) + " Add To Cart";
            inputElement.value = Number(localStorage.getItem(String(titleName)));
            loadedStorage = true;
        }
        else
        {
            localStorage.setItem(String(titleName), String(inputElement.value));
            addToCart.innerText = "$" + (Number(localStorage.getItem(String(titleName))) * Number(price.innerHTML.replace("$", ""))).toFixed(2) + " Add To Cart";
        }
    } 
    else 
    {
        addToCart.innerText = "$" + (Number(inputElement.value) * Number(price.innerHTML.replace("$", ""))).toFixed(2) + " Add To Cart";
        localStorage.setItem(String(titleName), String(inputElement.value));
        loadedStorage = true;
    }
}