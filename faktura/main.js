function data() {
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
function ceny() {
    nazwa_towaru = document.getElementById("nazwa_towaru").value
    td2.innerHTML = nazwa_towaru

    ilosc = document.getElementById("ilosc").value
    ilosc = parseInt(ilosc)
    td3.innerHTML = ilosc

    cena_jednostkowa = document.getElementById("cena_jednostkowa").value
    cena_jednostkowa = parseFloat(cena_jednostkowa)
    td4.innerHTML = cena_jednostkowa + "zł"

    w_netto = 0
    w_netto = parseFloat(w_netto)
    w_netto = cena_jednostkowa * ilosc
    ww_netto = w_netto
    td5.innerHTML = ww_netto + "zł"
}
function vaty() {
    let vat = document.getElementById("stawka_vat").value
    vat = parseInt(vat)
    kwota_vat = 3
    kwota_vat = parseFloat(kwota_vat)
        if (vat == "23") {
            vat = parseFloat(vat)
            td6.innerHTML = vat + "%"
            vat="0."+vat //sposobem z dat
        }
        if (vat == "8") {
            vat = parseFloat(vat)
            td6.innerHTML = vat + "%"
            vat="0.0"+vat
        }
        if (vat == "5") {
            vat = parseFloat(vat)
            td6.innerHTML = vat + "%"
            vat="0.0"+vat

        }
        if (vat == "0") {
            vat = parseFloat(vat)
            td6.innerHTML = vat + "%"
        }
        if (vat == "01") {
            vat = 0
            td6.innerHTML =  "ZW"
        }
        
        kwota_vat = w_netto * vat
        kwota_vat = parseFloat(kwota_vat)
        kwota_vat = kwota_vat.toFixed(2)
        td7.innerHTML = kwota_vat  + "zł"
        
        wartosc_brutto = parseFloat(w_netto) + parseFloat(kwota_vat)
        wartosc_brutto = parseFloat(wartosc_brutto)
        wartosc_brutto = wartosc_brutto.toFixed(2)
        td8.innerHTML = wartosc_brutto + "zł"
    }
