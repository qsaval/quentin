document.getElementById("contact").addEventListener("submit",function (e){
    e.preventDefault();

    var erreur;
    var nom=document.getElementById("nom");
    var prenom=document.getElementById("prenom");
    var code=document.getElementById("code");
    var email=document.getElementById("email");
    var a=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var b;
    var c=/^[A-Z,a-z]+$/;
    var d=/^[0-9]+$/;
    
    if(nom.value==""){
        erreur="entrez votre nom s.v.p";
    }
    if(prenom.value==""){
        erreur="entrez votre prenom s.v.p";
    }
    if(code.value.length<5&& code.value.length>0){
        erreur="entrez le code postal sur 5 chiffre s.v.p";
    }
    b=a.test(email);
    if(b){
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
    if(erreur){
        e.preventDefault();
        alert(erreur);
        return false;
    }
    else{
        return true;
    }
})