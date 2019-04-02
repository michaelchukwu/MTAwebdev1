var Person = function(){
    var name;
    var address;
    var gender;
    var age;
    var img;
}
var mercy = new Person();
var emma = new Person();
var philip = new Person();
mercy.name = "Mercy";
mercy.img = "mercy.jpg";
mercy.address = "Abuja";
mercy.age = "10";
mercy.gender = "female";

document.getElementById("mercy").addEventListener("click", function(){
    document.getElementById('img').src = mercy.img;
    document.getElementById('name').innerText = mercy.name;
    document.getElementById('gender').innerText = mercy.gender;
    document.getElementById('address').innerText = mercy.address;
    document.getElementById('age').innerText = mercy.age;
});
document.getElementById("philip").addEventListener("click", function(){
    document.getElementById('img').src = philip.img;
    document.getElementById('name').innerText = philip.name;
    document.getElementById('gender').innerText = philip.gender;
    document.getElementById('address').innerText = philip.address;
    document.getElementById('age').innerText = philip.age;
})
;document.getElementById("emma").addEventListener("click", function(){
    document.getElementById('img').src = emma.img;
    document.getElementById('name').innerText = emma.name;
    document.getElementById('gender').innerText = emma.gender;
    document.getElementById('address').innerText = emma.address;
    document.getElementById('age').innerText = emma.age;
});