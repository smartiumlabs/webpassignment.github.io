<!DOCTYPE>
<html>
    <head>

    </head>
    
    <body>
        <form method="post" action="">
            <label for="number1">n : </label>
            <input type="number" name="number1" id="number1">
            <br><br>
            <input type="submit" value="출력">
        </form>
        <?php
        if(isset($_POST["number1"])){
            $n = $_POST["number1"];
            $pn_array = array();
            $pn_array[0] = 1;
            $pn_array[1] = 1;
            for($i = 0; $i <= $n; $i++){
                $pn_array[$i+2] = $pn_array[$i] + $pn_array[$i+1];
                $pn_ratio = $pn_array[$i+1] / $pn_array[$i];    
                echo $pn_array[$i] . " " . $pn_array[$i+1] . " 비율 : " . $pn_ratio . " <br>";
            }
        }
        ?>
    </body>
</html>