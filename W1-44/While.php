<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style='margin-left: 800px;color:red;margin-top: 10px'>
     <?php
        echo "<H1 style='color:purple'> W1-Piyawat Hombunmee BIT.2/3 No.44 </H1>";
    ?>

    <button><a href="index.php">For Loop</a></button>

    <form action="">
        <label for=""><H2 style='color:green'>เลขแม่สูตรคูณ</H2></label><br>
        <input style='width: 40%;height: 50px;margin-top: 20px' type="number" name="num" id="">
        <br>
        <input style='width: 80px;height: 40px;color:green;margin-left: 35%;margin-top: 40px' type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "<h2>สูตรคูณเเม่ ".$num."</h2>";

            $i = 1;
            while ($i <= 12) {
                echo $num . "x" . $i . " = " . $num * $i . "<br>";
                $i ++;
            }
            
            
        }
    ?>
</body>
</html>