var nrZdjecia =0;

function wczytajZdjecie()
{alert("XXX");
nrZdjecie++;
if(nrZdjecia>5)nrZdjecia=1;

var tagImg = "<img id=\"slajd\" src=\"obrazy/obraz"+nrZdjecia+".jpg\" />";	
document,getElementById("head2").innerHTML=tagImg;
}