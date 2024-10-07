function skrypt(){
let x = document.getElementById("metry").value
x = parseInt(x)
let wynik =0
wynik=Math.ceil(x/4)
miejsce.innerHTML="Liczba potrzebnych puszek: " + wynik
}