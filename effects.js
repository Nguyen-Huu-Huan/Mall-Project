var cookie_consent = localStorage.getItem('cookie-consent')
var blur_elements = document.querySelector("body").querySelectorAll("div:not(div.cookie,div.cookie>*)")
if (cookie_consent=='true'){
  document.querySelector(".cookie").style.display = "none"
  blur_elements.forEach((div)=>{div.style.opacity="1"})
  document.querySelector("body").querySelectorAll("a").forEach((button)=>{button.style.pointerEvents = "auto";})
  document.querySelector("body").querySelectorAll("input").forEach((button)=>{button.disabled = "";})
  console.log("You have agreed to the cookie policy")
  localStorage.setItem('cookie-consent',true);
}else{
  blur_elements.forEach((div)=>{div.style.opacity = "0.65"})
  document.querySelector("body").querySelectorAll("a:not(a.learn-more)").forEach((button)=>{button.style.pointerEvents = "none";})
  document.querySelector("body").querySelectorAll("input:not(input.agree)").forEach((button)=>{button.disabled = "true";})
}

function myFunction(){
  document.querySelector(".cookie").style.display = "none";
  blur_elements.forEach((div)=>{div.style.opacity="1"})
  document.querySelector("body").querySelectorAll("a").forEach((button)=>{button.style.pointerEvents = "auto";})
  document.querySelector("body").querySelectorAll("input").forEach((button)=>{button.disabled = "";})
  console.log("You have agreed to the cookie policy")
  localStorage.setItem('cookie-consent',true);
}

var count = 0
function add_to_cart(){
  count+=parseInt(document.querySelector(".shoe-qty").value)
  var result = count.toString()
  document.querySelector(".cart-qty").innerHTML = result
  document.querySelector(".cart-qty").style.color = "red"
  document.querySelector(".cart-qty").style.display = "inline"
  localStorage.setItem("Dunk Low Black",count)
}

var total_price = 0
// document.querySelector(".total_money").innerHTML = parseInt(localStorage.getItem("Dunk Low Black"))*130;
document.querySelector(".total_money").innerHTML = (parseInt(localStorage.getItem("Dunk Low Black"))*130)+"$";

function cart_load(){

  var item_div_1 = document.createElement("div");
  item_div_1.setAttribute("class","row");
  document.querySelector(".product-space").appendChild(item_div_1)

  var item_div_1_1 = document.createElement("div");
  item_div_1_1.setAttribute("class","col-40");
  item_div_1.appendChild(item_div_1_1)

  var item_div_1_2 = document.createElement("div");
  item_div_1_2.setAttribute("class","col-20 text-center item-price");
  item_div_1_2.innerHTML = (parseInt(localStorage.getItem("Dunk Low Black"))*130)+"$";
  item_div_1.appendChild(item_div_1_2)

  var item_div_1_3 = document.createElement("div");
  item_div_1_3.setAttribute("class","col-20");
  item_div_1.appendChild(item_div_1_3)

  var item_div_1_1_1 = document.createElement("div");
  item_div_1_1_1.setAttribute("class","container");
  item_div_1_1.appendChild(item_div_1_1_1)

  var item_div_1_1_1_1 = document.createElement("div");
  item_div_1_1_1_1.setAttribute("class","row");
  item_div_1_1_1.appendChild(item_div_1_1_1_1)

  var item_name = document.createElement("h3");
  item_name.innerHTML = "Dunk Low Black Shoes"
  item_name.setAttribute("class","text-center")
  item_div_1_1_1.appendChild(item_name)

  var item_img = new Image();
  item_img.src = "images/dunklowblack6.jpg";
  item_div_1_1_1_1.appendChild(item_img)

  var item_div_1_3_1 = document.createElement("div");
  item_div_1_3_1.setAttribute("class","row");
  item_div_1_3.appendChild(item_div_1_3_1)

  var input_number = document.createElement("input")
  input_number.setAttribute("type","number")
  input_number.setAttribute("class","item-qty")
  input_number.setAttribute("value",localStorage.getItem('Dunk Low Black'))
  input_number.addEventListener("input",function(){
    item_div_1_2.innerHTML = (130*parseInt(input_number.value))+"$"
    if (typeof(parseInt(input_number.value))=="number"){
      localStorage.setItem('Dunk Low Black',parseInt(input_number.value))
      total_price=(130*parseInt(input_number.value))
      document.querySelector(".total_money").innerHTML = total_price+"$"
    }
  })
  item_div_1_3_1.appendChild(input_number)
}
