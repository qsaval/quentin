document.getElementById("contact").addEventListener("submit",function (e){
    e.preventDefault();

    var erreur;
    var societe=document.getElementById("societe");
    var personne=document.getElementById("personne");
    var ville=document.getElementById("ville");
    var code=document.getElementById("code");
    var email=document.getElementById("email");

    code=par
    if(societe.value==""){
        erreur="entrez la nom de société s.v.p";
    }
    if(personne.value==""){
        erreur="entrez le nom de la personne a contact s.v.p";
    }
    if(ville.value==""){
        erreur="entrez le nom de la ville de l'entreprise s.v.p";
    }
    if(code.lengh<5){
        erreur="entrez le code postal sur 5 chiffre s.v.p"
    }
    if(re){

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