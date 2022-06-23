const countEl = document.getElementById("count-el")
const saveEl = document.getElementById("people-entered")
let count = 0

function increament() {
    count++
    countEl.innerText = count
    console.log(count)
}

function save() {
    let addStr = `${count} - `
    saveEl.textContent += addStr
    console.log(saveEl)
    console.log(count = 0)
    countEl.innerText = 0
}

function myFunction(){
    const x = document.getElementsByClassName("main-menu");
    if (x.style.display == "block") x.style.display = "none";
    else x.style.display = "block";
}
