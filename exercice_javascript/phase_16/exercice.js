function checkForm(f){
    if (f.element[société].value==null){
        alert("entre la nom de société s.v.p")
        return false
    }
    if (f.element[personne].value==null){
        alert("entrez le nom de la personne a contact s.v.p")
        return false
    }
    if (f.element[ville].value==null){
        alert("entre le nom de la ville de l'entreprise s.v.p")
        return false
    }
    
}