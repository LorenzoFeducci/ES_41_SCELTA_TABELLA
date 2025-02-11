<?php
    include('connessione.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: solid black 2px;
            width: 75%;
            border-collapse: collapse;
            margin: auto;
        }

        tr, td, th{
            border: solid black 2px;
        }
    </style>
</head>
<body>
    <table>
    <?php
        $tabella = $_POST["scelta"];
        $sql = "SELECT * FROM $tabella";
        $result = $conn->query($sql);

        if($tabella == "attori"){
            ?>
                <tr>
                    <th>CODICE ATTORE</th>
                    <th>NOME</th>
                    <th>ANNO DI NASCITA</th>
                    <th>NAZIONALITA'</th>
                </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>"; 
                        echo "<td> " . $row["CodAttore"] . "</td>";  
                        echo "<td> " . $row["Nome"] . "</td>";
                        echo "<td> " . $row["AnnoNascita"] . " </td>";
                        echo "<td> " . $row["Nazionalita"] . " </td>";
                    echo "</tr>";
                }
            } else {
                echo "<p>Non è stato trovato niente</p>";
            }

        }else if($tabella == "film"){
            ?>
                <tr>
                    <th>CODICE FILM</th>
                    <th>TITOLO</th>
                    <th>ANNO DI PRODUZIONE</th>
                    <th>NAZIONALITA'</th>
                    <th>REGISTA</th>
                    <th>GENERE</th>
                </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>"; 
                        echo "<td> " . $row["CodFilm"] . "</td>";  
                        echo "<td> " . $row["Titolo"] . "</td>";
                        echo "<td> " . $row["AnnoProduzione"] . " </td>";
                        echo "<td> " . $row["Nazionalita"] . " </td>";
                        echo "<td> " . $row["Regista"] . " </td>";
                        echo "<td> " . $row["Genere"] . " </td>";
                    echo "</tr>";
                }
            } else {
                echo "<p>Non è stato trovato niente</p>";
            }
        }else if($tabella == "recensioni"){
            ?>
                <tr>
                    <th>ID RECENSIONE</th>
                    <th>VOTO</th>
                    <th>CODICE FILM</th>
                    <th>USERNAME</th>
                </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>"; 
                        echo "<td> " . $row["IDRecensione"] . "</td>";  
                        echo "<td> " . $row["Voto"] . "</td>";
                        echo "<td> " . $row["CodFilm"] . " </td>";
                        echo "<td> " . $row["Username"] . " </td>";
                    echo "</tr>";
                }
            } else {
                echo "<p>Non è stato trovato niente</p>";
            }
        }else{
            ?>
                <tr>
                    <th>CODICE SALA</th>
                    <th>POSTO</th>
                    <th>NOME</th>
                    <th>CITTA'</th>
                    <th>DATA DI APERTURA</th>
                </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>"; 
                        echo "<td> " . $row["CodSala"] . "</td>";  
                        echo "<td> " . $row["Posti"] . "</td>";
                        echo "<td> " . $row["Nome"] . " </td>";
                        echo "<td> " . $row["Citta"] . " </td>";
                        echo "<td> " . $row["DataApertura"] . " </td>";
                    echo "</tr>";
                }
            } else {
                echo "<p>Non è stato trovato niente</p>";
            }
        }
    ?>
    </table>

    <br>
    
    <a href="invia.html">HOME</a>
</body>
</html>