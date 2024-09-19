function obliczcene(){
    let a = document.getElementById('peeling').checked
    let b = document.getElementById('maska').checked
    let c = document.getElementById('masaz').checked
    let d = document.getElementById('makijaz').checked
    let cena =0;

    if(a) {
        cena=cena+45
    }
    if(b) {
        cena=cena+30
    }
    if(c) {
        cena=cena+20
    }
    if(d) {
        cena=cena+50
    }
    miejsce.innerHTML="Cena zabiegów: " + cena;
    return 0;
}