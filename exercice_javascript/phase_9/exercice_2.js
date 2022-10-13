function strtok (str1,str2,n){
    var a;
    var b=0;
    while (b!=n+1){
        if(a!= str2){
            a=str.split(str1);
            b++;
        }
        else{
            n++
            b++
        }
    }
    return a;
}