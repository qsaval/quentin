function checkForm(f){
    if (f.element[société].value==null){
        alert("ecrire un nom de société")
        return false
    }
    if (f.element[personne].value==null){
        alert("ecrire un nom de contact")
        return false
    }
    if (f.element[ville].value==null){
        alert("ecrire un nom de ville")
        return false
    }
    
}