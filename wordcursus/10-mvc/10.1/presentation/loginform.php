<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login form</title>
    </head>
    <body>
        <form action="aanmelden.php?action=login" method="post">
        <label for="Username">Username </label>
        <input type="text" name="username" placeholder="Gebruikersnaam"/>
        <br>
        <label for="Wachtwoord">Wachtwoord</label> 
        <input type=password name="wachtwoord" placeholder="Wachtwoord"/>
        <br><input type="submit" value="Inloggen">
        </form>
    </body>
</html>
