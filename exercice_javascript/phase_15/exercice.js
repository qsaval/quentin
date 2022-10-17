function verif(num,a){
    if(nom<a){
        alert("trop petit");
    }
    else if(nom>a){
        alert("trop grand");
    }
    else if (nom==a){
        alert("bon nombre")
    }
}

var a=Math.random()*10;
var b=window.prompt();
verif(b,a);