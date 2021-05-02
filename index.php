<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Learning</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg-dark h1 text-white text-center p-4">Basic PHP Learning</div>
    <div class="container ms-3">
        <h2>การแสดงผล</h2>
        <div class="row ms-3">
            <?php
                echo "การแสดงผลแบบ echo เป็นแบบ void (นิยมใช้) <br>";
                print("การแสดงผลแบบ print เป็นแบบ return <hr>");

                // ตัวแปร
                $textname = "Arthur";
                $intage = 23;
                $score = "80";
                define("pass",50);

                echo "ชื่อ ".$textname." อายุ ".$intage."<br>";

                // เปลี่ยนชนิดตัวแปร
                echo "type ตัวแปร score ก่อนเปลี่ยน : ".gettype($score)."<br>";
                settype($score,"integer");
                echo "type ตัวแปร score ก่อนเปลี่ยน : ".gettype($score)."<br>";

                // ฟังก์ชันตัวแปร
                $score1;
                $score2 = 50;
                $score3 = null;
                $score4 = 80;
                echo "score 1 : ".isset($score1)."<br>";
                echo "score 2 = 50 : ".isset($score2)."<br>";
                echo "score 3 = null : ".isset($score3)."<br>";
                echo "score 4 = 80 : ".isset($score4)."<br>";
                unset($score2);
                echo "score 2 หลัง unset: ".isset($score2)."<br>";
                echo "score 1 empty : ".empty($score1)."<br>";
                echo "score 2 empty : ".empty($score2)."<br>";
                echo "score 3 empty : ".empty($score3)."<br>";
                echo "score 4 empty : ".empty($score4)."<br>";
                echo "score 3 is_null : ".is_null($score3)."<br>";
                echo "score 4 is_null : ".is_null($score4)."<br>";

                // ตัวแปร Superglobal
                // $GLOBALS     ทุกส่วนใช้งานได้
                // $_SERVER     เก็บค่าของ web server ที่กำลังทำงาน
                // $_GET        array เก็บค่าที่ส่งมากับ URL
                // $_POST       เก็บค่าที่ส่งมากับ form แบบ post method
                // $_ENV        เก็บการคั้งค่าของ server
                // $_SESSION
                // $_COOKIE
            
                // ตัวดำเนินการ เหมือนกับภาษาอื่น ๆ ทั่วไป (+ - * / > < == != etc)
                // เงื่อนไข เหมือนกับภาษาอื่น ๆ if else while do_while for (and &&, or ||, not !)
                // function เหมือนกับภาษาอื่น ๆ เช่น
                function sum($num1, $num2, $num3 = 20){
                    return $num1 + $num2 + $num3;
                }
                echo "รวม 2 เลข = ". sum(5,10);
            ?>
        </div>
        
    </div>
</body>
</html>