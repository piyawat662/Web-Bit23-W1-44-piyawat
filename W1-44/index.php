<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมแม่สูตรคูณ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Sarabun', sans-serif;
        }
        body {
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        h1 {
            color: #2b6cb0;
            font-size: 24px;
            margin-bottom: 20px;
        }
        h2 {
            color: #2f855a;
            font-size: 20px;
            margin-top: 0;
        }
        /* ตกแต่งปุ่มลิงก์ด้านบน */
        .btn-nav {
            margin-bottom: 20px;
        }
        .btn-nav a {
            text-decoration: none;
            color: white;
            background-color: #4a5568;
            padding: 10px 20px;
            border-radius: 8px;
            transition: 0.3s;
            display: inline-block;
        }
        .btn-nav a:hover {
            background-color: #2d3748;
        }
        /* ตกแต่งฟอร์ม */
        input[type="number"] {
            width: 100%;
            height: 45px;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #cbd5e0;
            border-radius: 8px;
            outline: none;
            text-align: center;
            transition: 0.3s;
        }
        input[type="number"]:focus {
            border-color: #4299e1;
        }
        input[type="submit"] {
            width: 100%;
            height: 45px;
            background-color: #48bb78;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #38a169;
        }
        /* ตกแต่งผลลัพธ์สูตรคูณ */
        .result-box {
            margin-top: 25px;
            padding: 20px;
            background-color: #f7fafc;
            border-left: 5px solid #4299e1;
            border-radius: 4px;
            text-align: left;
            display: inline-block;
            min-width: 200px;
        }
        .result-line {
            font-size: 18px;
            color: #4a5568;
            margin: 5px 0;
            font-weight: 500;
        }
    </style>
</head>
<body>   

    <div class="container">
        <?php
            echo "<h1>W1-Piyawat Hombunmee BIT.2/3 No.44</h1>";
        ?>
        
        <div class="btn-nav">
            <a href="While.php">While Loop</a>
        </div>

        <form action="" method="GET">
            <h2>เลขแม่สูตรคูณ</h2>
            <input type="number" name="num" placeholder="กรอกแม่สูตรคูณที่ต้องการ" required>
            <input type="submit" value="คำนวณ">
        </form>

        <?php
            if(isset($_GET["num"]) && $_GET["num"] != ""){
                $num = intval($_GET["num"]);

                echo "<h2 style='margin-top: 25px; color:#2b6cb0;'>สูตรคูณแม่ ".$num."</h2>";
                echo "<div class='result-box'>";
                
                for($i = 1; $i <= 12; $i++){
                    // จัดข้อความผลลัพธ์ให้อยู่ในคลาสที่ตั้งไว้
                    echo "<div class='result-line'>" . $num . " x " . $i . " = " . ($num * $i) . "</div>";
                }
                
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>