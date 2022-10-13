function produit (x,y){
    var a;
    a=x*y;
    return a;
}
function afficheImg(image){
    document.write("<img src= '" +image +"'");
}
var a= window.prompt("choisir un nombre");
var b= window.prompt("choisir un nombre");
var c;
var d= "papillon.jpg"
c= produit(a,b);
afficheImg(d);
document.write("le produit de "+a+" par "+b+ " egal "+c );