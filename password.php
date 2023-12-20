<?php include 'dates.php'?>
<style>
<?php 
include'./style.css';
?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <div class="box">
            <div id="lenght">la tua password è lunga : <?php echo $lunghezza ?></div>
            <div id="password">
                <?php 
                    function gen($lenght,$simboli_lunghezza,$caratteri){
                        $arreyPass="";
                        for ($i=1; $i <= $lenght ; $i++) { 
                            $posizione = rand(0,$simboli_lunghezza);
                            $carattere = $caratteri[$posizione];
                            $arreyPass .= $carattere;
                        };
                        return  $arreyPass;
                    }
                    echo "La tua password è: ";
                    $final=gen($lunghezza,$simboli_lunghezza,$caratteri);
                    echo $final;
                    
                    ?>
            </div>
        </div>
    </div>
    <a href="form.php">torna nella pagina principale</a>
</body>
</html>