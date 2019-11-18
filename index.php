<html>
    <head>
        <title>Fedor Ryzhov IU4-12 РАБОТА НАД ОШИБКАМИ</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <h3>Fedor Ryzhov IU4-12</h3>
        <h3>РАБОТА НАД ОШИБКАМИ</h3>
        Задание 1
        <table border=1>
        <?php
            for($a=1; $a<11; $a++){
            echo '<tr>';
            for($b=1; $b<11; $b++){
                echo '<td>' . $a*$b . '</td>';   
                }
            echo '<tr>';
            }
        ?>
        </table>

        Задание 2
        <form action="" method="get">
        <p>Введите число<br>
        <input type="text" name="c">    
        </p>
        <p>
        <input type="radio" name="d" value="kv"> Квадрат<br>
        <input type="radio" name="d" value="kb"> Куб<br>
        <input type="radio" name="d" value="kr"> Квадратный корень<br>
        <input type="submit">
        </p>
        </form>
        <?php
            if ($_GET['d'] == "kv"){
                echo $_GET['c'] * $_GET['c'];
            }
            if ($_GET['d'] == "kb"){
                echo $_GET['c'] * $_GET['c'] * $_GET['c'];
            }
            if ($_GET['d'] == "kr"){
                echo sqrt($_GET['c']);
            }
        ?>
    </body>
</html>
