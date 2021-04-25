/* Cookie consent form with bluring effect applied for the rest of the items */
var cookie_consent = localStorage.getItem('cookie-consent')
var blur_elements = document.querySelector("body").querySelectorAll("div:not(div.cookie,div.cookie>*)")
if (cookie_consent == 'true') {
    document.querySelector(".cookie").style.display = "none"
    blur_elements.forEach((div) => { div.style.opacity = "1" })
    document.querySelector("body").querySelectorAll("a").forEach((button) => { button.style.pointerEvents = "auto"; })
    document.querySelector("body").querySelectorAll("input").forEach((button) => { button.disabled = ""; })
    console.log("You have agreed to the cookie policy")
    localStorage.setItem('cookie-consent', true);
} else {
    blur_elements.forEach((div) => { div.style.opacity = "0.65" })
    document.querySelector("body").querySelectorAll("a:not(a.learn-more)").forEach((button) => { button.style.pointerEvents = "none"; })
    document.querySelector("body").querySelectorAll("input:not(input.agree)").forEach((button) => { button.disabled = "true"; })
}
// Click accept the cookie and the opacity of the rest of the items will be 1
function myFunction() {
    document.querySelector(".cookie").style.display = "none";
    blur_elements.forEach((div) => { div.style.opacity = "1" })
    document.querySelector("body").querySelectorAll("a").forEach((button) => { button.style.pointerEvents = "auto"; })
    document.querySelector("body").querySelectorAll("input").forEach((button) => { button.disabled = ""; })
    console.log("You have agreed to the cookie policy")
    localStorage.setItem('cookie-consent', true);
}

/* add_to_cart button*/

var count = 0
var islogin = localStorage.getItem('login')
function add_to_cart(item) {
    if (islogin == 'true') {
        count += parseInt(document.querySelector(".shoe-qty").value)
        var result = count.toString()
        document.querySelectorAll(".cart-qty").forEach((p_tag) => { p_tag.innerHTML = result })
        document.querySelectorAll(".cart-qty").forEach((p_tag) => { p_tag.style.color = "red" })
        document.querySelectorAll(".cart-qty").forEach((p_tag) => { p_tag.style.display = "inline" })
        localStorage.setItem(item, JSON.stringify([document.querySelector(".mobile-menu-opened>section").querySelector("div>div").children[1].children[1].textContent, count, document.querySelector(".mobile-menu-opened>section").querySelector("div>div").children[0].children[0].getAttribute('src')]))
    } else {
        document.querySelector(".add-to-cart").setAttribute("href", "../myaccount.html")
        alert("Please login before purchase")
    }
}



// Check login status and get email from form input
function login_button() {
    localStorage.setItem('login', true)
    localStorage.setItem('login_email', document.querySelector("#login-email").value)
    return true
}
function logged_in(){
    document.querySelector('#user-email').innerHTML = localStorage.getItem('login_email')
} 

if (document.querySelector('.logout')!= null){
    if (localStorage.getItem('login')=='true'){
        document.querySelectorAll('.logout').forEach((button)=>{button.style.display = 'inline-block'})
        document.querySelectorAll("a[href='myaccount.html']:not(a[onclick='logOut()'])").forEach((button)=>{button.removeAttribute('href');button.setAttribute('href','logged-in.html')})        
    }else{
        document.querySelectorAll('.logout').forEach((button)=>{button.style.display = 'none'})
    }
}

// Log out button function
function logOut() {
    localStorage.removeItem('login_email')
    document.querySelector('.logout').style.display = 'none'
    localStorage.removeItem('login')
}

/*Cart price update*/
var cart_item = {}
var dunklowblack_qty = JSON.parse(localStorage.getItem('Dunk Low Black'))[1]
var airforceone_qty = JSON.parse(localStorage.getItem('Air Force One'))[1]

for (var i = 0;i<localStorage.length;i++){
    var key = localStorage.key(i)
    if ((key!='login')&&(key!='login_email')&&(key!='cookie-consent')&&(key!='coupon')){
        cart_item[key] = JSON.parse(localStorage.getItem(key))
    }
}

