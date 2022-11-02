document.getElementById("contact").addEventListener("submit",function (e){
    e.preventDefault();

    var erreur;
    var erreur1=false;
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
    var b=/^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$/;
    var c=/^[A-Z,a-z]+$/;
    var d=/^[0-9]+$/;
    var g=/^[a-zA-Z0-9\s\,\''\-]*$/
    
    if(nom.validity.valueMissing){
        erreur=document.getElementById("erreurnom");
        erreur.innerHTML="entrez votre nom s.v.p";
        erreur1=true;
    }
    if(prenom.validity.valueMissing){
        erreur=document.getElementById("erreurprenom");
        erreur.innerHTML="entrez votre prenom s.v.p";
        erreur1=true;
    }
    if(adresse.value==""){
        erreur=document.getElementById("erreuradresse");
        erreur.innerHTML="entrez votre adresse s.v.p";
        erreur1=true;
    }
    if(ville.validity.valueMissing){
        erreur=document.getElementById("erreurville");
        erreur.innerHTML="entrez la ville de votre adresse s.v.p";
        erreur1=true;
    }
    if(email.validity.valueMissing){
        erreur=document.getElementById("erreuremail");
        erreur.innerHTML="entrez votre email s.v.p";
        erreur1=true;
    }
    if(question.value==""){
        erreur=document.getElementById("erreurquestion");
        erreur.innerHTML="poser votre question s.v.p";
        erreur1=true;
    }
    if(code.value.length<5&& code.value.length>0){
        erreur=document.getElementById("erreurcode");
        erreur.innerHTML="entrez le code postal a 5 chiffre s.v.p";
        erreur1=true;
    }
    if(sujet.selectedIndex==0){
        erreur=document.getElementById("erreursujet");
        erreur.innerHTML="Veuillez choisir un sujet s.v.p";
        erreur1=true;
    }
    if(!c.test(ville.value)){
        erreur=document.getElementById("erreurville");
        erreur.innerHTML="entrez la ville de votre adresse s.v.p";
        erreur1=true;
    }
    if(!a.test(email.value)){
        erreur=document.getElementById("erreuremail");
        erreur.innerHTML="entrez votre email s.v.p";
        erreur1=true;
    }
    if(!c.test(nom.value)){
        erreur=document.getElementById("erreurnom");
        erreur.innerHTML="entrez votre nom s.v.p";
        erreur1=true;
    }
    if(!c.test(prenom.value)){
        erreur=document.getElementById("erreurprenom");
        erreur.innerHTML="entrez votre prenom s.v.p";
        erreur1=true;
    }
    if(!d.test(code.value)){
        erreur=document.getElementById("erreurcode");
        erreur.innerHTML="entrez le code postal a 5 chiffre s.v.p";
        erreur1=true;
    }
    if(!b.test(date1.value)){
        erreur=document.getElementById("erreurdate");
        erreur.innerHTML="entrez votre date de naissance s.v.p";
        erreur1=true;
    }
    if(!g.test(adresse.value)){
        erreur=document.getElementById("erreuradresse");
        erreur.innerHTML="entrez votre adresse s.v.p";
        erreur1=true;
    }
    if(document.getElementById("condition").checked==false){
        erreur=document.getElementById("erreurcondition");
        erreur.innerHTML="cochee le traitement d'information s.v.p";
        erreur1=true;
    }
    if(document.getElementById("sexe1").checked==false&&document.getElementById("sexe2").checked==false){
        erreur=document.getElementById("erreursexe");
        erreur.innerHTML="vous pourriez nous indiquer votre sexe s.v.p";
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