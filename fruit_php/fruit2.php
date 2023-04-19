<?php
    $low = $_POST['low']; // POST 방식으로 전달된 경우

    $fruit = array("사과"      => 100,
                    "배"       => 200,
                    "복숭아"   => 300,
                    "수박"     => 400,
                    "감"       => 500,
                    "토마토"   => 600,
                    "바나나"   => 700,
                    "키위"     => 800,
                    "파인애플" => 900,
                    "대추"     => 1000);

    print "가격이 ".$low."원 이하인 과일의 목록입니다.<hr>";
    print "<table border=1><tr><th>이름</th><th>가격</th>";
    foreach ($fruit as $name => $price){
        if($price <= $low){
            print "<tr><td>".$name."</td><td>".$price."</td></tr>";
        }
    }
    print "</table>";
?>