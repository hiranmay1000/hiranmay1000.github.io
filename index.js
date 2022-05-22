let countEl = document.getElementById("count-el")
let saveEl = document.getElementById("people-entered")

let count = 0

function increament() {
    count += 1
    countEl.innerText = count
    console.log(count)
}

function save() {
    let addStr = count + " - "
    saveEl.textContent += addStr
    console.log(saveEl)
    console.log(count = 0)
    countEl.innerText = 0
}