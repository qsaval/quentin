document.getElementById("exercice2").addEventListener("submit",function (){
function TableMultiplication(m){
    var a;

    document.write("table de "+m+" :<br><br>");
    for(var i=1;i<=10;i++){
        a=i*m;
        document.write(i+" x "+m+" = "+a+"<br>");
    }
}

var a=window.prompt("choisir la table");

TableMultiplication(a);
})