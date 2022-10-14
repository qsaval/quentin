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
        tab[i]=window.prompt("saisir les valeur du tableau");
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
    var b=0;
    var c=0;
    var d=0;
    var g=[];
    var e;
    a=tab.length;
    for(var i=0;i<=a-2;i++){
        if(tab[i]<=tab[i+1]){
            c=tab[i+1];
            if(b<c){
                b=c;
            }
        }
        else{
            c=tab[i];
            if(b<c){
                b=c;
            }
        }
    }
    for(var f=0;f<=a-1;f++){
        e=parseInt(tab[f]);
        d=d+e;
    }
    g=[b,d/a];
    return g;
}


var a= GetInteger();
var b=InitTab();
var c=[];
var d;
var e=[];

c=SaisirTab(c,b);
d=RechercheTab(c,a);
AffichTab(c);
document.write("<br>la valeur au rang "+a+" est "+d);
e=InfoTab(c);
console.log(e);
document.write("<br>le maximum est "+e[0]+ "<br>la moyenne est "+e[1]);