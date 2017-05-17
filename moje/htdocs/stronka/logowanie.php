<?php
if(isset($_SESSION["zalogowany"]))$zalogowany = $_SESSION["zalogowany"];
else $zalogowany= "no";
if(isset($_REQUEST["test"]))$test= $_REQUEST["test"];
else $test="nie";

if($zalogowany == "no" && $test == "tak")$zalogowany = sprawdzUzytkownika();

if($zalogowany=="yes")
{
	wykonaj();
}
else if($zalogowany=="no")
{
	
formularzLogowania();
}
else if($zalogowany=="error")
{
infoError("Nie prawidłowe login lub hasło<br />");
formularzLogowania();
}
else
{
infoError("Zjebałeś po prostu Zjebałeś");
}
/*-------------------------------------------*/

function wykonaj()
{
echo "Zostałeś zalogowany i teraz tańcz hahahhaha";
}

function infoError($string)
{
echo ($string);
}

function formularzLogowania()
{
echo <<<KONIEC
<form action="index.php?strona=logowanie" method="post">
Login:&nbsp;<input type="text" name="login" value="" /><br /><br />
Hasło:&nbsp;<input type="password" name="haslo" value="" /><br /><br />
<input type="hidden" name="test" value="tak" />
<input type="submit" value="Zaloguj" name="loguj" />


</form>
KONIEC;
}

function sprawdzUzytkownika()
{
	$login=$_REQUEST["login"]; $haslo=$_REQUEST["haslo"];
	$host="localhost"; $user ="root"; $password="";
	$baza ="korporacja"; $tabele="uzytkownicy";
	$connection=mysqli_connect($host,$user,$password,$baza);
	if($connection)
	{
		$zapytanie="Select * From uzytkownicy";
		$wynik=$connection ->query($zapytanie);
		if($wynik)
		{
			$ile = mysqli_num_rows($wynik);
			if($ile>= 1)
			{
				$log="error";
				for($i=1;$i<=$ile;$i++)
				{
					$wiersz = mysqli_fetch_assoc($wynik);
					$id = $wiersz["id"];
					$name= $wiersz["name"];
					$passwd = $wiersz["password"];
					if($login==$name && $haslo==$passwd)$log= "yes";
				}
			}
		}
		
	}
	else infoError("Brak połączenia z bazą lub hostem");
	return $log;
}
?>
