function verif(nom,a){
    if(nom<a){
        alert("trop petit");
    }
    else if(nom>a){
        alert("trop grand");
    }
    else if (nom==a){
        alert("bon nombre");
    }
}

var nom=document.getElementById("textBox1").value;
var a=Math.random()*10;
var element=document.getElementById("button1");
element.addEventListener("click",verif(nom,a));