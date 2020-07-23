
<!DOCTYPE HTML>  
<html>
<body>  
<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $gender = $_REQUEST['gender'];
            $township = $_REQUEST['township'];
            $subject = $_REQUEST['subject'];
        }
    ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Phone: <input type="text" name="phone">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
 Township:
 <select name="township">
 <option>Kamaryut</option>
 <option>Hledan</option>
 </select>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  Subject:
  <input type="checkbox" name="subject[]" value="501">501
  <input type="checkbox" name="subject[]" value="502">502
  <input type="checkbox" name="subject[]" value="503">503
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h2>Your Input</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $phone;
            echo "<br>";
            echo $gender;
            echo "<br>";
            echo $township;
            echo "<br>";
            foreach($subject as $x){
              echo $x;
              echo "<br>";
          }
          ?>
</body>
</html>
