function pounds() {
    var exp = document.form.textview.value;
    document.getElementById('gramsOutput').innerText = exp/0.0022046;
    document.getElementById('kgoutput').innerText = exp/2.2046;
    document.getElementById('ozoutput').innerText = exp*16;
    document.getElementById('scndoutput').innerText = exp + " Pound(s)";


}


function kgm() {
    var exp = document.form.textview.value;
    document.getElementById('gramsOutput').innerText = exp*1000;
    document.getElementById('pondoutput').innerText = exp* 2.205;
    document.getElementById('ozoutput').innerText = exp*35.274;
    document.getElementById('scndoutput').innerText = exp + " Kilogram(s)";


}

function oz() {
    var exp = document.form.textview.value;
    document.getElementById('gramsOutput').innerText = exp* 28.35;
    document.getElementById('kgoutput').innerText =exp/35.274;
    document.getElementById('pondoutput').innerText = exp/16;
    document.getElementById('scndoutput').innerText = exp + " Ounce(s)";


}


function gram() {
    var exp = document.form.textview.value;
    document.getElementById('pondoutput').innerText = exp/453.592;
    document.getElementById('kgoutput').innerText = exp/1000;
    document.getElementById('ozoutput').innerText = exp/28.35;
    document.getElementById('scndoutput').innerText = exp + " Gram(s)";

}


function clean() {
    document.form.textview.value="";
    document.getElementById('pondoutput').innerText ="";
    document.getElementById('kgoutput').innerText ="";
    document.getElementById('ozoutput').innerText ="";
    document.getElementById('gramsOutput').innerText ="";
    document.getElementById('scndoutput').innerText ="";
}
