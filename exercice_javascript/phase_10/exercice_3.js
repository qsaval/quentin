var b=[1,5,3,1,4,2,5];
var a= b.length;
var c;
for (var i=0;i<=a;i++){
    if(b[i]>b[i+1]){
        c=b[i];
        b[i]=b[i+1];
        b[i+1]=c;
    }
}