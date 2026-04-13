<h1 style="color: green">Sucesso filme: <?= $_GET['filme'] ?></h1>

<?php
    $arquivo = file_get_contents(__DIR__ . "/arquivo.json");
    $array = json_decode($arquivo, true);
    echo "<pre>";
    //var_dump($array);
    echo "<pre>";

    echo "<td>";
    foreach($array as $key => $value) {
        foreach($value as $key2 => $value2) {
            echo "<th>$key2- $value2 <br></th>";
        }
        echo "<hr><br>";
    }
    echo "</td>";
    
?>

<br>
<a href="index.php">Voltar</a>