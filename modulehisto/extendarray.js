function ExtendArray() {
 Array.prototype.remove = Array_Remove;
 Array.prototype.add = Array_Add;
 Array.prototype.swap = Array_Swap;
 // removes and returns last element
 Array.prototype.pop = Array_Pop;
 // use these with arrays of ints
 Array.prototype.min = Array_GetMin;
 Array.prototype.minrg = Array_GetMinrg;
 Array.prototype.max = Array_GetMax;
 Array.prototype.maxrg = Array_GetMaxrg;
 Array.prototype.avg = Array_GetAvg;
 Array.prototype.multipl = Array_Multipl;
}


 function Array_Remove(c) {
  var tmparr = new Array();
  for (var i=0; i<this.length; i++) if (i!=c) tmparr[tmparr.length] = this[i];
   return tmparr;
 }

 function Array_Add(c, cont) {
  var tmparr = new Array();
  for (var i=0; i<this.length; i++) {
   if (i==c) tmparr[tmparr.length] = cont;
    tmparr[tmparr.length] = this[i];
  }
  if (!tmparr[c]) tmparr[c] = cont;
   return tmparr;
 }

 function Array_Swap(x, z) {
  var zvalue = this[z];
  this[z] = this[x];
  this[x] = zvalue;
  return this;
 }

 function Array_Pop() {
  var item = this[this.length-1];
  this.length--;
  return item;
 }

 function Array_GetMin() {
  var Min = this[0];
  if (isNaN(Min*1) && !IsDate(Min)) return '';
  for (var i=0; i<this.length; i++) if (this[i]*1<Min) Min = this[i];
  return Min;
 }

 function Array_GetAvg() {
  var Total = 0;
  if (isNaN(this[0]*1) && !IsDate(this[0])) return '';
  for (var i=0; i<this.length; i++) if (this[i] != 0) Total += this[i]*1;
  var Avg = Total/(Comps.length+1)
  if ((Avg+"").indexOf(".") > -1) { 
   if (GetMax(i)-GetMin(i) > 50)
    Avg = Math.round(Avg);
    // if difference between min and max > 50, round
    else Avg = (Avg+"").substring(0,(Avg+"").indexOf(".")+((bFloat) ? 3 : 2));
    // else if all values were whole round to 2 places, else 3
   }
  return (Avg>0) ? Avg : "";
 }

 function Array_GetMax() {
  var Max = this[0];
  if (isNaN(Max*1) && !IsDate(Max)) return '';
  for (var i=0; i<this.length; i++) if (this[i]*1>Max) Max = this[i];
  return Max;
 }
 
  function Array_GetMaxrg() {
  var rangmax=0
  var Max = this[0];
  //if (isNaN(Max*1) && !IsDate(Max)) return '';
  for (var i=0; i<this.length; i++) {if (this[i]*1>Max) {Max = this[i];rangmax=i}}
  var Maxrg=new Array()
  Maxrg[0]=Max
  Maxrg[1]=rangmax
  return Maxrg;
 }
 
  function Array_GetMinrg() {
  var rangmin=0  
  var Min = this[0];
  if (isNaN(Min*1) && !IsDate(Min)) return '';
  for (var i=0; i<this.length; i++) {if (this[i]*1<Min){ Min = this[i]; rangmin=i}}
  var Minrg=new Array()
  Minrg[0]=Min
  Minrg[1]=rangmin
  return Minrg;
 }
 
 
 function Array_Multipl(c) {

  for (var i=0; i<this.length; i++) this[i]=this[i]*c;

 }