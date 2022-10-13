var a = window.prompt("saisir un nombre entier");
var b = window.prompt("saisir un nombre entier");
var c = window.prompt("saisir une opération");
var d;
switch (c) {
    case "+":
        d=a+b;        
        break;
    
    case "-":
        d=a-b;
        break
    case "*":
        if(a==0||b==0){
            window.alert("erreur");
        }
        else{
            d=a*b;
        }
        break
    case "/":
        if(b==0){
            window.alert("erreur");
        }
        else{
            d=a/b;
        }
        break
    default:
        window.alert("erreur");
}
document.write(a + c + b + "=" + d);
