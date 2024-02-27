<?php
$censura= $_POST['censura'];
$paragrafo= $_POST['paragrafo'];
$censura_paragrafo=str_replace($censura, '****', $paragrafo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>response-bad-words</title>
</head>
<body>
    <p>
        pargrafo inserito : 
        <?php
            echo $paragrafo
        ?>
        <p>
            il paragrafo inserito è lungo:<?php echo strlen($paragrafo) ?>
        </p>
        
    </p>
    <p>
        il pargrafo dopo la censura è:
        <?php
        echo $censura_paragrafo
        ?>
        <p>
            il paragrafo inserito è lungo:<?php echo strlen($censura_paragrafo) ?>
        </p>
    </p>
</body>
</html>