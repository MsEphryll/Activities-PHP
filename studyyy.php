<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Checking if a word is a palindrome:</h3>

  <form action="" method="post">
  <label for="">Enter any word: </label> <br>
  <input type="text" name="str"> 
  <button type='submit'>submit</button><br><br>
  </form>

  <?php
    if (isset($_POST['str'])) {
      $str = $_POST['str'];

    $len = strlen($str);
    $empt = "";

    for ($i = $len - 1; $i >= 0; $i--) {
      $empt .= $str[$i];
    }

    // comparing
    if ($str == $empt) {
      echo  "====$str is a palindrome.====";
    } else {
      echo "====$str is not a palindrome.====";
    }

    echo  "<br><br>";
    ?>

    <?php
    echo "<h3>Printing using foreach in an array:</h3>";
    $array = array("april", "zoro", "luffy");
    foreach ($array as $solo) {
      echo $solo . "<br>";
    }

    echo  "<br><br>";
  }
  ?>

  <!-- FOR CALCULATOR -->
  <h3>Simple Calculator:</h3>
  <form action="" method="post">
    <label for="">Enter First Number:</label><br>
    <input type="number" name="num1"><br>
    <label for="">Operation</label><br>
    <input type="text" name='operation'><br>
    <label for="">Enter Second Number:</label><br>
    <input type="number" name="num2"><br>
    <button>Calculate</button><br><br>
    
  </form>

  <?php
  echo "";

  if(isset($_POST['num1']) && $_POST['num2'] && $_POST['operation']) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['operation'];

    if($oper ==  '+') {
      echo $num1 + $num2;
    } else if ($oper == '-'){
      echo  $num1 - $num2;
    } else if ($oper == "*"){
      echo $num1 * $num2;
    } else if ($oper == "/") {
      echo  $num1 / $num2;
    }
  } else {
    echo "invalid";
  }


  echo "<br><br>";

  echo "<h3>Half Triangle: </h3>";

  $num = 6;
  $star = '<br>';

  for($i = 1; $i <= $num; $i++){
    $star .= "* ";
    echo $star;
  }

  echo "<h3>Half Diamond: </h3>";

  $num = 6;
  $star = '<br>';

  for($i = 1; $i <= $num; $i++){
    $star .= "* ";
    echo $star;
  }
  echo "<br>";
  $num2 = 6;
  $star2 = "<br>";
  for ($i = $num2; $i >= 1; $i--) {
    for ($j = 0; $j < $i ; $j++) {
      echo "* ";
    }
    echo "<br>";
  }


  # using print
  $txt = "hello";
  print $num + $num2;

  print "<h1>" . $txt . "</h2>";

  # using if statements
  $says = "Hi";

  if ($says != "Hello"){
    $says = "Hello";
    echo $says;
  } else {
    echo $says;
  }

  echo "<br><br>";

  echo "<h3>Using foreach loop</h3>";

  // foreach
  $pairs = array("april" => "zoro", "luffy" => "boa", "anos voldigoad" => "april");

  foreach ($pairs as $a => $b) {
    echo "$a : $b <br>";
  }
  ?>


 
</body>
</html>