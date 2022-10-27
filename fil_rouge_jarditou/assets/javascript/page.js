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
        erreur="entrez votre nom s.v.p";
        alert(erreur);
    }
    if(prenom.validity.valueMissing){
        erreur="entrez votre prenom s.v.p";
        alert(erreur);
    }
    if(adresse.value==""){
        erreur="entrez votre adresse s.v.p";
        alert(erreur);
    }
    if(ville.value==""){
        erreur="entrez la ville de votre adresse s.v.p";
        alert(erreur);
    }
    if(question.value==""){
        erreur="poser votre question s.v.p";
        alert(erreur);
    }
    if(code.value.length<5&& code.value.length>0){
        erreur="entrez le code postal sur 5 chiffre s.v.p";
        alert(erreur);
    }
    if(!sujet=="Veuillez séléctionner un sujet"){
        erreur="Veuillez séléctionner un sujet s.v.p";
        alert(erreur);
    }
    if(!c.test(ville.value)){
        erreur="entrez la ville de votre adresse s.v.p";
        alert(erreur);
    }
    if(!c.test(question.value)){
        erreur="poser votre question s.v.p";
        alert(erreur);
    }
    if(a.test(email.value)){
        erreur="entrez votre email s.v.p";
        alert(erreur);
    }
    if(!c.test(nom.value)){
        erreur="entrez votre nom s.v.p";
        alert(erreur);
    }
    if(!c.test(prenom.value)){
        erreur="entrez votre prenom s.v.p";
        alert(erreur);
    }
    if(!d.test(code.value)){
        erreur="entrez le code postal sur 5 chiffre s.v.p";
        alert(erreur);
    }
    if(!b.test(date1.value)){
        erreur="entrez votre date de naissance";
        alert(erreur);
    }
    if(document.getElementById("condition").checked==false){
        erreur="cochee le traitement d'information s.v.p";
        alert(erreur);
    }
    if(document.getElementById("sexe1").checked==false&&document.getElementById("sexe2").checked==false){
        erreur="vous pourriez nous indiquer votre sexe s.v.p";
        alert(erreur);
    }
    if(erreur){
        e.preventDefault();
        return false;
    }
    else{
        return true;
    }
})