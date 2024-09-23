let kolor1 = document.getElementById('kolor1')
let kolor2 = document.getElementById('kolor2')
let kolor3 = document.getElementById('kolor3')
let kolor4 = document.getElementById('kolor4')
let kolor5 = document.getElementById('kolor5')

function sprawdz() {
    let a = parseInt(document.getElementById('numerki').value)
    kolor1.style= 'background-color: hsl(' + x + ', 100%, 50%)'
    kolor2.style= 'background-color: hsl(' + x + ', 80%, 50%)'
    kolor3.style= 'background-color: hsl(' + x + ', 60%, 50%)'
    kolor4.style= 'background-color: hsl(' + x + ', 40%, 50%)'
    kolor5.style= 'background-color: hsl(' + x + ', 20%, 50%)'
}