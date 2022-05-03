<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web - lab_1</title>
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
        <?php
        echo'<p>Завдання 1</p>';
        echo'<p class="text-center">Обчислити значення виразу</p>';
        $a=-4.46;
        $x=0.52;
        echo"<p>Дані <br>a=$a <br>x=$x</p>";
        $y=(log(pow($x,3))-$x*cos($x))/pow($a+$x,2);
        echo"<p>Результат <br>y=$y</p>";
        ?>
        <hr>
        <?php
        $a=5.46;
        $x=1.52;
        echo"<p>Дані <br>a=$a <br>x=$x</p>";
        $y=($a*sin(pow($x,2)))+(tan($x))/sqrt(exp(1));
        echo"<p>Результат<br>y=$y</p>";
        #echo exp(1)#Число e
        ?>
        <hr>
        <?php
        $a=-9.86;
        $x=0.56;
        echo"<p>Дані <br>a=$a <br>x=$x</p>";
        $y=log(pow($x,3))-$x*cos($x)/pow($a+$x,2);
        echo"<p>Результат<br>y=$y</p>";
        ?>
        <hr>
        <?php
        $a=-9.86;
        $x=0.56;
        echo"<p>Дані <br>a=$a <br>x=$x</p>";
        $y=log(pow($x,3))-$x*cos($x)/pow($a+$x,2);
        echo"<p>Результат<br>y=$y</p>";
        ?>
        <hr>
        <?php
         echo'<p>Завдання 2</p>';
         echo'<p class="text-center">Знайти добуток цифр даного натурального числа</p>';
         echo '<form action="lab_1.php" method="POST"> <input name="text" values="Число" type="text"> <input name="submit" value="Відправити"  type="submit"></form>';
         $nane =$_POST['text'];
         $x=$nane/2;
         echo"<p>x=$x</p>";
         ?>
        <hr>
        <?php
         echo'<p>Завдання 3</p>';
         echo'<p>Визначити число від’ємних і невід’ємних 
         елементів в одновимірному числовому масиві.</p>';
         $array = [55, 5, -81, -25];
         #for (int i=0; i<100; i++);
         
         $A = var_dump(count($array));
         $B = var_dump($array);
         echo"<p>Кількість додатніх чисел: $A</p>";
         echo"<p>Кількість відємних чисел: $B</p>"
         ?>
        <hr>
        <?php
         echo'<p>Завдання 4</p>';
         ?>
        <hr>
    </div>
</body>
</html>