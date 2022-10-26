document.getElementById("exercice1").addEventListener("submit",function (){
    var a = window.prompt();    
    if(a % 2 == 0){
        document.write("nombre est pair");
    }
    else{
        document.write("nombre est impair");
    }
})