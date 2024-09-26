
function button_indygo() {
    let prawy = document.getElementById('prawy')
    prawy.style.background = 'indigo'
}
function button_SteelBlue() {
    let prawy = document.getElementById('prawy')
    prawy.style.background = 'SteelBlue'
}
function button_Olive() {
    let prawy = document.getElementById('prawy')
    prawy.style.background = 'Olive'
}
function zmianakoloruczcionki(){
    let prawy = document.getElementById('prawy')
    let kolor = document.getElementById('kolorczcionki')
    prawy.style.color = kolor.value
}
function zmianarozmiaruczcionki(){
    let prawy = document.getElementById('prawy')
    let rozmiar = document.getElementById('rozmiarczcionki').value
    prawy.style.fontSize = rozmiar 
}
function checkchecked(){
    let prawy = document.getElementById('prawy')
    let check = document.getElementById('check').checked
    if(check) {
    }
}