var a=[];
var i;
var b=0;
var c=0;
var d=0;

/*a[i]=window.prompt("entre votre age");
if(a[i]<20){
    b++;
}
else{ 
    if(a[i]>40){
        c++;
    }
    else{
        d++;
    }
}*/
for(i=0;i<=10;i++){
    a[i]=window.prompt("entre votre age");
    if(a[i]<20){
        b++;
    }
    else{ 
        if(a[i]>40){
            c++;
        }
        else{
            d++;
        }
    }
    i++;
}
document.write("il y a "+b+" personne de moins de 20 ans <br>");
document.write("il y a "+c+" personne de plus de 40 ans <br>");
document.write("il y a "+b+" personne de entre 20 et 40 ans");
