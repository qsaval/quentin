document.getElementById("contact").addEventListener("submit",function (e){
    e.preventDefault();

    var erreur;
    var societe=document.getElementById("societe");
    var personne=document.getElementById("personne");
    var ville=document.getElementById("ville");
    var code=document.getElementById("code");
    var email=document.getElementById("email");
    var a=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var b;

    if(societe.value==""){
        erreur="entrez la nom de société s.v.p";
    }
    if(personne.value==""){
        erreur="entrez le nom de la personne a contact s.v.p";
    }
    if(ville.value==""){
        erreur="entrez le nom de la ville de l'entreprise s.v.p";
    }
    if(code.value.length<5&& code.value.length>0){
        erreur="entrez le code postal sur 5 chiffre s.v.p";
    }
    b=a.test(email);
    if(b){
        erreur="entrez email de entreprise societe s.v.p";
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