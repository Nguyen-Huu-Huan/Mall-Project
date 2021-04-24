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
function add_to_cart() {
    if (islogin == 'true') {
        count += parseInt(document.querySelector(".shoe-qty").value)
        var result = count.toString()
        document.querySelectorAll(".cart-qty").forEach((p_tag) => { p_tag.innerHTML = result })
        document.querySelectorAll(".cart-qty").forEach((p_tag) => { p_tag.style.color = "red" })
        document.querySelectorAll(".cart-qty").forEach((p_tag) => { p_tag.style.display = "inline" })
        localStorage.setItem("Dunk Low Black", count)
    } else {
        document.querySelector(".add-to-cart").setAttribute("href", "../myaccount.html")
        alert("Please login before purchase")
    }
}

/*Cart price update*/
var total_price = 0

// Check login status and get email from form input
function login_button() {
    localStorage.setItem('login', true)
    localStorage.setItem('login_email', document.querySelector("#email").value)
    document.querySelector('#email').innerHTML = localStorage.setItem('login_email')
    document.querySelectorAll('.logout').forEach((link) => { link.style.display = 'inline-block' })
    return true
}
var login = localStorage.getItem('login')

if (login==false){
    document.querySelector('.logout').style.display = 'none'
}
// Change all href of "My Account" menu item to logged-in.html when logged in
// if (login == 'true') {
//     document.querySelectorAll('a[href="myaccount.html"]').forEach((link) => { link.setAttribute('href', 'logged-in.html') })
//     document.querySelectorAll('.logout').forEach((link) => { link.style.display = 'inline-block' })
// }
// // If not logged in, redirect to login page when try to access to account info
// if (login !== 'true') {

//     if (document.querySelector('body').classList.contains('logged-in')) {
//         window.location.href = 'myaccount.html'
//     }
//     document.querySelectorAll('.logout').forEach((link) => { link.style.display = 'none' })

// }

// Display logged in email in logged-in.html
var login_email = localStorage.getItem('login_email')

// Log out button function
function logOut() {
    localStorage.removeItem('login_email')
    document.querySelector('.logout').style.display = 'none'
    localStorage.setItem('login',false)
}

