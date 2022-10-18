function produit(x,y){
    var a;
    a=x*y;
    return a;
}
function cube(a){
    var c;
    c=a*a*a;
    return c;
}
function afficheImg(image){
    document.write("<img src= '" +image +"'<br>");
}
var a= window.prompt("choisir un nombre");
var b= window.prompt("choisir un nombre");
var c;
var d;
var d= "papillon.jpg";
c= produit(a,b);
d= cube(a);
afficheImg(d);
document.write("le cube de "+a+" est égal à "+d+ "<br>")
document.write("le produit de "+a+" par "+b+ " egal "+c );