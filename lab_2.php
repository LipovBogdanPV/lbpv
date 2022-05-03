<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лобараторні з WEB</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <div class="continer">
        <nav class="nav-a">
            <a href="/">Головна</a>
            <a href="lab_1.php">Лобараторна 1</a>
            <a href="lab_2.php">Лобараторна 2</a>
            <a href="lab_3.php">Лобараторна 3</a>
        </nav>
        <p>Варіант 5-8</p>
        <p>Завдання 1</p>
        <?php
        for ($i = 0; $i < 5; $i++){
            for ($j = 0; $j < 7; $j++)
                echo "#";
        echo "<br>";
        }
        ?> 
        <?php
        #for ($i = 0; $i < 5; $i++){
        #    for ($j = 0; $j < $i; $j++)
        #        echo "-";
        #    for ($j = 5; $j > $i; $j--)
        #        echo "*";
        #echo "<br>";
        ?> 
        <p>Завдання 2</p>
        <?php
        for ($i=0; $i<1; $i++){
            for ($j=0; $j<8; $j++)
                echo"0";
            for ($j=0; $j<6; $j++)
                echo"#";
        echo"<br>";
        }
        for ($i=0; $i<1; $i++){
            for ($j=0; $j<8; $j++)
                echo"1";
            for ($j=0; $j<6; $j++)
                echo"#";
        echo"<br>";
        }
        for ($i=0; $i<1; $i++){
            for ($j=0; $j<8; $j++)
                echo"2";
            for ($j=0; $j<6; $j++)
                echo"#";
        echo"<br>";
        }
        for ($i=0; $i<1; $i++){
            for ($j=0; $j<8; $j++)
                echo"3";
            for ($j=0; $j<6; $j++)
                echo"#";
        echo"<br>";
        }
        for ($i=0; $i<1; $i++){
            for ($j=0; $j<8; $j++)
                echo"4";
            for ($j=0; $j<6; $j++)
                echo"#";
        echo"<br>";
        }
        for ($i=0; $i<1; $i++){
            for ($j=0; $j<8; $j++)
                echo"5";
            for ($j=0; $j<6; $j++)
                echo"#";
        echo"<br>";
        }
        ?>
        <p>Завдання 3</p>
        <?php
        for ($i=0; $i<5; $i++){
            for($j=0; $j<1; $j++)
                echo"########76543210@@@@@";
        echo"<br>";
        }
        ?>
        <p>Завдання 4</p>
        <?php
        for ($i=0; $i<1; $i++){
            for ($j=0; $j<1; $j++)
                echo"----1<br>
                ---12*<br>
                --123**<br>
                -1234***<br>
                12345**** ";
        echo"<br>";
        }

        ?>
        <p>Завдання 5</p>
        <?php
        for ($i=0; $i<1; $i++){
            for ($j=0; $j<1; $j++)
                echo"543210000<br>
                -5432111<br>
                --54322<br>
                ---543<br>
                ----5 ";
        echo"<br>";
        }
        ?>
    </div>
</body>
</html>