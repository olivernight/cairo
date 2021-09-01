<?php
//createur de carte svg en php





$tete='<?xml version="1.0" encoding="UTF-8" standalone="no"?>

<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
  "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"
[
    <!ENTITY ns_flows "http://ns.adobe.com/Flows/1.0/">
	<!ENTITY ns_svg "http://www.w3.org/2000/svg">
	<!ENTITY ns_xlink "http://www.w3.org/1999/xlink">
]>

<svg id="gene"  onmousemove="javascript:svggeneral()"
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
xmlns:xul="http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul"

   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://web.resource.org/cc/"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
 

   xmlns:sodipodi="http://inkscape.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"


>


<script id="scrpt"  language="javascript" ><![CDATA[
var brsrici="ei"


function affichN(){
//brsrici=document.getElementById("totalsvg").getAttribute("name")
if(brsrici=="ei"){window.SVGaffichN()}else{
top.frames.Num0.frames.couches.zoom.SVGaffichN()
}
}
var strokewidthpas
var strokepas
var opacpas
function passon(a){
strokepas=a.getAttribute(\'stroke\')
a.setAttribute(\'stroke\',\'navy\');
opacpas=a.getAttribute(\'fill-opacity\')
a.setAttribute(\'fill-opacity\',\'0.5\')  
}
function passout(a){
a.setAttribute(\'fill-opacity\',opacpas)
a.setAttribute(\'stroke\',strokepas);
}
function svggeneral(){

brsrici=document.getElementById("totalsvg").getAttribute("name")
if(brsrici=="ei"){window.SVGgeneral()}else{
top.frames.Num0.frames[2].indic1()
}}
function svgdown(a){
//brsrici=document.getElementById("totalsvg").getAttribute("name")
if(brsrici=="ei"){window.SVGdown()}else{
top.frames.Num0.frames.couches.zoom.selxsvg();top.frames.Num0.frames.couches.zoom.rien();
}}
function svgclick1(){
//brsrici=document.getElementById("totalsvg").getAttribute("name")
if(brsrici=="ei"){window.SVGclick1()}else{
top.frames.Num0.frames.couches.zoom.valNoDatx(NoDatx);top.frames.Num0.frames.couches.zoom.transDATA();top.frames.Num0.frames.couches.zoom.carte()
}
}
function svgclick2(){
//brsrici=document.getElementById("totalsvg").getAttribute("name")
if(brsrici=="ei"){window.SVGclick2()}else{
top.frames.Num0.frames.couches.zoom.valNoDatx2(NoDatx);top.frames.Num0.frames.couches.zoom.transDATA();top.frames.Num0.frames.couches.zoom.carte()
}}
function svgout(){
//brsrici=document.getElementById("totalsvg").getAttribute("name")
if(brsrici=="ei"){window.SVGout()}else{
//top.frames.Num0.frames.couches.zoom0()
//<image x="10" Y="10" width="300" height="300" xlink:href="fonds france contour.jpg" ></image>
}}
]]></script>

  <metadata
     id="metadata7">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
      </cc:Work>
    </rdf:RDF>
  </metadata>

<defs>
<radialGradient id="grad1" >
 <stop class="begin" offset="0" style="stop-color:#5555AA"/>
 <stop class="end" offset="1" style="stop-color:white"/>
</radialGradient>
</defs>';

$bas='<g id="images1" transform="matrix(1 0 0 1 0 0)" xml:space=\'preserve\'>
<image id="images11" transform="matrix(1 0 0 1 0 0)" x="0" y="-60" width="0" height="0" xlink:href="transparent.png"  opacity="0"   onmousedown="javascript:svgdown()"  onmousemove="svggeneral()"  onmouseout="svgout()" ></image>

<image id="images12" transform="matrix(1 0 0 1 0 0)" x="0" y="-60" width="0" height="0" xlink:href="transparent.png"  opacity="0"   onmousedown="javascript:svgdown()"  onmousemove="svggeneral()"  onmouseout="svgout()"></image>

</g>
<g id="legende"  transform="matrix(1 0 0 1 0 0)" xml:space=\'preserve\'>











<g id="iconeslegende"  transform="matrix(1 0 0 1 0 -400)" xml:space=\'preserve\'>

<g  id="comlegico" transform="matrix(1 0 0 1 0 -600)" xml:space=\'preserve\'>

<rect fill="#EFF2F9"
transform="matrix(1 0 0 1 0 0)" style="fill-rule:evenodd;stroke-width:0.5;stroke-linecap:butt;stroke-linejoin:miter" fill-opacity="1"  stroke-opacity="1" stroke="#000000" id="commentlegrond"  width="258" height="0" x="190" y="30"  />

<text id="comtxtr1" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="40" > </text>
<text id="comtxtr2" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="50" > </text>
<text id="comtxtr3" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="60" > </text>
<text id="comtxtr4" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="70" > </text>
<text id="comtxtr5" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="80" > </text>
<text id="comtxtr6" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="90" > </text>
<text id="comtxtr7" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="100" > </text>
<text id="comtxtr8" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="110" > </text>
<text id="comtxtr9" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="120" > </text>
<text id="comtxtr10" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="130" > </text>
<text id="comtxtr11" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="140" > </text>
<text id="comtxtr12" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="150" > </text>
<text id="comtxtr13" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="160" > </text>
<text id="comtxtr14" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="170" > </text>
<text id="comtxtr15" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="180" > </text>
<text id="comtxtr16" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="190" > </text>
<text id="comtxtr17" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="200" > </text>
<text id="comtxtr18" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="210" > </text>
<text id="comtxtr19" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="220" > </text>
<text id="comtxtr20" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="230" > </text>
<text id="comtxtr21" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="240" > </text>
</g>

<g id="leico" transform="matrix(0.80 0 0 0.80 5 20)" xml:space=\'preserve\'>
 <rect fill="#EFF2F9" transform="matrix(1 0 0 1 0 80)" style="fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
     id="rectprint"
     width="150"
     height="211"
     x="20"
     y="30"
     onmouseover="var mat=\'matrix(1 0 0 1 0 80)\';top.frames.Num0.frames.couches.zoom.document.getElementById(\'trans\').getSVGDocument().getElementById(\'comlegico\').setAttribute(\'transform\',mat)"
      onmouseout="var mat=\'matrix(1 0 0 1 0 -600)\';top.frames.Num0.frames.couches.zoom.document.getElementById(\'trans\').getSVGDocument().getElementById(\'comlegico\').setAttribute(\'transform\',mat)"
     
     />




<text id="titricone" style="font-family:Arial Black;" font-size="10"  x="22" y="125" >titre icone</text>
<text id="sourceicone" style="font-family:Arial Black;" font-size="8"  x="25" y="133" >source:</text>
<g id="dessinleg"  transform="matrix(1 0 0 1 0 10)" xml:space=\'preserve\'>
<g  id="icoleg1"  onclick="javascript:NoDatx=id;svgclick1()"  stroke="black" fill="none" stroke-width="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="10" transform="matrix(1 0 0 1 0 0)" ><path transform="matrix(1 0 0 1 0 0)" id="icolegpath1"  d=""  /></g>
<circle id="cleg1" fill="none" fill-opacity="0.80" fill-rule="evenodd" stroke="#000000" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1" cx="65" cy="180" r="30" />

<text id="nbabac1" style="font-family:Arial Black;text-anchor:end" font-size="10"  x="167" y="140" >1400000</text>

	 <line id="t11" stroke-width="0.5" stroke="#000000" x1="110" y1="142" x2="167" y2="142" />
	 <line id="t12" stroke-width="0.5" stroke="#000000" x1="95" y1="150" x2="110" y2="142" />
	 <line id="t13" stroke-width="0.5" stroke="#000000" x1="65" y1="150" x2="95" y2="150" />
<g  id="icoleg2"  onclick="javascript:NoDatx=id;svgclick1()"  stroke="black" fill="#7f7f7f" stroke-width="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="10" transform="matrix(1 0 0 1 0 0)" ><path transform="matrix(1 0 0 1 0 0)" id="icolegpath2"  d=""  /></g>
<circle id="cleg2" fill="none" fill-opacity="0.80" fill-rule="evenodd" stroke="#000000" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1" cx="65" cy="195" r="15" />

<text id="nbabac2" style="font-family:Arial Black;text-anchor:end" font-size="10"  x="167" y="155" >1400000</text>
	 <line id="t21" stroke-width="0.5" stroke="#000000" x1="110" y1="157" x2="167" y2="157" />
	 <line id="t22" stroke-width="0.5" stroke="#000000" x1="95" y1="180" x2="110" y2="157" />
	 <line id="t23" stroke-width="0.5" stroke="#000000" x1="65" y1="180" x2="95" y2="180" />
<g  id="icoleg3"  onclick="javascript:NoDatx=id;svgclick1()"  stroke="black" fill="#4f7f7f" stroke-width="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="10" transform="matrix(1 0 0 1 0 0)" ><path transform="matrix(1 0 0 1 0 0)" id="icolegpath3"  d=""  /></g>
<circle id="cleg3" fill="none" fill-opacity="0.80" fill-rule="evenodd" stroke="#000000" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1" cx="65" cy="202" r="7" />

<text id="nbabac3" style="font-family:Arial Black;text-anchor:end" font-size="10"  x="167" y="170" >1400000</text>
	 <line id="t31" stroke-width="0.5" stroke="#000000" x1="110" y1="172" x2="167" y2="172" />
	 <line id="t32" stroke-width="0.5" stroke="#000000" x1="95" y1="195" x2="110" y2="172" />
	 <line id="t33" stroke-width="0.5" stroke="#000000" x1="65" y1="195" x2="95" y2="195" />
</g>
<g id="coulc"  transform="matrix(1 0 0 1 0 0)" xml:space=\'preserve\'>
<text id="titricone2" style="font-family:Arial Black;text-anchor:end" font-size="10"  x="167" y="235" > </text>
<text id="sourceicone2" style="font-family:Arial Black;text-anchor:end" font-size="8"  x="167" y="243" > </text>
     <circle id="coulc1" fill="none" fill-opacity="0.80" fill-rule="evenodd" stroke="#000000" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1" cx="40" cy="250" r="5" />
	 <text id="interc1" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="253" >1400000</text>

	<circle id="coulc2" fill="none" fill-opacity="0.80" fill-rule="evenodd" stroke="#000000" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1" cx="40" cy="265" r="5" />
	 <text id="interc2" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="268" >1400000</text>

	 <circle id="coulc3" fill="none" fill-opacity="0.80" fill-rule="evenodd" stroke="#000000" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1" cx="40" cy="280" r="5" />
	<text id="interc3" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="283" >1400000</text>

	 <circle id="coulc4" fill="none" fill-opacity="0.80" fill-rule="evenodd" stroke="#000000" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1" cx="40" cy="295" r="5" />
	 <text id="interc4" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="298" >1400000</text>

	 <circle id="coulc5" fill="none" fill-opacity="0.80" fill-rule="evenodd" stroke="#000000" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1" cx="40" cy="310" r="5" />
	 <text id="interc5" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="313" >1400000</text>
	</g>
</g>

        </g>

<g id="coulf"  transform="matrix(1 0 0 1 0 -400)" xml:space=\'preserve\'>

<g  id="comlegfond" transform="matrix(1 0 0 1 0 -600)" xml:space=\'preserve\'>

<rect fill="#EFF2F9"
transform="matrix(1 0 0 1 0 0)" style="fill-rule:evenodd;stroke-width:0.5;stroke-linecap:butt;stroke-linejoin:miter" fill-opacity="1"  stroke-opacity="1" stroke="#000000" id="commentleg"  width="258" height="0" x="190" y="30"  />

<text id="comtxt1" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="40" > </text>
<text id="comtxt2" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="50" > </text>
<text id="comtxt3" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="60" > </text>
<text id="comtxt4" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="70" > </text>
<text id="comtxt5" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="80" > </text>
<text id="comtxt6" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="90" > </text>
<text id="comtxt7" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="100" > </text>
<text id="comtxt8" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="110" > </text>
<text id="comtxt9" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="120" > </text>
<text id="comtxt10" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="130" > </text>
<text id="comtxt11" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="140" > </text>
<text id="comtxt12" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="150" > </text>
<text id="comtxt13" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="160" > </text>
<text id="comtxt14" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="170" > </text>
<text id="comtxt15" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="180" > </text>
<text id="comtxt16" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="190" > </text>
<text id="comtxt17" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="200" > </text>
<text id="comtxt18" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="210" > </text>
<text id="comtxt19" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="220" > </text>
<text id="comtxt20" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="230" > </text>
<text id="comtxt21" style="font-family:Arial;text-anchor:start" font-size="10"  x="192" y="240" > </text>

</g>





<g   transform="matrix(1 0 0 1 0 -15)" xml:space=\'preserve\'>

<g id="leifond" transform="matrix(0.80 0 0 0.80 5 0)" xml:space=\'preserve\'>

<rect fill="#EFF2F9"
transform="matrix(1 0 0 1 0 0)" style="fill-rule:evenodd;stroke-width:0.5;stroke-linecap:butt;stroke-linejoin:miter" fill-opacity="1"  stroke-opacity="1" stroke="#000000" id="rectfond"  width="150" height="105" x="20" y="270" 

     onmouseover="var mat=\'matrix(1 0 0 1 0 240)\';top.frames.Num0.frames.couches.zoom.document.getElementById(\'trans\').getSVGDocument().getElementById(\'comlegfond\').setAttribute(\'transform\',mat)"
      onmouseout="var mat=\'matrix(1 0 0 1 0 -600)\';top.frames.Num0.frames.couches.zoom.document.getElementById(\'trans\').getSVGDocument().getElementById(\'comlegfond\').setAttribute(\'transform\',mat)"

 />



<text id="titrefond" style="font-family:Arial Black;text-anchor:start" font-size="10"  x="22" y="282" >titre fond carte</text>
<text id="sourcefond" style="font-family:Arial Black;text-anchor:start" font-size="8"  x="22" y="290" >source:</text>
	<rect fill="#F6D5BD"
transform="matrix(1 0 0 1 0 0)" style="fill-rule:evenodd;stroke-width:0.5;stroke-linecap:butt;stroke-linejoin:miter" fill-opacity="1"  stroke-opacity="1" stroke="#000000" id="rectfond1"  width="10" height="10" x="37" y="300" />
	 <text id="interf1" transform="matrix(1 0 0 1 0 0)" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="308" > </text>


	<rect fill="#F6D5BD"
transform="matrix(1 0 0 1 0 15)" style="fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" id="rectfond2"  width="10" height="10" x="37" y="300" />
	 <text id="interf2" transform="matrix(1 0 0 1 0 15)" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="308" > </text>

	<rect fill="#F6D5BD"
transform="matrix(1 0 0 1 0 30)" style="fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" id="rectfond3"  width="10" height="10" x="37" y="300" />
	 <text id="interf3" transform="matrix(1 0 0 1 0 30)" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="308" > </text>

	<rect fill="#F6D5BD"
transform="matrix(1 0 0 1 0 45)" style="fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" id="rectfond4"  width="10" height="10" x="37" y="300" />
	 <text id="interf4" transform="matrix(1 0 0 1 0 45)" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="308" > </text>



	<rect fill="#F6D5BD"
transform="matrix(1 0 0 1 0 60)" style="fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.5;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" id="rectfond5"  width="10" height="10" x="37" y="300" />
		 <text id="interf5" transform="matrix(1 0 0 1 0 60)" style="font-family:Arial;text-anchor:start" font-size="10"  x="50" y="308" > </text>
		 </g>
	</g>
</g>
	 </g>




<script><![CDATA[

parent.CREATEX()
]]></script>


</svg>';
$n=$_REQUEST['N'];


//echo "<script>alert('\$nb_valeurs='+".$nb_valeurs.")</script>";

//on ouvre le fichier
$fichier=$n[1]."/CARTOSVG.svg";
$op_file=fopen($fichier,"w+");
//on ecrit dans le fichier : 
fwrite($op_file,$tete."\n\n");
// parametre des points clés et questions répondues


fwrite($op_file,$n[0]."\n");
fwrite($op_file,$bas);


fclose($op_file);

?>