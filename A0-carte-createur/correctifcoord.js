
for(k=0;k<menuAreas.length;k++){
XYareas=menuAreas[k]

//if(k==14-1){XYareas[0]-=20;XYareas[1]+=0}
//if(k==140-1){XYareas[0]-=50;XYareas[1]+=0}
//if(k==44-1){XYareas[0]-=10;XYareas[1]-=5}



menuAreas[k]=XYareas
}

function zoomdepart(){
var z=new Array()

z[0]=1;// réglage du zoom par défaut
z[1]=-115; //décallage du svg en x
z[2]=0//-65; //décallage du svg en y
return z}