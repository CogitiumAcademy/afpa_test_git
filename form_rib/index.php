<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            if (isset($_GET["notif"])) {
                switch ($_GET["notif"]) {
                    case "ok": ?>

                        <div class="alert alert-success" role="alert">
                            RIB valide !
                        </div>

                        <?php
                        break;

                    case "nok": ?>

                        <div class="alert alert-danger" role="alert">
                            RIB non valide !
                        </div>

                        <?php
                        break;

                    default: ?>

                        <div class="alert alert-warning" role="alert">
                            Paramètre étrange !
                        </div>

                    <?php
                }
            }                    
        ?>
        <h1>RIB Vérification</h1>
        <form action="valid.php" method="post">
            <div class="mb-3">
                <label for="bankcode" class="form-label">Code banque</label>
                <input type="text" minlength="5" maxlength="5" pattern="[0-9]{5}" name="bankcode" id="bankcode" class="form-control">
            </div>
            <div class="mb-3">
                <label for="agencycode" class="form-label">Code agence</label>
                <input type="text" minlength="5" maxlength="5" pattern="[0-9]{5}" name="agencycode" id="agencycode" class="form-control">
            </div>
            <div class="mb-3">
                <label for="account" class="form-label">Compte</label>
                <input type="text" minlength="11" maxlength="11" pattern="[0-9a-zA-Z]{11}" name="account" id="account" class="form-control">
            </div>
            <div class="mb-3">
                <label for="key" class="form-label">Clé RIB</label>
                <input type="text" minlength="2" maxlength="2" pattern="[0-9]{2}" name="key" id="key" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>