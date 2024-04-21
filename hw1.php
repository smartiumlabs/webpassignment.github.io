<!DOCTYPE html>
<html>
    <head>

    </head>
    
    <body>
        <form method="post" action="">
            <label for='nb'>n : </label>
            <input type="number" name='nb' id='nb'>
            <br><br>
            <input type="submit" value="출력">
        </form>
       <?php
        if(isset($_POST['nb'])){
            $n = $_POST['nb'];
            $plus = 0;
            $times = 1;
            for ($i = 1; $i<$n+1; $i++) {
                echo "$i ";
                $plus = $plus + $i;
                $times = $times * $i;
            } 
            echo "<br>$n 까지 합은 : $plus";
            echo "<br>$n 까지 곱은 : $times";
        }
        ?>
    </body>
</html>