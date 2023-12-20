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
            <div id="lenght">la tua password è lunga : <?php echo $password ?></div>
            <div id="password">
                <?php 
                
                        for ($i=1; $i <= $password ; $i++) { 
                            $posizione = rand(0,$simboli_lunghezza);
                            $carattere = $caratteri[$posizione];
                            array_push($arreyPass,$carattere);

                        };
                        
                        echo "la password é: " ;
                        
                        foreach ($arreyPass as $element) {
                            echo $element;
                        }; 
                    ?>
            </div>
        </div>
    </div>
    <a href="form.php"></a>
</body>
</html>