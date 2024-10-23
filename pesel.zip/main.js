function pesel(){
    var html = "";
    for(var i=0; i<=9; i++){
        html = html + "<select id='pesel" + i + "'>";
        for(var j=0; j<=9; j++){
            html = html + "<option value="+j+">"+j+"</section>"
        }
    html = html + "</select>"
    }
    tutaj.innerHTML = "Wprowadź pesel: " + html
}
function wyswietl() {
    var pesel = "";
    var wagi = [1, 3, 7, 9, 1, 3, 7, 9, 1, 3]; 
    var sumwaz = 0;
    for (var i=0; i<=9; i++) {
        var a = document.getElementById("pesel" + i)
        var cyfra = parseInt(a.value)
        pesel = pesel + cyfra
        sumwaz = sumwaz + cyfra * wagi[i]
    }

    var resz = sumwaz % 10
    var ost = (10-resz) % 10
    pesel = pesel + ost;

    var rok = parseInt(pesel.substring(0, 2))
    var miesiac = parseInt(pesel.substring(2, 4))
    var dzien = parseInt(pesel.substring(4, 6))

    if (miesiac >= 1 && miesiac <= 12) {
        rok = rok + 1900;
    } else if (miesiac >= 21 && miesiac <= 32) {
        rok = rok + 2000;
        miesiac = miesiac - 20;
    } else if (miesiac >= 81 && miesiac <= 92) {
        rok = rok + 1800;
        miesiac = miesiac - 80;
    } else if (miesiac >= 41 && miesiac <= 52) {
        rok += 2100;
        miesiac = miesiac - 40;
    } else if (miesiac >= 61 && miesiac <= 72) {
        rok = rok + 2200;
        miesiac = miesiac - 60;
    }

    var cyfraPlec = parseInt(pesel.substring(9,10));
    var plec = (cyfraPlec % 2)
    if(plec == 0){
        plecc = "stara baba"
    }else{
        plecc = "chlopek roztropek"
    }

    psl.innerHTML = ("Twój PESEL: " + pesel + "<br>Data urodzenia: " + dzien + "-" + "0" + miesiac + "-" + rok + "<br>Płeć: " + plecc);
       
}