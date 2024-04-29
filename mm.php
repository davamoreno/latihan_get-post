<!DOCTYPE html>
<head>
  <title>
    Abhi
  </title>
</head>
<body>
  <table border="1">
    <?php
      for ($i=1; $i <= 3;$i++) { 
        echo "<tr>";
        for ($j=1; $j <= 3; $j++) { 
          echo "<td> $i,$j";
        }
      };
    ?>
  </table>
      <br>
  <table border="1">
    <?php
    $b = 0;
      while ($b <= 2) {
        $b++;
        echo"<tr>";
        $e = 0;
        while ($e <= 2) {
          $e++;
          echo"<td> $b,$e";
        }
      };
    ?>
  </table>
 <br>
      <?php 
      $a = 1;
      while ($a <= 10) {
       echo $a;
       $a++; 
      };
      echo "<br>";
      $s = 1;
      do {
        echo $s;
        $s++; 
      } while ($s <= 10);
      ?>
      <br>
      <br>
      <?php
      function tanggal(){
        date_default_timezone_set("Asia/Makassar");
        echo "Time is " . date("Y/m/d/l");
      }
      function dateTime(){
        date_default_timezone_set("Asia/Makassar");
        echo "Time is " . date("H:i:sa");
      }
      function dateMktime(){
        date_default_timezone_set("Asia/Makassar");
        $d=mktime(13, 00, 1, 4, 22, 2024);      
        echo "Time is " . date("Y/m/d/l H:i:sa", $d);
      }
      function dateStrtotime(){
        $s = strtotime("13:10:01 April 22 2024");
        echo "Time is " . date("Y/m/d/l H:i:sa", $s);
        echo "<br> <br>";
        $i = strtotime("tommorow");
        echo "Time is " . date("Y/m/d/l H:i:sa", $i);
      }
      function tanggalPlusJam(){
        date_default_timezone_set("Asia/Makassar");
        echo "Time is " . date("Y/m/d/l H:i:sa");
      }
      function tanggalWhile(){
        $startDate = strtotime("d");
        $endDate = strtotime("+6 Month", $startDate);

        while ($startDate < $endDate) {
        echo date("M d", $startDate) . "<br>";
        $startDate = strtotime("+1 Month", $startDate);
        }
      } 
      echo "<br>";
      $d1=strtotime("27 Jun");
      $d2=ceil(($d1-time())/60/60/24);
      echo "There are " . $d2 ." days until ". date("M d ",$d1);
        tanggal();
      echo "<br> <br>";
        dateTime();
      echo "<br> <br>";
        dateMktime();
      echo "<br> <br>";
        dateStrtotime();
      echo "<br> <br>";
        tanggalPlusJam();
      echo "<br> <br>";
        tanggalWhile();
      echo "<br> <br>";
        echo strlen("Hello World!");
      echo "<br> <br>";
        $var1 = "Hello";
        $var2 = "hello";
        if(strtolower($var1) == strtolower($var2)) {
          echo "$var1 is equal to $var2";
        }
       else {
         echo "$var1 is not equal to $var2";
       }
      ?>
 <br>     
    <a style="text-decoration:none" href="if-else.php">></a>
</body>