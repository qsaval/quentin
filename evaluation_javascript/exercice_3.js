var tab=["Audrey","Aurélien","Flavien","Jérémy","Laurent","Malik","Nouara","Salem","Samuel","Stéphane"];
var prenom = window.prompt("entre un prenom");
var a=tab.length;
var b;
for (var i=0;i<=a-1;i++){
    if(prenom==tab[i]){
        prenom="";
        for(var f=i;f<=a-2;i++){
            b[f]=b[f+1];
        }
        b[a-1]="";
    }
}
document.write(b);