function cart_load() {
    if (islogin != 'true') {
        document.querySelector(".product-section").style.display = "none"
        document.querySelector(".total-section").style.display = "none";
        document.querySelector(".not-sign-in").style.display = "block";
        document.querySelector(".not-sign-in>div>h2").style.color = "#ff1493";
        document.querySelector(".order-empty").style.display = "none";
        document.querySelector(".coupon-section").style.display = "none";
    } else {
        //       if (localStorage.getItem("Dunk Low Black")+localStorage.getItem("Air Force One")<=0){
        if (localStorage.getItem("Dunk Low Black") <= 0) {
            document.querySelector(".product-section").style.display = "none";
            document.querySelector(".total-section").style.display = "none";
            document.querySelector(".not-sign-in").style.display = "none";
            document.querySelector(".coupon-section").style.display = "none";
            document.querySelector(".order-empty").style.display = "block";
            document.querySelector(".order-empty>h2").style.color = "#ff1493";
        } else {
            if (localStorage.getItem("coupon") == "HD") {
                //           document.querySelector(".total-money").innerHTML = ((parseInt(localStorage.getItem("Dunk Low Black"))*130+parseInt(localStorage.getItem("Air Force One"))*147)*0.8)+"$";
                document.querySelector(".total-money").innerHTML = ((parseInt(localStorage.getItem("Dunk Low Black")) * 130) * 0.8) + "$"
                document.querySelector(".DI-apply").style.display = "none"
                document.querySelector(".HD-apply").style.display = "block"
            } else if (localStorage.getItem("coupon") == "DI") {
                //           document.querySelector(".total-money").innerHTML = ((parseInt(localStorage.getItem("Dunk Low Black"))*130+parseInt(localStorage.getItem("Air Force One"))*147)*0.9)+"$";
                document.querySelector(".total-money").innerHTML = ((parseInt(localStorage.getItem("Dunk Low Black")) * 130) * 0.9) + "$"
                document.querySelector(".DI-apply").style.display = "block"
                document.querySelector(".HD-apply").style.display = "none"
            } else {
                //           document.querySelector(".total-money").innerHTML = (parseInt(localStorage.getItem("Dunk Low Black"))*130+parseInt(localStorage.getItem("Air Force One"))*147)+"$";
                document.querySelector(".total-money").innerHTML = (parseInt(localStorage.getItem("Dunk Low Black")) * 130) + "$"
                document.querySelector(".DI-apply").style.display = "none"
                document.querySelector(".HD-apply").style.display = "none"
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

            var item_div_1 = document.createElement("div");
            item_div_1.setAttribute("class", "row");
            document.querySelector(".product-section>div").appendChild(item_div_1)

            var item_div_1_1 = document.createElement("div");
            item_div_1_1.setAttribute("class", "col-40");
            item_div_1.appendChild(item_div_1_1)

            var item_div_1_2 = document.createElement("div");
            item_div_1_2.setAttribute("class", "col-20 text-center item-price");
            item_div_1_2.innerHTML = (parseInt(localStorage.getItem("Dunk Low Black")) * 130) + "$";

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
            item_name.innerHTML = "Dunk Low Black" + " Shoes"
            item_name.setAttribute("class", "text-center")
            item_div_1_1_1.appendChild(item_name)

            var item_img = new Image();
            item_img.src = "images/dunklowblack6.jpg";
            item_div_1_1_1_1.appendChild(item_img)

            var item_div_1_3_1 = document.createElement("div");
            item_div_1_3_1.setAttribute("class", "row");
            item_div_1_3.appendChild(item_div_1_3_1)

            var input_number = document.createElement("input")
            input_number.setAttribute("type", "number")
            input_number.setAttribute("class", "item-qty")
            input_number.setAttribute("value", localStorage.getItem("Dunk Low Black"))
            input_number.addEventListener("input", function() {
                item_div_1_2.innerHTML = (130 * parseInt(input_number.value)) + "$"
                if (typeof(parseInt(input_number.value)) == "number") {
                    localStorage.setItem("Dunk Low Black", parseInt(input_number.value))
                    total_price = (130 * parseInt(input_number.value))
                    if (localStorage.getItem("coupon") == "HD") {
                        document.querySelector(".total-money").innerHTML = total_price * 0.8 + "$";
                        document.querySelector(".HD-apply").style.display = "block"
                        document.querySelector(".DI-apply").style.display = "none"
                    } else if (localStorage.getItem("coupon") == "DI") {
                        document.querySelector(".total-money").innerHTML = total_price * 0.9 + "$"
                        document.querySelector(".DI-apply").style.display = "block"
                        document.querySelector(".HD-apply").style.display = "none"
                    } else {
                        document.querySelector(".total-money").innerHTML = total_price + "$"
                        document.querySelector(".DI-apply").style.display = "none"
                        document.querySelector(".HD-apply").style.display = "none"
                    }
                }
            })
            item_div_1_3_1.appendChild(input_number)
        }
    }
}

function coupon_apply() {
    if (document.querySelector("input[name='coupon']").value == "COSC2430-HD") {
        document.querySelector(".HD-apply").style.display = "block"
        document.querySelector(".DI-apply").style.display = "none"
        localStorage.setItem("coupon", "HD")
        total_price = (parseInt(localStorage.getItem("Dunk Low Black")) * 130)
        total_price *= 0.8
        document.querySelector(".total-money").innerHTML = total_price + "$"
    } else if (document.querySelector("input[name='coupon']").value == "COSC2430-DI") {
        document.querySelector(".HD-apply").style.display = "none"
        document.querySelector(".DI-apply").style.display = "block"
        localStorage.setItem("coupon", "DI")
        total_price = (parseInt(localStorage.getItem("Dunk Low Black")) * 130)
        total_price *= 0.9
        document.querySelector(".total-money").innerHTML = total_price + "$"
    } else {
        document.querySelector(".HD-apply").style.display = "none"
        document.querySelector(".DI-apply").style.display = "none"
        alert("The coupon does not exist")
    }
}
