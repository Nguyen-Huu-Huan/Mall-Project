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
        document.querySelectorAll(".cart-qty").forEach((p_tag) => {
            p_tag.innerHTML = result;
            p_tag.style.color = "red";
            p_tag.style.display = "inline";
            p_tag.style.animation = "shaking 0.5s infinite";
        })
        localStorage.setItem(item, JSON.stringify([parseInt(document.querySelector(".mobile-menu-opened>section").querySelector("div>div").children[1].children[1].textContent.substring(1)), count, document.querySelector(".mobile-menu-opened>section").querySelector("div>div").children[0].children[0].getAttribute('src')]))
        document.querySelector(".cart-icon").style.animation = "shaking 0.5s infinite"
        document.querySelector(".cart-icon-big").style.animation = "shaking 0.5s infinite"
    } else {
        document.querySelector(".add-to-cart").setAttribute("href", "../myaccount.html")
        alert("Please login before purchase")
    }
}

// Check login status and get email from form input
if (document.querySelector('.logout') != null) {
    if (localStorage.getItem('login') == 'true') {
        document.querySelectorAll('.logout').forEach((button) => { button.style.display = 'inline-block' })
        document.querySelectorAll("a[href='myaccount.html']:not(a[onclick='logOut()'])").forEach((button) => {
            button.setAttribute('href', 'logged-in.html')
        })
        window.open.href = 'logged-in.html'
    } else {
        document.querySelectorAll('.logout').forEach((button) => { button.style.display = 'none' })
    }
}

function login() {
    localStorage.setItem('login', true)
    localStorage.setItem('login_email', document.querySelector("#login-email").value)
}
// Display account email
function logged_in() {
    document.querySelector('#user-email').innerHTML = localStorage.getItem('login_email')
}



// Log out button function
function logOut() {
    localStorage.removeItem('login_email')
    document.querySelector('.logout').style.display = 'none'
    localStorage.removeItem('login')
}

// Display wrong password
function wrongPassword() {
    document.querySelector('.wrong-password').style.display = 'block'
}

function autoScroll() {
    if (document.querySelector('.scroll1').scrollLeft <
        document.querySelector('.scroll1').scrollWidth - document.querySelector('.scroll1').clientWidth - 1) {
        document.querySelector('.scroll1').scrollTo(document.querySelector('.scroll1').scrollLeft + 1, 0)
        console.log('hello ' + document.querySelector('.scroll1').scrollLeft)
    } else {
        clearInterval(scroll)
        setTimeout(function() { document.querySelector('.scroll1').scrollTo(0, 0) }, 500)
        scroll = setInterval(autoScroll, 2)
    }
    if (document.querySelector('.scroll2').scrollLeft <
        document.querySelector('.scroll2').scrollWidth - document.querySelector('.scroll2').clientWidth - 1) {
        document.querySelector('.scroll2').scrollTo(document.querySelector('.scroll2').scrollLeft + 1, 0)
        console.log('hello ' + document.querySelector('.scroll2').scrollLeft)
    } else {
        clearInterval(scroll)
        setTimeout(function() { document.querySelector('.scroll2').scrollTo(0, 0) }, 500)
        scroll = setInterval(autoScroll, 2)
    }

}

var scroll = setInterval(autoScroll, 2)

document.querySelector('.scroll1').addEventListener('mouseover', function() {
    clearInterval(scroll);

})
document.querySelector('.scroll1').addEventListener('mouseout', function() { scroll = setInterval(autoScroll, 2) })

document.querySelector('.scroll2').addEventListener('mouseover', function() {
    clearInterval(scroll);

})
document.querySelector('.scroll2').addEventListener('mouseout', function() { scroll = setInterval(autoScroll, 2) })

// if (document.querySelector('.scroll1,.scroll2') != null) {
//     scroll = setInterval(autoScroll, 1)

//     function autoScroll() {
//         if (document.querySelector('.scroll1').scrollLeft < (document.querySelector('.scroll1').scrollWidth - document.querySelector('.scroll1').clientWidth - 2)) {
//             console.log('autoScroll+')
//             document.querySelector('.scroll1').scrollTo(document.querySelector('.scroll1').scrollLeft + 1, 0)
//         } else {
//             clearInterval(scroll);
//             document.querySelector('.scroll1').scrollTo({ left: 0, behavior: 'smooth' })
//         }
//     }



// document.querySelector('.scroll1, .scroll2').addEventListener('mouseover', function() {
//     clearInterval(scroll);

// })
// document.querySelector('.scroll1, .scroll2').addEventListener('mouseout', function() { scroll = setInterval(autoScroll, 1) })

// }




