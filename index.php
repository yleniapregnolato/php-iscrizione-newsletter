<?php 


if (isset($_POST["emails"])) {
    $user_email = $_POST["emails"];
    // var_dump($user_email);
    // controllo se nella email sono presenti ".@"
    if (str_contains($user_email, '.') && str_contains($user_email, '@')) {
        $valid = "Email valida";
    } else {
        $error = "Email non valida";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /bootstrap -->
</head>

<body>

    <div class="container m-5">
        <div class="row">
            <div class="col-5">
                <!-- stampa del controllo dell'inserimento della email -->
                <?php if (isset($valid)) { ?>
                <div class="alert alert-success">
                    <?php echo $valid; ?>
                </div>
                <?php } ?>

                <?php if (isset($error)) { ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
                <?php } ?>
                <!-- /stampa del controllo dell'inserimento della email -->
                <!-- form -->
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="emails" class="form-label">Inserisci la tua email</label>
                        <input type="text" class="form-control" id="emails" aria-describedby="emailHelp" name="emails">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- /form -->
            </div>
        </div>
    </div>

</body>

</html>