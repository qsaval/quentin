function tri(b){
var a= b.length;
var c;
for (var i=0;i<=a;i++){
    if(b[i]>b[i+1]){
        c=b[i];
        b[i]=b[i+1];
        b[i+1]=c;
    }
}
return b;
}
var a;
var b=[1,6,4,2,8,1];
a=b.length;
for(var i=0;i<=a;i++){
    b=tri(b);
}
document.write(b);