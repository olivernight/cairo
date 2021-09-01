var CoefW=(MaxMin[2]-MaxMin[0])//(Wsvg-10)
var CoefH=(MaxMin[3]-MaxMin[1])//(Hsvg+10)

var alpha

var alphaW=(1+(CoefW-CoefH)/CoefH)/1.15

var alphaH=1
if((MaxMin[2]-MaxMin[0])>=(MaxMin[3]-MaxMin[1])){var delt=-10;alpha=alphaW; }else{var delt=0;alpha=alphaH; }
/**/
if(format=="small"){
var Z0=0.9/alpha//1.3*0.68  // zoom de départ
var ax=-184  // décallage axe des x au départ
var ay=-72//-105  
}
if(format=="big"){

var Z0=1.45/alpha//0.9  // zoom de départ
var ax=-22//-102  // décallage axe des x au départ
var ay=80//-65    // décallage axe des y au départ

}

if(format=="normal"){

var Z0=1.2/alpha*coefZ0//*0.85//*0.7 // zoom de départ - standard =~ 0.86
var ax=-118+25+Xdecal  // décallage axe des x au départ - standard =~ -108 
var ay=22+Ydecal//-40-60    // décallage axe des y au départ - standard =~ -61 

if(essaiBLANC==1){ax-=(500-Wsvg)/2+30 ; ay-=25} // change le mode d'affichage (en bas de section4 et début de section1) 
}
/**/
if(format=="complete"){
	
if(window.location.href.indexOf("COLLAB")>0){var Coefz=5/5;var Decz=0}else{var Coefz=1;var Decz=0}
var Z0=Coefz*1.2/alpha  // zoom de départ - standard =~ 0.86
var ax=-108+Decz  // décallage axe des x au départ - standard =~ -108 
var ay=15    // décallage axe des y au départ - standard =~ -61  



}
//**************************** légende des flux******************************
if(format=="small"){
var axi=-118  // décallage axe des x au départ
var ayi=40   // décallage axe des y 
}
if(format=="big"){
var axi=-108  // décallage axe des x 
var ayi=235   // décallage axe des y 

}

if(format=="normal"){
var axi=-108  // décallage axe des x 
var ayi=140    // décallage axe des y  
}
/**/
if(format=="complete"){
var axi=-108  // décallage axe des x 
var ayi=140    // décallage axe des y 

}
