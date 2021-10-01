<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
// define variables and set to empty values
$nameErr = $dobErr = $emailErr = $genderErr = $websiteErr = $bgErr= $degErr="";
$name = $email = $gender = $comment = $website = $dob = $bg= $deg="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  
  if (str_word_count($_POST["name"]) > 2) {
    $nameErr = "Max 2 words only";
  } 
  
  else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-'. ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name = "";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email = "";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
      $website = "";
    }
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
  if (empty($_POST["dob"])){
    $dobErr="Date of birth is required";
  }
  else {
    $dobErr = "" ;
    $dob = $_POST["dob"];
  }
  if(isset($_POST['deg'])){
    if (sizeof($_POST["deg"])<2){
    $degErr="At least two 2 field is required";
    }else{
    $degErr="";
    $deg=$_POST['deg'];
    }
  $degErr="At least 2 field is required";
  }
  if (empty($_POST['bg'])){
    $bgErr="Blood group is requied";
  } else {
    $bgErr="";
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date of birth:<input type="date" name="dob">
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree: 
  <input type="checkbox" name="deg[]" value="SSC">SSC 
  <input type="checkbox" name="deg[]" value="HSC">HSC 
  <input type="checkbox" name="deg[]" value="BSc">BSc 
  <input type="checkbox" name="deg[]" value="MSc">MSc
  <span class="error">* <?php echo $degErr;?></span> 
  <br><br>
  <label for="bg"> Blood group:</label>
  <select id="bg" name="bg">
  <option value=""></option>
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  </select> 
  <span class="error">* <?php echo $bgErr;?></span>
  <br> <br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $dob;
echo "<br>";
echo $bg;
?>
</body>
</html>