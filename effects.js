var x = document.querySelector("body").querySelectorAll("div:not(div.cookie,div.cookie>*)")
x.forEach((div)=>{div.style.opacity = "0.65"})
document.querySelector("body").querySelectorAll("a:not(a.learn-more)").forEach((button)=>{button.style.pointerEvents = "none";})
document.querySelector("body").querySelectorAll("input:not(input.agree)").forEach((button)=>{button.disabled = "true";})
function myFunction(){
  document.querySelector(".cookie").remove();
  x.forEach((div)=>{div.style.opacity="1"})
  document.querySelector("body").querySelectorAll("a").forEach((button)=>{button.style.pointerEvents = "auto";})
  document.querySelector("body").querySelectorAll("input").forEach((button)=>{button.disabled = "";})
  console.log("You have agreed to the cookie policy")
}
