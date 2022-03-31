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
        <h1>RIB Vérification</h1>
        <form action="valid.php" method="post">
            <div class="mb-3">
                <label for="bankcode" class="form-label">Code banque</label>
                <input type="number" name="bankcode" id="bankcode" class="form-control">
            </div>
            <div class="mb-3">
                <label for="agencycode" class="form-label">Code agence</label>
                <input type="number" name="agencycode" id="agencycode" class="form-control">
            </div>
            <div class="mb-3">
                <label for="account" class="form-label">Compte</label>
                <input type="text" name="account" id="account" class="form-control">
            </div>
            <div class="mb-3">
                <label for="key" class="form-label">Clé RIB</label>
                <input type="number" name="key" id="key" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>