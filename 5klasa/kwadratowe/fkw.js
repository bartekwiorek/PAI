function fkw() {
let a = document.getElementById('aw').value
let b = document.getElementById('bw').value
let c = document.getElementById('cw').value
let a2 = a*a
let b2= b*b
let sqrtb = Math.sqrt(b2)

let delta = b2 - 4 * a * c;
let sqrtdelta=Math.sqrt(delta)
alert("delta = " + delta)

if(delta > 0) {
    iksjeden = (-b + sqrtdelta) / (2*a)
    iksjeden=parseFloat(iksjeden)

    iksdwa = (-b - sqrtdelta) / (2*a)
    iksdwa=parseFloat(iksdwa)

    x1.innerHTML = "Delta > 0"
    x2.innerHTML = "x<sub>1</sub>" + iksjeden + "   x<sub>2</sub>" + iksdwa
}
if(delta < 0) {
    x1.innerHTML = "Delta < 0"
    x2.innerHTML = "Równanie sprzeczne"
}
if(delta == 0) {
    ikszero= -b/2*a
    x1.innerHTML = "Delta = 0"
    x2.innerHTML = "x<sub>0</sub> = " + ikszero
}

miejsce.innerHTML = "F(x) = " + a2 + "x"+ "<sup>2</sup> + " + b + "x + " + c + " = 0"
}
