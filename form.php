<!-- style -->
<style>
<?php include './style.css'; ?>
</style>
<script>
    <?php include './script.js' ?>
</script>
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

                    <div>
                        <span>
                            numeri
                        </span>
                        <input type="checkbox" id="numeri">
                    </div>

                    <div  >
                        <span>
                            caratteri
                        </span>
                        <input type="checkbox" id="caratteri">
                    </div>

                    <div>
                        <span>
                            maiuscole
                        </span>
                        <input type="checkbox" id="maiuscole">
                    </div>

                    <div>
                        
                        <span>
                            minuscole
                        </span>
                        <input type="checkbox" id="minuscole">

                    </div>
            </div>
        </div>

    </div>
</body>
</html>