/*Cart price update*/
var cart_item = {}
var dunklowblack_qty = ((JSON.parse(localStorage.getItem('Dunk Low Black')) || 0)[1] || 0)
var airforceone_qty = ((JSON.parse(localStorage.getItem('Air Force One')) || 0)[1] || 0)
var total_price = 0
var item_div_1_2_dunklowblack
var item_div_1_2_airforceone
for (var i = 0; i < localStorage.length; i++) {
    var key = localStorage.key(i)
    if ((key != 'login') && (key != 'login_email') && (key != 'cookie-consent') && (key != 'coupon')) {
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
        console.log(Object.keys(cart_item).length)
        if (Object.keys(cart_item).length == 0) {
            document.querySelector(".product-section").style.display = "none";
            document.querySelector(".total-section").style.display = "none";
            document.querySelector(".not-sign-in").style.display = "none";
            document.querySelector(".coupon-section").style.display = "none";
            document.querySelector(".order-empty").style.display = "block";
            document.querySelector(".order-empty>h2").style.color = "#ff1493";
        } else {

            if (localStorage.getItem("coupon") == "HD") {
                document.querySelector(".total-money").innerHTML = (((parseInt(dunklowblack_qty) || 0) * 130 + (parseInt(airforceone_qty) || 0) * 147) * 0.8) + "$"
                document.querySelector(".DI-apply").style.display = "none"
                document.querySelector(".HD-apply").style.display = "block"
                document.querySelector(".non-apply").style.display = "none"
            } else if (localStorage.getItem("coupon") == "DI") {
                document.querySelector(".total-money").innerHTML = (((parseInt(dunklowblack_qty) || 0) * 130 + (parseInt(airforceone_qty) || 0) * 147) * 0.9) + "$"
                document.querySelector(".DI-apply").style.display = "block"
                document.querySelector(".HD-apply").style.display = "none"
                document.querySelector(".non-apply").style.display = "none"
            } else {
                document.querySelector(".total-money").innerHTML = ((parseInt(dunklowblack_qty) || 0) * 130 + (parseInt(airforceone_qty) || 0) * 147) + "$"
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


            for (items in cart_item) {

                var item_div_1 = document.createElement("div");
                item_div_1.setAttribute("class", "row");
                document.querySelector(".product-section>div").appendChild(item_div_1)

                var item_div_1_1 = document.createElement("div");
                item_div_1_1.setAttribute("class", "col-40");
                item_div_1.appendChild(item_div_1_1)

                if (items == "Dunk Low Black") {
                    item_div_1_2_dunklowblack = document.createElement("div");
                    item_div_1_2_dunklowblack.setAttribute("class", "col-20 text-center item-price");
                    item_div_1_2_dunklowblack.innerHTML = (cart_item[items][0] * cart_item[items][1]) + "$";
                    item_div_1.appendChild(item_div_1_2_dunklowblack)
                } else if (items == "Air Force One") {
                    item_div_1_2_airforceone = document.createElement("div");
                    item_div_1_2_airforceone.setAttribute("class", "col-20 text-center item-price");
                    item_div_1_2_airforceone.innerHTML = (cart_item[items][0] * cart_item[items][1]) + "$";
                    item_div_1.appendChild(item_div_1_2_airforceone)
                }

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

                var remove_item = document.createElement("img");
                remove_item.setAttribute("src", "images/remove_item.png");
                remove_item.setAttribute("class", "remove_item");
                remove_item.addEventListener("click", function() {
                    item_div_1.remove();
                    localStorage.removeItem(items)
                })
                remove_item.style.display = "none"
                item_div_1_3_1.appendChild(remove_item)

                if (items == "Dunk Low Black") {
                    var dunklowblack_input = document.createElement("input")
                    dunklowblack_input.setAttribute("type", "number")
                    dunklowblack_input.setAttribute("class", "item-qty")
                    dunklowblack_input.setAttribute("value", cart_item[items][1])
                    item_div_1_3_1.appendChild(dunklowblack_input)
                    dunklowblack_input.addEventListener("input", function() {
                        if (dunklowblack_input.value <= 0) {
                            remove_item.style.display = "block"
                        } else { remove_item.style.display = "none" }
                        item_div_1_2_dunklowblack.innerHTML = (((JSON.parse(localStorage.getItem('Dunk Low Black')) || 0)[0] || 0) * dunklowblack_input.value) + "$"
                        localStorage.setItem("Dunk Low Black", JSON.stringify([130, parseInt(dunklowblack_input.value), ((JSON.parse(localStorage.getItem('Dunk Low Black')) || 0)[2] || 0)]))
                        total_price = (parseInt(((JSON.parse(localStorage.getItem('Dunk Low Black')) || 0)[1] || 0)) * 130 + parseInt(((JSON.parse(localStorage.getItem('Air Force One')) || 0)[1] || 0)) * 147)
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
                            document.querySelector(".non-apply").style.display = "none"
                        }
                    })
                } else if (items == "Air Force One") {
                    var airforceone_input = document.createElement("input")
                    airforceone_input.setAttribute("type", "number")
                    airforceone_input.setAttribute("class", "item-qty")
                    airforceone_input.setAttribute("value", cart_item[items][1])
                    item_div_1_3_1.appendChild(airforceone_input)
                    airforceone_input.addEventListener("input", function() {
                        if (airforceone_input.value <= 0) {
                            remove_item.style.display = "block"
                        } else { remove_item.style.display = "none" }
                        item_div_1_2_airforceone.innerHTML = (((JSON.parse(localStorage.getItem('Air Force One')) || 0)[0] || 0) * airforceone_input.value) + "$"
                        localStorage.setItem("Air Force One", JSON.stringify([147, parseInt(airforceone_input.value), ((JSON.parse(localStorage.getItem('Air Force One')) || 0)[2] || 0)]))
                        total_price = (parseInt(((JSON.parse(localStorage.getItem('Dunk Low Black')) || 0)[1] || 0)) * 130 + parseInt(((JSON.parse(localStorage.getItem('Air Force One')) || 0)[1] || 0)) * 147)
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
                            document.querySelector(".non-apply").style.display = "none"
                        }
                    })
                }

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
        total_price = (parseInt(((JSON.parse(localStorage.getItem('Dunk Low Black')) || 0)[1] || 0)) * 130 + parseInt(((JSON.parse(localStorage.getItem('Air Force One')) || 0)[1] || 0)) * 147)
        total_price *= 0.8
        document.querySelector(".total-money").innerHTML = total_price + "$"
    } else if (document.querySelector("input[name='coupon']").value == "COSC2430-DI") {
        document.querySelector(".HD-apply").style.display = "none"
        document.querySelector(".DI-apply").style.display = "block"
        document.querySelector(".non-apply").style.display = "none"
        localStorage.setItem("coupon", "DI")
        total_price = (parseInt(((JSON.parse(localStorage.getItem('Dunk Low Black')) || 0)[1] || 0)) * 130 + parseInt(((JSON.parse(localStorage.getItem('Air Force One')) || 0)[1] || 0)) * 147)
        total_price *= 0.9
        document.querySelector(".total-money").innerHTML = total_price + "$"
    } else {
        document.querySelector(".HD-apply").style.display = "none"
        document.querySelector(".DI-apply").style.display = "none"
        document.querySelector(".non-apply").style.display = "block"
        total_price = (parseInt(((JSON.parse(localStorage.getItem('Dunk Low Black')) || 0)[1] || 0)) * 130 + parseInt(((JSON.parse(localStorage.getItem('Air Force One')) || 0)[1] || 0)) * 147)
        document.querySelector(".total-money").innerHTML = total_price + "$"
        localStorage.removeItem('coupon')
    }
}

// NEW03 modal window


// modal window's Huy
function about_us() {
    var blur_everything_not_Huy = document.querySelector('body').querySelectorAll("div:not(div.Huy-bg-modal,div.Huy-bg-modal>*)")
    var blur_everything_not_Huan = document.querySelector('body').querySelectorAll("div:not(div.Huan-bg-modal,div.Huan-bg-modal>*)")
    var blur_everything_not_Nguyen = document.querySelector('body').querySelectorAll("div:not(div.Nguyen-bg-modal,div.Nguyen-bg-modal>*)")

    document.getElementById("Huy").addEventListener("click", function() {
        document.querySelector(".Huy-bg-modal").style.display = "flex";
        blur_everything_not_Huy.forEach((div) => { div.style.opacity = "0.651" })
    });
    document.getElementById("Huymodal").addEventListener("click", function() {
        document.querySelector(".Huy-bg-modal").style.display = "none";
        blur_everything_not_Huy.forEach((div) => { div.style.opacity = "1" })
    });
    // modal window's Huan
    document.getElementById("Huan").addEventListener("click", function() {
        document.querySelector(".Huan-bg-modal").style.display = "flex";
        blur_everything_not_Huan.forEach((div) => { div.style.opacity = "0.651" })
    });
    document.getElementById("Huanmodal").addEventListener("click", function() {
        document.querySelector(".Huan-bg-modal").style.display = "none";
        blur_everything_not_Huan.forEach((div) => { div.style.opacity = "1" })
    });
    //modal window's Nguyen
    document.getElementById("Nguyen").addEventListener("click", function() {
        document.querySelector(".Nguyen-bg-modal").style.display = "flex";
        blur_everything_not_Nguyen.forEach((div) => { div.style.opacity = "0.651" })
    });
    document.getElementById("Nguyenmodal").addEventListener("click", function() {
        document.querySelector(".Nguyen-bg-modal").style.display = "none";
        blur_everything_not_Nguyen.forEach((div) => { div.style.opacity = "1" })
    });
}

//NEW04 CONTACT FORM


//NEW06 REGISTER FORM

const form = document.getElementById('form');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const pw = document.getElementById('pw');
const confirmPW = document.getElementById('confirmPW');
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const address = document.getElementById('address');
const city = document.getElementById('city');
const zipcode = document.getElementById('zipcode');
const bName = document.getElementById('bName');
const sName = document.getElementById('sName');

if (form != null) {
    form.addEventListener('submit', e => {
        e.preventDefault();

        checkInputs();
    });
}

function checkInputs() {

    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const pwValue = pw.value.trim();
    const confirmPWValue = confirmPW.value.trim();
    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();
    const addressValue = address.value.trim();
    const cityValue = city.value.trim();
    const zipcodeValue = zipcode.value.trim();
    const bNameValue = bName.value.trim();
    const sNameValue = sName.value.trim();

    if (emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
    } else {
        setSuccessFor(email);
    }

    if (phoneValue === '') {
        setErrorFor(phone, 'Phone Number cannot be blank');
    } else if (!isPhone(phoneValue)) {
        setErrorFor(phone, 'Not a valid Phone Number');
    } else {
        setSuccessFor(phone);
    }
    if (pwValue === '') {
        setErrorFor(pw, 'Password cannot be blank');
    } else if (!isPw(pwValue)) {
        setErrorFor(pw, 'Not a valid Password');
    } else {
        setSuccessFor(pw);
    }

    if (confirmPWValue === '') {
        setErrorFor(confirmPW, 'Confirm Password cannot be blank');
    } else if (!isPw(pwValue)) {
        setErrorFor(confirmPW, 'Not a valid Confirm Password');
    } else if (pwValue !== confirmPWValue) {
        setErrorFor(confirmPW, 'Passwords does not match');
    } else {
        setSuccessFor(confirmPW);
    }
    if (firstNameValue === '') {
        setErrorFor(firstName, 'First name cannot be blank');
    } else if (!isfirstName(firstNameValue)) {
        setErrorFor(firstName, 'Not a valid First Name');
    } else {
        setSuccessFor(firstName);
    }

    if (lastNameValue === '') {
        setErrorFor(lastName, 'Last name cannot be blank');
    } else if (!islastName(lastNameValue)) {
        setErrorFor(lastName, 'Not a valid First Name');
    } else {
        setSuccessFor(lastName);
    }

    if (addressValue === '') {
        setErrorFor(address, 'Address cannot be blank');
    } else if (!isaddress(addressValue)) {
        setErrorFor(address, 'Not a valid address');
    } else {
        setSuccessFor(address);
    }

    if (cityValue === '') {
        setErrorFor(city, 'City name cannot be blank');
    } else if (!iscity(cityValue)) {
        setErrorFor(city, 'Not a valid city name');
    } else {
        setSuccessFor(city);
    }

    if (zipcodeValue === '') {
        setErrorFor(zipcode, 'City name cannot be blank');
    } else if (!isZipcode(zipcodeValue)) {
        setErrorFor(zipcode, 'Not a valid city name');
    } else {
        setSuccessFor(zipcode);
    }

    if (bNameValue === '') {
        setErrorFor(bName, 'Business name cannot be blank');
    } else if (!isbName(bNameValue)) {
        setErrorFor(bName, 'Not a valid Business name');
    } else {
        setSuccessFor(bName);
    }
    if (sNameValue === '') {
        setErrorFor(sName, 'Store name cannot be blank');
    } else if (!issName(sNameValue)) {
        setErrorFor(sName, 'Not a valid Store name');
    } else {
        setSuccessFor(sName);
    }
}


function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isPhone(phone) {
    return /^\(?([0-9]{1})\)?[-. ]?(([0-9])[-. ]?){8}(([0-9]{1})[-. ]?)?([0-9]{1})?$/.test(phone);
}

function isPw(pw) {
    return /^(?!.* )(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])([a-zA-Z0-9!@#$%^&*]{8,20})$/.test(pw);
}

function isfirstName(firstName) {
    return /^[a-zA-Z0-9 ]{3,}$/.test(firstName);
}

function islastName(lastName) {
    return /^[a-zA-Z0-9 ]{3,}$/.test(lastName);
}

function isaddress(address) {
    return /^[a-zA-Z0-9 ]{3,}$/.test(address);
}

function iscity(city) {
    return /^[a-zA-Z0-9 ]{3,}$/.test(city);
}

function isZipcode(zipcode) {
    return /^[0-9]{4,6}$/.test(zipcode);
}

function isbName(bName) {
    return /^[a-zA-Z0-9 ]{3,}$/.test(bName);
}

function issName(sName) {
    return /^[a-zA-Z0-9 ]{3,}$/.test(sName);
}