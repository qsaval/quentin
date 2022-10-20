var tab=["Audrey","Aurélien","Flavien","Jérémy","Laurent","Melik","Nouara","Salem","Samuel","Stéphane"];
var prenom = window.prompt("entre un prenom");
var a=tab.length;
var b;

for (var i=0;i<=a-1;i++){
    if(prenom==tab[i]){
        tab[i]="";
        b=i;
        for(var f=b;f<=a-2;i++){
            tab[f]=tab[f+1].value;
        }
    }
}
if(tab[a-1]!=""){
    alert("le prenom n'est pas dans la liste");
}
else{
    document.write(tab);
}