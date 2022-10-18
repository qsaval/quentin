document.getElementById("contact").addEventListener("submit",function (e){
    e.preventDefault();

    var erreur;
    var nom=document.getElementById("nom");
    var prenom=document.getElementById("prenom");

    code=par
    if(nom.value==""){
        erreur="entrez votre nom s.v.p";
    }
    if(prenom.value==""){
        erreur="entrez votre prenom s.v.p";
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