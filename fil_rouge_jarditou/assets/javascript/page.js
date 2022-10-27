document.getElementById("contact").addEventListener("submit",function (e){
    e.preventDefault();

    var erreur;
    var nom=document.getElementById("nom");
    var prenom=document.getElementById("prenom");
    var code=document.getElementById("code");
    var email=document.getElementById("email");
    var date1=document.getElementById("date");
    var adresse=document.getElementById("adresse");
    var ville=document.getElementById("ville");
    var question=document.getElementById("question");
    var sujet=document.getElementById("sujet");
    var a=/^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
    var b=/^[0-9]+\/[0-9]\/[0-9]+$/;
    var c=/^[A-Z,a-z]+$/;
    var d=/^[0-9]+$/;
    
    if(nom.validity.valueMissing){
        erreur=document.getElementById("erreurnom");
        erreur.innerHTML="entrez votre nom s.v.p";
    }
    if(prenom.validity.valueMissing){
        erreur=document.getElementById("erreurprenom");
        erreur.innerHTML="entrez votre prenom s.v.p";
    }
    if(adresse.value==""){
        erreur=document.getElementById("erreuradresse");
        erreur.innerHTML="entrez votre adresse s.v.p";
    }
    if(ville.value==""){
        erreur=document.getElementById("erreurville");
        erreur.innerHTML="entrez la ville de votre adresse s.v.p";
    }
    if(email.value==""){
        erreur=document.getElementById("erreuremail");
        erreur.innerHTML="entrez votre email s.v.p";
    }
    if(question.value==""){
        erreur=document.getElementById("erreurquestion");
        erreur.innerHTML="poser votre question s.v.p";
    }
    if(code.value.length<5&& code.value.length>0){
        erreur=document.getElementById("erreurcode");
        erreur.innerHTML="entrez le code postal sur 5 chiffre s.v.p";
    }
    if(sujet.selectedIndex==0){
        erreur=document.getElementById("erreursujet");
        erreur.innerHTML="Veuillez choisir un sujet s.v.p";
    }
    if(!c.test(ville.value)){
        erreur=document.getElementById("erreurville");
        erreur.innerHTML="entrez la ville de votre adresse s.v.p";
    }
    if(!c.test(question.value)){
        erreur=document.getElementById("erreurquestion");
        erreur.innerHTML="poser votre question s.v.p";
    }
    if(!a.test(email.value)){
        erreur=document.getElementById("erreuremail");
        erreur.innerHTML="entrez votre email s.v.p";
    }
    if(!c.test(nom.value)){
        erreur=document.getElementById("erreurnom");
        erreur.innerHTML="entrez votre nom s.v.p";
    }
    if(!c.test(prenom.value)){
        erreur=document.getElementById("erreurprenom");
        erreur.innerHTML="entrez votre prenom s.v.p";
    }
    if(!d.test(code.value)){
        erreur=document.getElementById("erreurcode");
        erreur.innerHTML="entrez le code postal sur 5 chiffre s.v.p";
    }
    if(document.getElementById("condition").checked==false){
        erreur=document.getElementById("erreurcondition");
        erreur.innerHTML="cochee le traitement d'information s.v.p";
    }
    if(document.getElementById("sexe1").checked==false&&document.getElementById("sexe2").checked==false){
        erreur=document.getElementById("erreursexe");
        erreur.innerHTML="vous pourriez nous indiquer votre sexe s.v.p";
    }
    if(erreur){
        e.preventDefault();
        return false;
    }
    else{
        return true;
    }
})