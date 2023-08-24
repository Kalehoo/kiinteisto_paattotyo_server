<!DOCTYPE html>

<html lang="en">

<head>
    <?php 
    include_once('bootstrap.php');
    include_once('fetchStyle.php');
    ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luo käyttäjätunnus</title>

</head>

<br><br>

<body>
<div class = "row text-center">
    <h1>Kiinteistö OYJ Kivikasa</h1>
</div>
<div class="container">
<br>
    <h2>Käyttäjätunnuksen luonti:</h2>
    <br>
    <div class="row text-center border border-">
        <form action="handlers/authenticate.php" method="post">
            <br>
            <div class="form-group">
                <input type="email" class="form-control" id="InputEmail" placeholder="Sähköpostiosoite">
                <small id="emailHelp" class="form-text text-muted">Emme jaa sähköpostiosoitteita ulkopuolisille toimijoille</small>
            </div>


            <div class="form group">
                    <div class="row justify-content-md-center">
                        <div class="col-6">
                            <input type="firstname" class="form-control" id="InputFirstName" placeholder="Etunimi">
                        </div>
                        <div class="col-6">
                            <input type="surname" class="form-control" id="InputSurname"placeholder="Sukunimi">
                    </div>
            </div>

            <br>
            <div class="form-group">
                <input type="password" class="form-control" id="InputPassword" placeholder="Salasana">
                <br>
                <input type="password" class="form-control" id="CheckPassword" placeholder="Tarkista Salasana">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" id="submit">Luo käyttäjätunnus</button>
            <button type="clear" class="btn btn-primary">Peruuta</button>

            <br>
            <br>
            <div class = "row justify-content-md-center">
                <span class="d-none" id="hide_alert">
                    <div class="alert alert-danger" role="alert" id="verifyPassword">
                    </div>
                </span>
            </div>

            <script src="app/Jss/form_handling.js">
            </script>
            

            <br>
            <br>
            </div>
        </form>
    </div>
</div>




</body>
</html>