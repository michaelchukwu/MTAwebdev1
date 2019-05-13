function insert(num) {
    document.form.textview.value =  document.form.textview.value+num;
}


function equal() {
    var exp =  document.form.textview.value;
    if(exp){
        document.form.textview.value = eval(exp);
    }
}

function clean() {
    document.form.textview.value="";
}

function back() {
 var exp = document.form.textview.value;
 document.form.textview.value = exp.substring(0,exp.length-1);
}

function ruth() {
    var exp = document.form.textview.value;
    document.form.textview.value = eval(Math.sqrt(exp))
}

function cus() {
    var exp = document.form.textview.value;
    document.form.textview.value = eval(Math.cos(exp))
}

function sinn() {
    var exp = document.form.textview.value
    document.form.textview.value = eval(Math.sin(exp))
}

function tane() {
    var exp = document.form.textview.value
    document.form.textview.value = eval(Math.tan(exp))
}

function logg() {
    var exp = document.form.textview.value
    document.form.textview.value = eval(Math.log(exp))
}


