var htmlPlus = "";
function start()
{
	var powitaj="<h2>Witaj na naszej stronie</h2><p>Dokonaj wyboru opcji w panelu po lewej stronie</p>";
	document .getElementById("glowny").innerHTML =powitaj;
	
}
function opcja1()
{
	var tekst="<h2>Witaj na naszej stronie</h2><p>Dokonaj wyboru opcji w panelu po lewej stronie</p>";
 document.getElementById("glowny").innerHTML = tekst;
 }
 
function opcja2()
{
	var tekst="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae consectetur velit. Suspendisse non lorem a lectus tempus luctus. Duis aliquam arcu id placerat sagittis. Integer at arcu nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla vestibulum non enim non lobortis. Nullam sodales, dui a mollis elementum, arcu nunc ornare felis, at pretium felis lorem ac urna. Donec lacinia tellus eu tellus consequat dictum.";
 document.getElementById("glowny").innerHTML = tekst;
 }
 
 function opcja3()
{
	document.getElementById("glowny").innerHTML ="<input id=\"liczba\" type=\"text\"><input onclick=\"sprawdz();\" type=\"submit\" value=\"Wprowadz liczbę\">";	
}
 
 function sprawdz()
 {
	var liczba = parseInt(document.getElementById("liczba").value);
	 if (liczba > 0) htmlPlus = "<br />" + liczba + "jest większe od zera";
	 else if (liczba < 0) htmlPlus = "<br />" + liczba + "jest mniejsze od zera";
		else htmlPlus = "<br />Zero to zawsze zero";
	document.getElementById("glowny").innerHTML = htmlPlus;
	
	 
 }
 
 function opcja4()
 {
	 document.getElementById("glowny").innerHTML = "<img src = \"szeldon.png\" />";
	 
 }
 