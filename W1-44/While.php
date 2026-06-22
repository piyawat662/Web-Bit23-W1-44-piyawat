<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมสูตรคูณ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f4f7f6;
            color: #333;
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
            box-sizing: border-box;
            text-align: center;
            margin-top: 20px;
        }

        h1 {
            color: #6f42c1; /* สีม่วงตามเดิมแต่โทนพาสเทลขึ้น */
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        h2 {
            color: #28a745; /* สีเขียวที่ดูซอฟต์ลง */
            margin-top: 0;
        }

        /* ตกแต่งปุ่มลิงก์ */
        .btn-link {
            display: inline-block;
            background-color: #6c757d;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: 0.3s;
            margin-bottom: 20px;
        }
        .btn-link:hover {
            background-color: #5a6268;
        }

        /* ตกแต่งฟอร์ม */
        .form-group {
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1.1rem;
            box-sizing: border-box;
            transition: 0.3s;
            text-align: center;
        }

        input[type="number"]:focus {
            border-color: #28a745;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px;
            font-size: 1.1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        /* ตกแต่งผลลัพธ์สูตรคูณ */
        .result-box {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px dashed #eee;
        }

        .table-multiply {
            width: 100%;
            margin-top: 15px;
            border-collapse: collapse;
        }

        .table-multiply td {
            padding: 10px;
            font-size: 1.2rem;
            border-bottom: 1px solid #f1f1f1;
        }

        .table-multiply tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .highlight {
            font-weight: bold;
            color: #6f42c1;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>W1-Piyawat Hombunmee BIT.2/3 No.44</h1>

        <a href="index.php" class="btn-link">For Loop</a>

        <form action="" method="GET">
            <div class="form-group">
                <h2>เลขแม่สูตรคูณ</h2>
                <input type="number" name="num" placeholder="ใส่ตัวเลขที่นี่..." required value="<?php echo isset($_GET['num']) ? htmlspecialchars($_GET['num']) : ''; ?>">
            </div>
            <input type="submit" value="คำนวณ">
        </form>

        <?php
            if(isset($_GET["num"]) && $_GET["num"] !== ""){
                $num = intval($_GET["num"]);

                echo "<div class='result-box'>";
                echo "<h2>สูตรคูณแม่ " . $num . "</h2>";
                echo "<table class='table-multiply'>";

                $i = 1;
                while ($i <= 12) {
                    echo "<tr>";
                    echo "<td>" . $num . " &times; " . $i . "</td>";
                    echo "<td>=</td>";
                    echo "<td class='highlight'>" . ($num * $i) . "</td>";
                    echo "</tr>";
                    $i++;
                }

                echo "</table>";
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>