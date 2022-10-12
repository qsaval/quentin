var reponse1 = window.prompt("saisisser votre nom");
var reponse2 = window.prompt("saisisser votre prenom");
if(window.confirm("Etes-vous un homme?") == true){
    window.alert("Bonjour Monsieur " + reponse1 + reponse2 + " bienvenue sur notre site web!"); 
}
else{
    window.alert("Bonjour Madame " + reponse1 + reponse2 + " bienvenue sur notre site web!");
}

