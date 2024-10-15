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

    data_sprzedazy.innerHTML = "Data sprzedaży: " + dn + '-' + mc + '-' + rok 
    data_wystawienia.innerHTML = "Data wystawienia: " + dn + '-' + mc + '-' + rok

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

//1
        if (vat1 == "23") {
            vat1 = parseFloat(vat1)
            td6.innerHTML = vat1 + "%"
            vat1="0."+vat1 //sposobem z dat
        }
        if (vat1 == "8") {
            vat1 = parseFloat(vat1)
            td6.innerHTML = vat1 + "%"
            vat1="0.0"+vat1
        }
        if (vat1 == "5") {
            vat1 = parseFloat(vat1)
            td6.innerHTML = vat + "%"
            vat1="0.0"+vat1

        }
        if (vat1 == "0") {
            vat1 = parseFloat(vat1)
            td6.innerHTML = vat1 + "%"
        }
        if (vat1 == "01") {
            vat1 = 0
            td6.innerHTML =  "ZW"
        }
//2
        if (vat2 == "23") {
            vat2 = parseFloat(vat2)
            td66.innerHTML = vat2 + "%"
            vat2="0."+vat2 //sposobem z dat
        }
        if (vat2 == "8") {
            vat2 = parseFloat(vat2)
            td66.innerHTML = vat2 + "%"
            vat2="0.0"+vat2
        }
        if (vat2 == "5") {
            vat2 = parseFloat(vat2)
            td66.innerHTML = vat2 + "%"
            vat2="0.0"+vat2

        }
        if (vat2 == "0") {
            vat2 = parseFloat(vat2)
            td66.innerHTML = vat2 + "%"
        }
        if (vat2 == "01") {
            vat2 = 0
            td66.innerHTML =  "ZW"
        }
//3
        if (vat3 == "23") {
            vat3 = parseFloat(vat3)
            td666.innerHTML = vat3 + "%"
            vat3="0."+vat3 //sposobem z dat
        }
        if (vat3 == "8") {
            vat3 = parseFloat(vat3)
            td666.innerHTML = vat3 + "%"
            vat3="0.0"+vat3
        }
        if (vat3 == "5") {
            vat3 = parseFloat(vat3)
            td666.innerHTML = vat3 + "%"
            vat3="0.0"+vat3

        }
        if (vat3 == "0") {
            vat3 = parseFloat(vat3)
            td666.innerHTML = vat3 + "%"
        }
        if (vat3 == "01") {
            vat3 = 0
            td666.innerHTML =  "ZW"
        }
//4
        if (vat4 == "23") {
            vat4 = parseFloat(vat4)
            td6666.innerHTML = vat4 + "%"
            vat4="0."+vat4 //sposobem z dat
        }
        if (vat4 == "8") {
            vat4 = parseFloat(vat4)
            td6666.innerHTML = vat4 + "%"
            vat4="0.0"+vat4
        }
        if (vat4 == "5") {
            vat4 = parseFloat(vat4)
            td6666.innerHTML = vat4 + "%"
            vat4="0.0"+vat4

        }
        if (vat4 == "0") {
            vat4 = parseFloat(vat4)
            td6666.innerHTML = vat4 + "%"
        }
        if (vat4 == "01") {
            vat4 = 0
            td6666.innerHTML =  "ZW"
        }