// Create a dictionary for iteration. The items in the array are price, name in localStorage, and image source in order
// Cart load function
function cart_load() {
    if (islogin != 'true') {
        document.querySelector(".product-section").style.display = "none"
        document.querySelector(".total-section").style.display = "none";
        document.querySelector(".not-sign-in").style.display = "block";
        document.querySelector(".not-sign-in>div>h2").style.color = "#ff1493";
        document.querySelector(".order-empty").style.display = "none";
        document.querySelector(".coupon-section").style.display = "none";
    } else {
        if (Object.keys(cart_item).length==0) {
            document.querySelector(".product-section").style.display = "none";
            document.querySelector(".total-section").style.display = "none";
            document.querySelector(".not-sign-in").style.display = "none";
            document.querySelector(".coupon-section").style.display = "none";
            document.querySelector(".order-empty").style.display = "block";
            document.querySelector(".order-empty>h2").style.color = "#ff1493";
        } else {
            if (localStorage.getItem("coupon") == "HD") {
                document.querySelector(".total-money").innerHTML = (((parseInt(dunklowblack_qty)||0) * 130 + (parseInt(airforceone_qty)||0) * 147) * 0.8) + "$"
                document.querySelector(".DI-apply").style.display = "none"
                document.querySelector(".HD-apply").style.display = "block"
                document.querySelector(".non-apply").style.display = "none"
            } else if (localStorage.getItem("coupon") == "DI") {
                document.querySelector(".total-money").innerHTML = (((parseInt(dunklowblack_qty)||0) * 130 + (parseInt(airforceone_qty)||0) * 147) * 0.9) + "$"
                document.querySelector(".DI-apply").style.display = "block"
                document.querySelector(".HD-apply").style.display = "none"
                document.querySelector(".non-apply").style.display = "none"
            } else {
                document.querySelector(".total-money").innerHTML = ((parseInt(dunklowblack_qty)||0) * 130 + (parseInt(airforceone_qty)||0) * 147) + "$"
                document.querySelector(".DI-apply").style.display = "none"
                document.querySelector(".HD-apply").style.display = "none"
                document.querySelector(".non-apply").style.display = "none"
            }
            document.querySelector(".product-section").style.display = "block";
            document.querySelector(".total-section").style.display = "block";
            document.querySelector(".order-details").style.display = "block";
            document.querySelector(".order-details>h2").style.color = "#ff1493";
            document.querySelector(".coupon-code").style.display = "block";
            document.querySelector(".coupon-code>h2").style.color = "#ff1493";
            document.querySelector(".coupon-section").style.display = "block";
            document.querySelector(".not-sign-in").style.display = "none";
            document.querySelector(".order-empty").style.display = "none";
            var total_price = 0
            for (items in cart_item){

                var item_div_1 = document.createElement("div");
                item_div_1.setAttribute("class", "row");
                document.querySelector(".product-section>div").appendChild(item_div_1)

                var item_div_1_1 = document.createElement("div");
                item_div_1_1.setAttribute("class", "col-40");
                item_div_1.appendChild(item_div_1_1)

                var item_div_1_2 = document.createElement("div");
                item_div_1_2.setAttribute("class", "col-20 text-center item-price");
                item_div_1_2.innerHTML = (cart_item[items][0] * cart_item[items][1]) + "$";
                item_div_1.appendChild(item_div_1_2)

                var item_div_1_3 = document.createElement("div");
                item_div_1_3.setAttribute("class", "col-20");
                item_div_1.appendChild(item_div_1_3)

                var item_div_1_1_1 = document.createElement("div");
                item_div_1_1_1.setAttribute("class", "container");
                item_div_1_1.appendChild(item_div_1_1_1)

                var item_div_1_1_1_1 = document.createElement("div");
                item_div_1_1_1_1.setAttribute("class", "row");
                item_div_1_1_1.appendChild(item_div_1_1_1_1)

                var item_name = document.createElement("h3");
                item_name.innerHTML = items + " Shoes"
                item_name.setAttribute("class", "text-center")
                item_div_1_1_1.appendChild(item_name)

                var item_img = new Image();
                item_img.src = cart_item[items][2]
                item_div_1_1_1_1.appendChild(item_img)

                var item_div_1_3_1 = document.createElement("div");
                item_div_1_3_1.setAttribute("class", "row");
                item_div_1_3.appendChild(item_div_1_3_1)

                var input_number = document.createElement("input")
                input_number.setAttribute("type", "number")
                input_number.setAttribute("class", "item-qty")
                input_number.setAttribute("value", cart_item[items][1])
                input_number.addEventListener("input", function() {
                    item_div_1_2.innerHTML = (cart_item[items][0] * parseInt(input_number.value)) + "$"
                    if (typeof(parseInt(input_number.value)) == "number") {
                        localStorage.setItem(items, JSON.stringify([cart_item[items][0], parseInt(input_number.value), cart_item[items][2]]))
                        total_price += (cart_item[items][0] * parseInt(input_number.value))
                        if (localStorage.getItem("coupon") == "HD") {
                            document.querySelector(".total-money").innerHTML = total_price * 0.8 + "$";
                            document.querySelector(".HD-apply").style.display = "block"
                            document.querySelector(".DI-apply").style.display = "none"
                            document.querySelector(".non-apply").style.display = "none"
                        } else if (localStorage.getItem("coupon") == "DI") {
                            document.querySelector(".total-money").innerHTML = total_price * 0.9 + "$"
                            document.querySelector(".DI-apply").style.display = "block"
                            document.querySelector(".HD-apply").style.display = "none"
                            document.querySelector(".non-apply").style.display = "none"
                        } else {
                            document.querySelector(".total-money").innerHTML = total_price + "$"
                            document.querySelector(".DI-apply").style.display = "none"
                            document.querySelector(".HD-apply").style.display = "none"
                            document.querySelector(".non-apply").style.display = "block"
                        }
                    }
                })
                item_div_1_3_1.appendChild(input_number)
            }
        }
    }
}

function coupon_apply() {
    if (document.querySelector("input[name='coupon']").value == "COSC2430-HD") {
        document.querySelector(".HD-apply").style.display = "block"
        document.querySelector(".DI-apply").style.display = "none"
        document.querySelector(".non-apply").style.display = "none"
        localStorage.setItem("coupon", "HD")
        total_price = (parseInt(dunklowblack_qty) * 130)
        total_price *= 0.8
        document.querySelector(".total-money").innerHTML = total_price + "$"
    } else if (document.querySelector("input[name='coupon']").value == "COSC2430-DI") {
        document.querySelector(".HD-apply").style.display = "none"
        document.querySelector(".DI-apply").style.display = "block"
        document.querySelector(".DI-apply").style.display = "none"
        localStorage.setItem("coupon", "DI")
        total_price = (parseInt(dunklowblack_qty) * 130)
        total_price *= 0.9
        document.querySelector(".total-money").innerHTML = total_price + "$"
    } else {
        document.querySelector(".HD-apply").style.display = "none"
        document.querySelector(".DI-apply").style.display = "none"
        document.querySelector(".non-apply").style.display = "block"
        total_price = (parseInt(dunklowblack_qty) * 130)
        document.querySelector(".total-money").innerHTML = total_price + "$"
        localStorage.removeItem('coupon')
    }
}
