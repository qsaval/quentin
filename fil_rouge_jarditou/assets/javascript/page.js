document.getElementById("contact").addEventListener("submit",function (e){
    e.preventDefault();

    var erreur;
    var nom=document.getElementById("nom");
    var prenom=document.getElementById("prenom");
    var code=document.getElementById("code");
    var email=document.getElementById("email");
    var a=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var c=/^[A-Z,a-z]+$/;
    var d=/^[0-9]+$/;
    
    if(nom.validity.valueMissing){
        erreur="entrez votre nom s.v.p";
    }
    if(prenom.validity.valueMissing){
        erreur="entrez votre prenom s.v.p";
    }
    if(code.value.length<5&& code.value.length>0){
        erreur="entrez le code postal sur 5 chiffre s.v.p";
    }
    if(a.test(email)){
        erreur="entrez email de entreprise societe s.v.p";
    }
    if(!c.test(nom.value)){
        erreur="entrez votre nom s.v.p";
    }
    if(!c.test(prenom.value)){
        erreur="entrez votre prenom s.v.p";
    }
    if(!d.test(code.value)){
        erreur="entrez le code postal sur 5 chiffre s.v.p";
    }
    if(document.getElementById("condition").checked==false){
        erreur="cochee le traitement d'un formation s.v.p";
    }
    if(document.getElementById("sexe1").checked==false&&document.getElementById("sexe2").checked==false){
        erreur="ryhe";
    }
    if(erreur){
        e.preventDefault();
        alert(erreur);
        return false;
    }
    else{
        return true;
    }
})