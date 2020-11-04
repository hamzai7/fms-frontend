//navbar start
let menu = document.querySelector("#jsMenu")
let button = document.querySelector("#jsToggle")

button.addEventListener("click", () => {

  console.log('clicked!')
  showMenu = !showMenu
  if (showMenu === true) {
    menu.style.display = "block"
  } else {
    menu.style.display = "none"
  }

  button.innerText = buttonStates[button.innerText]
  
})

let showMenu = false

let buttonStates = {
  "Show Menu" : "Hide Menu",
  "Hide Menu" : "Show Menu"
}