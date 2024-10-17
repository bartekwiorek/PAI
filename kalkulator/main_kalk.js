function calc(wartosc){
    var wynikk = document.getElementById("miejsce").value + wartosc
    document.getElementById("miejsce").value = wynikk
}

function czysc(){
    document.getElementById("miejsce").value = ""
}
function oblicz(){
    var oblicz = document.getElementById("miejsce").value
    wyn = eval(oblicz)
    document.getElementById("miejsce").value = wyn
}