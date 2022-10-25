function somme (tab){
    var a= tab.length;
    var b=0;

    for (var i=0;i<=a-1;i++){
        b=b+parseInt(tab[i]);
    }
    return b;
}

function moyenne (tab){
    var a= tab.length;
    var b;
    var c;

    b=somme(tab);
    c=b/a;
    return c;
}


var a =[];
var i=0;

a[i]=window.prompt("donner un nombre");
while (a[i]!=0){
    i++;
    a[i]=window.prompt("donner un nombre");
    console.log(a);
}
b=somme(a);
c=moyenne(a); 
document.write(a+"<br> la somme est "+b+ "<br> la moyenne est "+c);