//6
        if (vat5 == "23") {
            vat5 = parseFloat(vat5)
            td66666.innerHTML = vat5 + "%"
            vat5="0."+vat5 //sposobem z dat
        }
        if (vat5 == "8") {
            vat5 = parseFloat(vat5)
            td66666.innerHTML = vat5 + "%"
            vat5="0.0"+vat5
        }
        if (vat5 == "5") {
            vat5 = parseFloat(vat5)
            td66666.innerHTML = vat5 + "%"
            vat5="0.0"+vat5

        }
        if (vat5 == "0") {
            vat5 = parseFloat(vat5)
            td66666.innerHTML = vat5 + "%"
        }
        if (vat5 == "01") {
            vat5 = 0
            td66666.innerHTML =  "ZW"
        }   

        kwota_vat1 = w_netto1 * vat1
        kwota_vat2 = w_netto2 * vat2
        kwota_vat3 = w_netto3 * vat3
        kwota_vat4 = w_netto4 * vat4
        kwota_vat5 = w_netto5 * vat5
        kwota_vat1 = parseFloat(kwota_vat1)
        kwota_vat2 = parseFloat(kwota_vat2)
        kwota_vat3 = parseFloat(kwota_vat3)
        kwota_vat4 = parseFloat(kwota_vat4)
        kwota_vat5 = parseFloat(kwota_vat5)
        kwota_vat1 = kwota_vat1.toFixed(2)
        kwota_vat2 = kwota_vat2.toFixed(2)
        kwota_vat3 = kwota_vat3.toFixed(2)
        kwota_vat4 = kwota_vat4.toFixed(2)
        kwota_vat5 = kwota_vat5.toFixed(2)
        td7.innerHTML = kwota_vat1  + "zł"
        td77.innerHTML = kwota_vat2  + "zł"
        td777.innerHTML = kwota_vat3  + "zł"
        td7777.innerHTML = kwota_vat4  + "zł"
        td77777.innerHTML = kwota_vat5  + "zł"
        
        wartosc_brutto1 = parseFloat(w_netto1) + parseFloat(kwota_vat1)
        wartosc_brutto1 = parseFloat(wartosc_brutto1)
        wartosc_brutto1 = wartosc_brutto1.toFixed(2)
        td8.innerHTML = wartosc_brutto1 + "zł"

        wartosc_brutto2 = parseFloat(w_netto2) + parseFloat(kwota_vat2)
        wartosc_brutto2 = parseFloat(wartosc_brutto2)
        wartosc_brutto2 = wartosc_brutto2.toFixed(2)
        td88.innerHTML = wartosc_brutto2 + "zł"

        wartosc_brutto3 = parseFloat(w_netto3) + parseFloat(kwota_vat3)
        wartosc_brutto3 = parseFloat(wartosc_brutto3)
        wartosc_brutto3 = wartosc_brutto3.toFixed(2)
        td888.innerHTML = wartosc_brutto3 + "zł"

        wartosc_brutto4 = parseFloat(w_netto4) + parseFloat(kwota_vat4)
        wartosc_brutto4 = parseFloat(wartosc_brutto4)
        wartosc_brutto4 = wartosc_brutto4.toFixed(2)
        td8888.innerHTML = wartosc_brutto4 + "zł"

        wartosc_brutto5 = parseFloat(w_netto5) + parseFloat(kwota_vat5)
        wartosc_brutto5 = parseFloat(wartosc_brutto5)
        wartosc_brutto5 = wartosc_brutto5.toFixed(2)
        td88888.innerHTML = wartosc_brutto5 + "zł"
}
function sumy(){
    let suma_wartosc_netto = 0
    let suma_kwota_VAT = 0
    let suma_wartosc_brutto = 0
    alert(suma_kwota_VAT)

    parseFloat(suma_wartosc_netto) = parseFloat(suma_wartosc_netto + w_netto1 + w_netto2 + w_netto3 + w_netto4 + w_netto5)
    parseFloat(suma_kwota_VAT) = parseFloat(suma_kwota_VAT + vat1 + vat2 + vat3 + vat4 + vat5)
    parseFloat(suma_wartosc_brutto) = parseFloat(wartosc_brutto1 + wartosc_brutto2 + wartosc_brutto3 + wartosc_brutto4 + wartosc_brutto5)
    
    suma_wartosc_netto = parseFloat(suma_wartosc_netto)
    suma_kwota_VAT = parseFloat(suma_kwota_VAT) 
    suma_wartosc_brutto = parseFloat(suma_wartosc_brutto)

    nettoo.innerHTML = suma_wartosc_netto
    vatt.innerHTML = suma_kwota_VAT
    bruttoo.innerHTML = suma_wartosc_brutto
}