let printNum1 = document.getElementById("num1");
let printNum2 = document.getElementById("num2");
let sum = document.getElementById("display")

let n1 = 4;
let n2 = 3;

let res = 0;

printNum1.textContent = "1st Number: " + n1;
printNum2.textContent = "2nd Number: " + n2;

function add() {
    res = n1 + n2;
    sum.textContent = "Sum is: " + res;
    console.log(res);
}

function sub() {
    res = n1 - n2;
    sum.textContent = "Sum is: " + res;
    console.log(res);
}

function multiply() {
    res = n1 * n2;
    sum.textContent = "Sum is: " + res;
    console.log(res);
}