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
