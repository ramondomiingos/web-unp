function somar(){
    var valor1 = document.getElementById("v1").value;
    var valor2 = document.getElementById("v2").value;
    var res = number(valor1)+number(valor2);
    document.getElementById('numero').innerHTML = res;
}