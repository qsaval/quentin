var a = parseInt(prompt("saisir un nombre entier"));
var b = parseInt(prompt("saisir un nombre entier"));
var c = parseInt(prompt("saisir une opération"));
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
            prompt("erreur");
        }
        else{
            d=a*b;
        }
        break
    case "/":
        if(b==0){
            prompt("erreur");
        }
        else{
            d=a/b;
        }
        break
    default:
        prompt("erreur");
}
prompt(a + c + b + "=" + d)
