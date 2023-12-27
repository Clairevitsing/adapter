<?php

require_once 'src/controller/MjController.php';
require_once 'src\Entity\Mj.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Game Result</title>
</head>
<body>

    <div class="result-container">

        <?php

        //var_dump($result);

        if (is_array($result)) {
            echo "<p>The game master used an item <strong>{$result['object']}</strong> and achieved a score of <strong>{$result['value']}</strong>.</p>";

            if ($result['success']) {
                echo "<p class='success'>The score is above the criteria, it's a success!</p>";
            } else {
                echo "<p class='failure'>The score is below the criteria, it's a failure!</p>";
            }
        } else {
            echo "<p class='unexpected'>Unexpected result type: " . gettype($result) . ".</p>";
            echo "<pre>";
            var_dump($result);
            echo "</pre>";
        }
        ?>

    </div>

</body>
</html>



