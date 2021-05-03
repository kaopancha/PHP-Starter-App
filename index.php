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
                echo "<hr>";

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
                echo "<hr>";

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
                // include require จะโหลดไฟล์มาทำงาน ต่างกันที่ถ้าไม่เจอไฟล์ include เตือนแล้วทำงานอื่นต่อ require จะเตือนแล้วหยุดทำงาน
                // function เหมือนกับภาษาอื่น ๆ เช่น
                // ตัวแปร global คือ ประกาศไว้นอกฟังก์ชัน local คือ ประกาศในฟังก์ชัน

                function sum($num1, $num2, $num3 = 20){
                    return $num1 + $num2 + $num3;
                }
                echo "รวม 2 เลข = ". sum(5,10) ."<br>";

                // สร้าง array แบบเดี่ยว
                $number = array(10,20,30);
                for($i=0; $i < count($number); $i++){
                    echo "array ที่ ". $i ." = ". $number[$i] ."<br>";
                }
                echo "<hr>";

                // แบบจับคู่ key=>value
                $employee = array("emp01"=>"Arthur", "emp02"=>"Bremerton", "emp03"=>"Catherine", "emp04" => "Bremerton");
                echo $employee["emp03"];
                echo "<hr>";

                // ใช้ range สร้าง array แบบระบุช่วง
                $evenNumber = range(2,20,2);
                print_r($evenNumber);
                echo "<hr>";

                // แบบ []
                $grade = ["A", "B", "C", "D", "E"];

                // ใช้ for
                for($i=0; $i < count($grade); $i++){
                    $score = 80 - ($i*10);
                    echo "คะแนน ". $score ." => ". $grade[$i] ."<br>";
                }
                // ใช้ while
                while($item=each($employee)){
                    echo $item["key"]."=>".$item["value"]."<br>";
                }

                // while ฟังก์ชัน list
                while(list($key,$value) = each($employee)){
                    echo $key."=>".$value."<br>";
                }

                // ใช้ foreach
                foreach($grade as $item){
                    echo $item."<br>";
                }

                // array 2 มิติ
                $product = array(
                    array("ผัก","vegetable"),
                    array("ผลไม้","fruit")
                );
                echo "<hr>";

                for($row=0; $row < count($product); $row++){
                    echo "<br>ชื่อสินค้า ";
                    for($column=0; $column < count($product[$row]); $column++){
                        echo " ".$product[$row][$column];
                    }
                }
                echo "<hr>";
                foreach($product as $pro){
                    echo "ชื่อสินค้า ".$pro[0]." ".$pro[1]."<br>";
                }
                echo "<hr>";

                // เพิ่มสมาชิก array
                $avengers = ["Ironman", "Captain America", "Thor", "Spiderman", "Hawkeye"];
                echo "<h5> array ตั้งต้น </h5>";
                print_r($avengers);

                array_push($avengers, "Hulk");
                echo "<h5> push Hulk </h5>";
                print_r($avengers);

                array_unshift($avengers, "Doctor Strange");
                echo "<h5> unshift Doctor Strange </h5>";
                print_r($avengers);

                array_pop($avengers);
                echo "<h5> pop </h5>";
                print_r($avengers);

                array_shift($avengers);
                echo "<h5> shift </h5>";
                print_r($avengers);

                // ลบตำแหน่ง 2 จำนวน 1 ค่า
                array_splice($avengers,0,2);
                echo "<h5> splice 0,2 </h5>";
                print_r($avengers);

                // เพิ่มตำแหน่งที่ 1
                array_splice($avengers,1,0,"Antman");
                echo "<h5> spice 1,0,Antman </h5>";
                print_r($avengers);
                
                // sort() น้อยไปมาก rsort() มากไปน้อย
                sort($avengers);
                echo "<h5> sort </h5>";
                print_r($avengers);
                rsort($avengers);
                echo "<h5> rsort </h5>";
                print_r($avengers);

                // สลับที่
                shuffle($avengers);
                echo "<h5> shuffle </h5>";
                print_r($avengers);

                // เรียงย้อนกลับ ใส่ใน array ใหม่
                $reAvengers = array_reverse($avengers);
                echo "<h5> array_reverse </h5>";
                print_r($reAvengers);

                //เรียงแบบจับคู่ 
                asort($employee);
                echo "<h5> asort </h5>";
                print_r($employee);
                arsort($employee);
                echo "<h5> arsort </h5>";
                print_r($employee);
                echo "<hr>";

                // function เกี่ยวกับ index value
                $emp_keys = array_keys($employee);
                $emp_values = array_values($employee);
                $emp_flip = array_flip($employee);
                $emp_unique = array_unique($employee);
                
                echo "<h5> ดึง keys </h5>";
                print_r($emp_keys);
                echo "<h5> ดึง values </h5>";
                print_r($emp_values);
                echo "<h5> สลับ key กับ value </h5>";
                print_r($emp_flip);
                echo "<h5> ลบค่าซ้ำ </h5>";
                print_r($emp_unique);
                echo "<hr>";

                // ค้นหา key และ value
                if(array_key_exists("emp04",$employee)){
                    echo "พบ key emp04 ใน employee <br>";
                }
                if(in_array("Arthur",$employee)){
                    echo "พบ value Arthur ใน employee";
                }
                echo "<hr>";

                // รวมอาเรย์ array_merge(ถ้ามีกำหนด key แล้วซ้ำ จะนำชุดหลังมาทับชุดแรก) 
                // array_merge_recursive(ถ้า key ซ้ำจะจับรวมทำเป็น array อีกที เช่น [price] => Array([0]=>500 [1]=>1000))
                // array_combine array ก้อนแรกเป็น key ก้อนสองเป็น value
                echo "<h5>การรวม Array</h5>";
                $newAvengers = ["Scarletwitch", "Starlord", "Captain Marvel"];
                $resultAvengers = array_merge($avengers, $newAvengers);
                print_r($resultAvengers);
                echo "<br>";

                $enAnimal = ["Ant", "Bird", "Cat"];
                $thAnimal = ["มด", "นก", "แมว"];
                $resultAnimal = array_combine($enAnimal, $thAnimal);
                print_r($resultAnimal);
            ?>
        </div>
        
    </div>
</body>
</html>