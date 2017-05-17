var nrZdjecia =0;
function ukryjZdjecie()
{
	$("#head2").fadeOut(1000);
}


function wczytajZdjecie()
{
nrZdjecia++;
if(nrZdjecia>4)nrZdjecia=1;

var tagImg = "<img id=\"slajd\" src=\"obrazy/obraz"+nrZdjecia+".jpg\" />";	
document.getElementById("head2").innerHTML=tagImg;
$("#head2").fadeIn(1000);
setTimeout("wczytajZdjecie()",6000);
setTimeout("ukryjZdjecie()",5000);
}