<!-- style -->
<style>
<?php include './style.css'; ?>
</style>
<!-- contenuto -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <div>
            <div>
                <h1 id="titolo">Crea la tua password </h1>
            </div>
            <div>
                <p>Inserisci la giusta lunghezza</p>
            </div>
            <div>
                <form action="password.php" >
                    <input type="text" name="lenght" placeholder="lunghezza password">
                     <button type="submit">Invia</button>
                </form>
            </div>
        </div>

    </div>
</body>
</html>