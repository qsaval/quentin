function GetInteger(){
    var a;
    a=window.prompt("saisir un entier");
    return a;
}
function InitTab(){
    var a;
    a=window.prompt("taille du tableau");
    return a;
}
function SaisirTab(tab,n){
    for(var i=0;i<=n-1;i++){
        tab[i]=window.prompt();
    }
    return tab;
}
function AffichTab(tab){
    document.write(tab);
}
function RechercheTab(tab,n){
    var a;
    a=tab.length;
    for(var i=0;i<=a-1;i++){
        if(tab[i]==tab[n-1]){
            return tab[i];
        }
    }
}
function InfoTab(tab){
    var a;
    var b;
    var c;
    var d=0;
    var e;
    var g;
    a=tab.length;
    for(var i=0;i<=a-2;i++){
        if(b[i]<b[i+1]){
            c=b[i+1]
        }
        else{
            c=b[i]
        }
    }
    for(var f=0;f<=a-1;f++){
        d=d+b[i]
    }
    e=d/a
    g=[c,e]
    return g;
}
var a= GetInteger();
var b=InitTab();
var c=[];
var d;
var e;
var f;
var g;
c=SaisirTab(c,b);
d=RechercheTab(c,a);
AffichTab(c);
document.write(d);
e=InfoTab(c);
f=e[0];
g=e[1];
document.write("le maximum est "+ f +" la moyenne est "+g)