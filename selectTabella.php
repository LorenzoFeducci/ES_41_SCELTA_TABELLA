<?php
    include('connessione.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tabella = $_GET["scelta"];
        $sql = "SELECT * FROM $tabella";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
    
            }
        } else {
            echo "<p>Non è stato trovato niente</p>";
        }


    ?>
</body>
</html>