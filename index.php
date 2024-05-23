<?php
include __DIR__ . "/partials/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Newsletter subscription</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Iscrizione alla newsletter</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="mt-4 d-flex flex-column gap-3">
            <div class="form-group">
                <label for="text">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Inserisci email, esempio: pietrorossi@email.com">

                <?php if (isset($_POST['email'])) : ?>
                    <?php if (!validateEmail($_POST['email'])) : ?>
                        <small class="text-danger">Email non valida, prego inserire una mail valida</small>
                    <?php else : ?>
                        <small class="text-success">Email valida!</small>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
            <button type="submit" class="btn btn-primary">Registrati</button>
        </form>

    </div>


</body>

</html>