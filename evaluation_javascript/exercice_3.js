document.getElementById("exercice3").addEventListener("submit",function (){
var tab=["Audrey","Aurélien","Flavien","Jérémy","Laurent","Melik","Nouara","Salem","Samuel","Stéphane"];
var prenom = window.prompt("entre un prenom");
var a=tab.length;
var b;
var c;
var d;
var e;

for (var i=0;i<=a-1;i++){
    c=tab[i];
    if(prenom==c){;
        tab[i]="";
        b=i;
    }
}
if(tab[b]==""){
    for(var f=b;f<=a-2;i++){
        d=f+1;
        e=tab[d];
        tab[f]=e;
        tab[a-1]="";
    }
}
if(tab[a-1]!=""){
    alert("le prenom n'est pas dans la liste");
}
else{
    document.write(tab);
}
document.write('<br><br><a href="index.html">Accueil</a>');
})