//this function is built to display an error msg and clear output fields incase user don't press clear before an error NaN input
function chcknum(){
    document.getElementById('scndoutput').innerText= "YOUR INTPUT HAS TO BE A NUMBER!";
    document.getElementById('gramsOutput').innerText ="";
    document.getElementById('pondoutput').innerText ="";
    document.getElementById('ozoutput').innerText = "";
    document.getElementById('kgoutput').innerText = "";
}

// this function is built to display your current operation and calculate the gram, kilogram and ounce equivalent for every pound amount inputed.
function pounds() {
    var exp = document.form.textview.value;
    if(isNaN(exp)){
        chcknum();
       }else{
        document.getElementById('gramsOutput').innerText = exp/0.0022046;
        document.getElementById('kgoutput').innerText = exp/2.2046;
        document.getElementById('ozoutput').innerText = exp*16;
        document.getElementById('scndoutput').innerText = exp + " Pound(s)";
        document.getElementById('pondoutput').innerText = "";
       }
}

// this function is built to display your current operation and calculate the gram, pound and ounce equivalent for every kilogram amount inputed.
function kgm() {
    var exp = document.form.textview.value;
    if(isNaN(exp)){
        chcknum();
   }else{
    document.getElementById('gramsOutput').innerText = exp*1000;
    document.getElementById('pondoutput').innerText = exp* 2.205;
    document.getElementById('ozoutput').innerText = exp*35.274;
    document.getElementById('scndoutput').innerText = exp + " Kilogram(s)";
    document.getElementById('kgoutput').innerText = "";

    }


}
// this function is built to display your current operation and calculate the gram, kilogram and pound equivalent for every ounce amount.
function oz() {
    var exp = document.form.textview.value;
    if(isNaN(exp)){
        chcknum();
       }else{
        document.getElementById('gramsOutput').innerText = exp* 28.35;
        document.getElementById('kgoutput').innerText =exp/35.274;
        document.getElementById('pondoutput').innerText = exp/16;
        document.getElementById('scndoutput').innerText = exp + " Ounce(s)";
        document.getElementById('ozoutput').innerText = "";
        }
}

// this function is built to display your current operation and calculate the pound, kilogram and ounce equivalent for every gram amount inputed.
function gram() {
    var exp = document.form.textview.value;
    if(isNaN(exp)){
        chcknum();
       }else{
       document.getElementById('pondoutput').innerText = exp/453.592;
       document.getElementById('kgoutput').innerText = exp/1000;
       document.getElementById('ozoutput').innerText = exp/28.35;
       document.getElementById('scndoutput').innerText = exp + " Gram(s)";
       document.getElementById('gramsOutput').innerText = "";
       }

}


function clean() {
    document.form.textview.value="";
    document.getElementById('pondoutput').innerText ="";
    document.getElementById('kgoutput').innerText ="";
    document.getElementById('ozoutput').innerText ="";
    document.getElementById('gramsOutput').innerText ="";
    document.getElementById('scndoutput').innerText ="";
}
