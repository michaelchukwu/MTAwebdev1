var calc = document.getElementById("calculate");
// listen for a click on the button
calc.addEventListener("click", calculate);

function calculate(event){
    // this will stop the page from reloading when you click the button
    event.preventDefault();

    // now we are getting the values of the input and giving them to variables
    var num1 = document.getElementById("num1").value;
    var num2  = document.getElementById("num2").value;
    var op = document.getElementById("operator").value;
    var answer = document.getElementById("answer");

    // here you are to complete the switch statement to perform some basic operations
    // ie when the value of the operator is 'minus' then num1 should subtract num2
    switch (op){
        case "plus": answer.value = num1 + num2;
        break;
        default: answer.value = num1 + num2;
        break;

    }
    console.log(answer);
}

