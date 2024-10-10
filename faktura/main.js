function data(){
    data = new Date();
    rok = data.getFullYear();
    mc = data.getMonth() + 1;
    dn = data.getDate();
    go = data.getHours();
    mi = data.getMinutes();
    se = data.getSeconds();

    if(dn<10){dn="0"+dm}
    if(mc<10){mc="0"+mc}
    if(go<10){go="0"+go}
    if(mi<10){mi="0"+mi}
    if(se<10){se="0"+se}
    miejsce.innerHTML = go+ ':' + mi+ ':' + se + "<br>" + dn+ '-' + mc+ '-' + rok;
}
function VATy(){
    let stawka_vat = 0
    if(id==opt1){
        stawka_vat = 23
        alert(stawka_vat)
    }
    if(id==opt2){
        stawka_vat = 8
        alert(stawka_vat)
    }
    if(id==opt3){
        stawka_vat = 5
        alert(stawka_vat)
    }
    if(id==opt4){s
        stawka_vat = 0
        alert(stawka_vat)
    }
    if(id==opt5){
        stawka_vat = "zw"
        alert(stawka_vat)
    }
}
function ceny(){
    cena_jednostkowa = document.getElementById("cena_jednostkowa").value


    wartosc_netto.innerHTML = "Wartość netto" + cena_jednostkowa
    wartosc_brutto.innerHTML = "Wartość brutto" + (wartość_netto + (warotść_netto*vat));
}