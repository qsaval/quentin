function produit (x,y){
    var a;
    a=x*y;
    return a;
}
function afficheImg(image){
    console.log (image);
}
var a= window.prompt("choisir un nombre");
var b= window.prompt("choisir un nombre");
var c;
c= produit(a,b);
console.log("le produit de " + a + "par" + b + "est egal a" + c)

