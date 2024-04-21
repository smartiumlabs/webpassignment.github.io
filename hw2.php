<!DOCTYPE>
<html>
    <head>

    </head>
    
    <body>
        <form method="post" action="">
            <label for="nb1">n : </label>
            <input type="number" name="nb1" id="nb1">
            <br><br>
            <input type="submit" value="출력">
        </form>
        <?php
        if(isset($_POST["nb1"])){
            $n = $_POST['nb1'];
            $data = array();
            for($i = 0; $i<=$n; $i++) {
                $data[$i] = rand(10,100);
                echo "$data[$i] ";
                sort($data);
            }
            echo "<br>";
            for($j = 0; $j <= $n; $j++){
                echo "$data[$j] ";
            }
        }
        ?>
    </body>
</html>