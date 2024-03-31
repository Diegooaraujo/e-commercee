let signIn = document.querySelector(".btn-custom")
let singnUp = document.querySelector(".btn-second")
let body = document.querySelector("body")

signIn.addEventListener("click",()=>{
    body.className = "sign-in"

})
singnUp.addEventListener("click",()=>{
    body.className = "sign-up"
})