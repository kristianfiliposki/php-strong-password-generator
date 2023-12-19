    <?php 
       
       $password = $_GET["lenght"];
        $simboli = [ 
        "minuscole" => "abcdefghijklmnopqrstuvwxyz",
        "maiuscole" => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
        "numeri" => '1234567890',
        "caratteri_speciali" => '!?~@#-_+<>[]{}',
        ];
        $caratteri = $simboli["minuscole"] . $simboli["maiuscole"] . $simboli["numeri"] . $simboli["caratteri_speciali"];
        $simboli_lunghezza = strlen($caratteri) - 1; 


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php echo $password ?></div>
    <div>
        <?php 
            function gen ($caratteri, $simboli_lunghezza ,$lenght){
                for ($i=0; $i <= $password ; $i++) { 
                    $posizione = rand(0,$simboli_lunghezza);
                    echo $caratteri[$posizione];
                }
            }
            echo gen($caratteri,$simboli_lunghezza,$password)
            ?>
    </div>
    <a href="form.php"></a>
</body>
</html>