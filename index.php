
<html>
 <head>
   <style>
   .error {color: #FF0000;}
   </style>

   <title>PHP Test</title>
 </head>
 <body>
   <?php
   // class TestClass {
   //
   //   public $field1 = 'default';
   //
   //   function __construct($field1 = false, $f=false) {
   //     if($field1) {
   //       $this->field1 = $field1;
   //     }
   //   }
   // }
   //
   // $obj1 = new TestClass('abc');
   // echo "<br>";
   //
   // var_dump($obj1->field1);
   //
   // echo "<br>";
   // var_dump($obj1->field2);
   //
   // echo "<br>";
   // var_dump($obj1);
   //
   // echo "<br><br><br>Foreach:<br><br>";
   //
   //
   // $colors = array("red", "green", "blue", "yellow");
   // foreach ($colors as $x) {
   // 	echo "$x ";
   // }
   //
   // echo "<br>";
   //
   // echo "Colors count: " . count($colors);
   //
   // echo "<br><br>";

   echo $_SERVER['PHP_SELF'];
   echo "<br>";
   echo $_SERVER['SERVER_NAME'];
   echo "<br>";
   echo $_SERVER['HTTP_HOST'];
   echo "<br>";
   echo $_SERVER['HTTP_REFERER'];
   echo "<br>";
   echo $_SERVER['HTTP_USER_AGENT'];
   echo "<br>";
   echo $_SERVER['SCRIPT_NAME'];
   ?>


   <?php
   // define variables and set to empty values
   $nameErr = $emailErr = $genderErr = $websiteErr = "";
   $name = $email = $gender = $comment = $website = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["name"])) {
       $nameErr = "Name is required";
     } else {
       $name = test_input($_POST["name"]);
     }

     if (empty($_POST["email"])) {
       $emailErr = "Email is required";
     } else {
       $email = test_input($_POST["email"]);
     }

     if (empty($_POST["website"])) {
       $website = "";
     } else {
       $website = test_input($_POST["website"]);
     }

     if (empty($_POST["comment"])) {
       $comment = "";
     } else {
       $comment = test_input($_POST["comment"]);
     }

     if (empty($_POST["gender"])) {
       $genderErr = "Gender is required";
     } else {
       $gender = test_input($_POST["gender"]);
     }
   }

     function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }
   ?>

  <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Website: <input type="text" name="website"><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br>

    <input type="submit">
    <form class="" action="index.html" method="post">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  </form>


  <h2>PHP Form Validation Example</h2>
  <p><span class="error">* required field</span></p>
  <form method="post" action="welcome.php<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>



 </body>
</html>
