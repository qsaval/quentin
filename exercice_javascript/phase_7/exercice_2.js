var a= window.prompt("quelle est ton annee de naissance");
var b;
var c= Date();
var d=c.getFullYear();
document.write(d);
b=c/a;
if(b>=18){
    document.write("ton age est " + b + " et tu est majeur");
}
else{
    document.write("ton age est " + b + " et tu est mineur");
}
