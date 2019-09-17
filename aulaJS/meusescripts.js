function somar(){
    var valor1 = document.getElementById("v1").value;
    var valor2 = document.getElementById("v2").value;
    var res = parseFloat(valor1)+parseFloat(valor2);
    document.getElementById('numero').innerHTML = res;
}
function subtrair(){
    var valor1 = document.getElementById("v1").value;
    var valor2 = document.getElementById("v2").value;
    var res = valor1-valor2;
    document.getElementById('numero').innerHTML = res;
}
function dividir(){
    var valor1 = document.getElementById("v1").value;
    var valor2 = document.getElementById("v2").value;
    var res = parseFloat(valor1)/parseFloat(valor2);
    document.getElementById('numero').innerHTML = res;
}
function multiplicar(){
    var valor1 = document.getElementById("v1").value;
    var valor2 = document.getElementById("v2").value;
    var res = parseFloat(valor1)*parseFloat(valor2);
    document.getElementById('numero').innerHTML = res;
}