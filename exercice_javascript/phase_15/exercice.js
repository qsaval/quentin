function verif(nom,a){
    if(nom<a){
        alert("trop petit");
    }
    else if(nom>a){
        alert("trop grand");
    }
    else{
        alert("bon nombre")
    }
}

var a= Math.random();
var b= window.prompt();
