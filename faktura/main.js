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

    data_sprzedazy.innerHTML = "<i>Data sprzedaży: <b>" + dn + '-' + mc + '-' + rok + "</b></i>"
    data_wystawienia.innerHTML = "<i>Data wystawienia: <b>" + dn + '-' + mc + '-' + rok + "</b></i>";

    nr_faktury = 1
    mc=parseInt(mc)
    rok=parseInt(rok)
    numer_faktury.innerHTML = "Faktura VAT <b>" + nr_faktury +"/"+ mc +"/" + rok + "</b>"

function miasto() {
    let miast = document.getElementById("miejscowosc").value
    miejsc.innerHTML= "Miejscowość: <b>" + miast + "</b>"
}
function nabywca() {
    let naby = document.getElementById("nabywca").value
    nabywc.innerHTML= "Nabywca: <b>" + naby + "</b>"
}
function wystawca() {
    let wyst = document.getElementById("wystawca").value
    wystawc.innerHTML= "Wystawca: <b>" + wyst + "</b>"
}
function ceny() {
    nazwa_towaru1 = document.getElementById("nazwa_towaru1").value
    nazwa_towaru2 = document.getElementById("nazwa_towaru2").value
    nazwa_towaru3 = document.getElementById("nazwa_towaru3").value
    nazwa_towaru4 = document.getElementById("nazwa_towaru4").value
    nazwa_towaru5 = document.getElementById("nazwa_towaru5").value
    td2.innerHTML = nazwa_towaru1
    td22.innerHTML = nazwa_towaru2
    td222.innerHTML = nazwa_towaru3
    td2222.innerHTML = nazwa_towaru4
    td22222.innerHTML = nazwa_towaru5

    ilosc1 = document.getElementById("ilosc1").value
    ilosc1 = parseInt(ilosc1)
    ilosc2 = document.getElementById("ilosc2").value
    ilosc2 = parseInt(ilosc2)
    ilosc3 = document.getElementById("ilosc3").value
    ilosc3 = parseInt(ilosc3)
    ilosc4 = document.getElementById("ilosc4").value
    ilosc4 = parseInt(ilosc4)
    ilosc5 = document.getElementById("ilosc5").value
    ilosc5 = parseInt(ilosc5)
    td3.innerHTML = ilosc1
    td33.innerHTML = ilosc2
    td333.innerHTML = ilosc3
    td3333.innerHTML = ilosc4
    td33333.innerHTML = ilosc5

    cena_jednostkowa1 = document.getElementById("cena_jednostkowa1").value
    cena_jednostkowa1 = parseFloat(cena_jednostkowa1)
    cena_jednostkowa2 = document.getElementById("cena_jednostkowa2").value
    cena_jednostkowa2 = parseFloat(cena_jednostkowa2)
    cena_jednostkowa3 = document.getElementById("cena_jednostkowa3").value
    cena_jednostkowa3 = parseFloat(cena_jednostkowa3)
    cena_jednostkowa4 = document.getElementById("cena_jednostkowa4").value
    cena_jednostkowa4 = parseFloat(cena_jednostkowa4)
    cena_jednostkowa5 = document.getElementById("cena_jednostkowa5").value
    cena_jednostkowa5 = parseFloat(cena_jednostkowa5)
    td4.innerHTML = cena_jednostkowa1 + "zł"
    td44.innerHTML = cena_jednostkowa2 + "zł"
    td444.innerHTML = cena_jednostkowa3 + "zł"
    td4444.innerHTML = cena_jednostkowa4 + "zł"
    td44444.innerHTML = cena_jednostkowa5 + "zł"

    w_netto1 = 0
    w_netto2 = 0
    w_netto3 = 0
    w_netto4 = 0
    w_netto5 = 0
    w_netto1 = parseFloat(w_netto1)
    w_netto2 = parseFloat(w_netto2)
    w_netto3 = parseFloat(w_netto3)
    w_netto4 = parseFloat(w_netto4)
    w_netto5 = parseFloat(w_netto5)
    w_netto1 = cena_jednostkowa1 * ilosc1
    w_netto2 = cena_jednostkowa2 * ilosc2
    w_netto3 = cena_jednostkowa3 * ilosc3
    w_netto4 = cena_jednostkowa4 * ilosc4
    w_netto5 = cena_jednostkowa5 * ilosc5
    ww_netto1=w_netto1
    ww_netto2=w_netto2
    ww_netto3=w_netto3
    ww_netto4=w_netto4
    ww_netto5=w_netto5

    td5.innerHTML = ww_netto1 + "zł"
    td55.innerHTML = ww_netto2 + "zł"
    td555.innerHTML = ww_netto3 + "zł"
    td5555.innerHTML = ww_netto4 + "zł"
    td55555.innerHTML = ww_netto5 + "zł"
}
function vaty() {
    let vat1 = document.getElementById("stawka_vat1").value
    vat1 = parseInt(vat1)
    let vat2 = document.getElementById("stawka_vat2").value
    vat2 = parseInt(vat2)
    let vat3 = document.getElementById("stawka_vat3").value
    vat3 = parseInt(vat3)
    let vat4 = document.getElementById("stawka_vat4").value
    vat4 = parseInt(vat4)
    let vat5 = document.getElementById("stawka_vat5").value
    vat5 = parseInt(vat5)

    //tutaj
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