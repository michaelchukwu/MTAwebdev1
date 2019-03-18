var calc = document.getElementById("calculate");
// listen for a click on the button
calc.addEventListener("click", calculate);

function calculate(event){
    // this will stop the page from reloading when you click the button
    event.preventDefault();

    // now we are getting the values of the input and giving them to variables
<<<<<<< HEAD
    var num1 = parseInt(document.getElementById("num1").value);
    var num2  = parseInt(document.getElementById("num2").value);
=======
    var num1 = document.getElementById("num1").value;
    var num2  = document.getElementById("num2").value;
>>>>>>> 3228487b7ef6674a64f6ca290c41f046f214173f
    var op = document.getElementById("operator").value;
    var answer = document.getElementById("answer");

    // here you are to complete the switch statement to perform some basic operations
    // ie when the value of the operator is 'minus' then num1 should subtract num2
    switch (op){
<<<<<<< HEAD
        case "plus": answer.value = num1+num2;
        break;
        case "minus": answer.value = num1-num2;
        break;
        case "divide": answer.value = num1/num2;
        break;
        case "multiply": answer.value = num1*num2;
=======
        case "minus": answer.value = num1 - num2;
        break;
        case "plus": answer.value = num1 + num2;
        break;
        case "multiply": answer.value = num1 * num2;
        break;
        case "divide": answer.value = num1 / num2;
>>>>>>> 3228487b7ef6674a64f6ca290c41f046f214173f
        break;
        default: answer.value = num1 + num2;
        break;

    }
    console.log(answer);
}
<<<<<<< HEAD
function salutations(day,name){
alert("good"+day+ name)
}
function add(var1, var2){
alert(var1+var2)
}
function add2(a,b){
return(a+b)
}
console.log(typeof add(2,3));
console.log(typeof add2(2,3));
function getobject(obj){
    switch(obj){
        case "goat": alert("Animal")
        break;
        case "lion": alert("animal")
        break;
        case "shoe": alert("object")
        break;
        default: alert("unknown")
    }
}
console.log(add);
console.log(add());
var carz =(model:suzuki, color:red);
alert(carz)
=======
>>>>>>> 3228487b7ef6674a64f6ca290c41f046f214173f

