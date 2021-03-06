<!DOCTYPE html>
<html lang="et">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>I244 kaugõpe: 5. praktikum: töö saatmine</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/materialize.min.css">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <div class="page-wrap container">
        <h1 class="main-heading">Turvatest</h1>
        <div class="divider"></div>
        <p>Siin saad saata oma töö turvatestimiseks teistele õpilastele</p>
        <p>Oma kirjutatud ja töötava lahenduse siia saatmise eest saab 2 lisapunkti.</p>
        <p>Võib saata nii praktikumides tehtud lehti, kodust projekti kui muud aine raames tehtut. Oluline, et rakendus oleks funktsionaalselt toimiv!</p>
        <div class="section">
            <h2>Saada oma töö</h2>
            <form method="POST">
                <table>
                    <tr>
                        <td><h5>Sinu nimi:</h5></td>
                        <td><input type="text" name="nimi" required /></td>
                    </tr>
                    <tr>
                        <td><h5>Viide töö versioonihaldusele:</h5></td>
                        <td><input type="url" name="git" required /></td>
                    </tr>
                    <tr>
                        <td><h5>Link töötavale rakendusele:</h5></td>
                        <td><input type="url" name="link" required /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="saada!" class="waves-effect waves-light btn" /></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="section">
            <h2>Saadetud tööd</h2>
            <table class="striped">
                <tr><th>Nimi</th><th>Versioonihaldus</th><th>Töötav demo</th></tr>
                <?php include('salvesta.php'); ?>
                <?php include('esitatud.html'); ?>
            </table>
        </div>
    </div>
</body>
</html>
