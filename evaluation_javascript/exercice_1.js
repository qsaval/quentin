document.getElementById("exercice1").addEventListener("submit",function (){
var a = [];
var i = 0;
var b = 0;
var c = 0;
var d = 0;

a[i] = window.prompt("entre votre age");
if (a[i] < 20) {
    b = 1;
}
else {
    if (a[i] > 40) {
        c = 1;
    }
    else {
        d = 1;
    }
}
while (a[i] < 100) {
    i++;
    a[i] = window.prompt("entre votre age");
        if (a[i] < 20) {
            b++;
    }
    else {
        if (a[i] > 40) {
             c++;
        }
        else {
            d++;
        }
    }

}
document.write("il y a " + b + " personne de moins de 20 ans <br>");
document.write("il y a " + c + " personne de plus de 40 ans <br>");
document.write("il y a " + d + " personne de entre 20 et 40 ans");
})