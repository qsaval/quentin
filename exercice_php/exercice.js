document.getElementById("contact").addEventListener("submit",function (e){

    var erreur;
    var erreur1=false;
    var societe=document.getElementById("societe");
    var personne=document.getElementById("personne");
    var ville=document.getElementById("ville");
    var code=document.getElementById("code");
    var email=document.getElementById("email");
    var a=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var c=/^[A-Z,a-z]+$/;
    var d=/^[0-9]+$/;

    if(societe.value==""){
        erreur=document.getElementById("erreursociete");
        erreur.innerHTML="entrez la nom de société s.v.p";
        erreur1=true;
    }
    if(personne.value==""){
        erreur=document.getElementById("erreurnom");
        erreur.innerHTML="entrez le nom de la personne a contact s.v.p";
        erreur1=true;
    }
    if(ville.value==""){
        erreur=document.getElementById("erreurville");
        erreur.innerHTML="entrez le nom de la ville de l'entreprise s.v.p";
        erreur1=true;
    }    
    if(code.value.length<5 && code.value.length>0){
        erreur=document.getElementById("erreurcode");
        erreur.innerHTML="entrez le code postal sur 5 chiffre s.v.p";
        erreur1=true;
    }
    if(!a.test(email)){
        erreur=document.getElementById("erreuremail");
        erreur.innerHTML="entrez email de entreprise societe s.v.p";
        erreur1=true;
    }
    if(!c.test(personne.value)){
        erreur=document.getElementById("erreurnom");
        erreur.innerHTML="entrez le nom de la personne a contact s.v.p";
        erreur1=true;
    }
    if(!c.test(ville.value)){
        erreur=document.getElementById("erreurville");
        erreur.innerHTML="entrez le nom de la ville de l'entreprise s.v.p";
        erreur1=true;
    }
    if(!d.test(code.value)){
        erreur=document.getElementById("erreurcode");
        erreur.innerHTML="entrez le code postal sur 5 chiffre s.v.p";
        erreur1=true;
    }
    if(erreur1){
        e.preventDefault();
        return false;
    }
    else{
        return true;
    }
})