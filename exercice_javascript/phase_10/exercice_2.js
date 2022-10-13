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
function SaisirTab(tab){
    var a;
    a=tab.length;
    for(var i=0;i<=a-1;i++){
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
    return c;
    return e;
}
