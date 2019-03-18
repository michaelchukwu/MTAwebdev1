var calc = document.getElementById("calculate");
// listen for a click on the button
calc.addEventListener("click", calculate);

function calculate(event){
    // this will stop the page from reloading when you click the button
    event.preventDefault();

    // now we are getting the values of the input and giving them to variables
    var num1 = parseInt(document.getElementById("num1").value);
    var num2  = parseInt(document.getElementById("num2").value);
    var op = document.getElementById("operator").value;
    var answer = document.getElementById("answer");

    // here you are to complete the switch statement to perform some basic operations
    // ie when the value of the operator is 'minus' then num1 should subtract num2
    switch (op){
        case "plus": answer.value = num1+num2;
        break;
        case "minus": answer.value = num1-num2;
        break;
        case "divide": answer.value = num1/num2;
        break;
        case "multiply": answer.value = num1*num2;
        break;
        default: answer.value = num1 + num2;
        break;

    }
    console.log(answer);
}
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

