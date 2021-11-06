<html>
   
   <head>
      <title>LAB09</title>
   </head>
   
   <body>
   	<?php
//example to demonstrate star pattern-1
for($i=0; $i<3; $i++) {
for($j=0; $j<191; $j++)
{
echo '*';
}
echo '<br>';
}
/*  */
echo '<br>';
echo 'Name : SHIVAM TYAGI 2047122';
echo '<br>';
echo 'Course : Web Techno_  LAB09';
echo '<br>';
echo 'Create a simple online test web page in PHP using the following features:';
echo '<br>';
echo '1. Strings';
echo '<br>';
echo '2. Arrays (Passing arrays to functions, Associative array, Multidimensional array)';
echo '<br>';
echo '3. Files (Reading and writing to files)';
echo '<br>';
echo '4. Forms  (Text, Text area, Radio box, Check Box, Submit button, Reset button, Password, Hidden field)\n';
echo '<br>';

echo '<br>';
//************************************************************************* */
for($i=0; $i<1; $i++) {
for($j=0; $j<191; $j++)
{
echo '*';
}
echo '<br>';
}

echo '<br>';
echo '(I) Strings';
echo '<br>';
echo 'The PHP strlen() function returns the length of a string.<"Hello World!">';
echo '<br>';
echo 'OUTPUT :-';
echo strlen("Hello world!"); // outputs 12
echo '<br>';


echo '<br>';
echo 'The PHP strlen() function returns the length of a string.<"Hello World!">';
echo '<br>';
echo 'OUTPUT :-';
echo str_word_count("Hello world!"); // outputs 2
echo '<br>';


echo '<br>';
echo 'The PHP strlen() function returns the length of a string.<"Hello World!">';
echo '<br>';
echo 'OUTPUT :-';
echo strrev("Hello world!"); // outputs !dlrow olleH
echo '<br>';


echo '<br>';
echo 'The PHP strlen() function returns the length of a string.<"Hello World!">';
echo '<br>';
echo 'OUTPUT :-';
echo strpos("Hello world!", "world"); // outputs 6
echo '<br>';

echo '<br>';
echo 'The PHP strlen() function returns the length of a string.<"Hello World!">';
echo '<br>';
echo 'OUTPUT :-';
echo str_replace("world", "Shivam", "Hello world!"); // outputs Hello Shivam!
echo '<br>';
echo '<br>';

for($i=0; $i<1; $i++) {
for($j=0; $j<191; $j++)
{
echo '*';
}
echo '<br>';
}
//*********************************************************************** */
echo '<br>';
echo '(II) Arrays';
echo '<br>';
$salary=array("Shivam"=>"550000","DEvaraj"=>"250000","Archie"=>"200000");  
foreach($salary as $k => $v) {  
echo "Key:   ".$k." Value:   ".$v."<br/>";  
}  
echo '<br>';
echo '<br>';

$emp = array  
  (  
  array(2047122,"Shivam",400000),  
  array(2047110,"Devaraj",500000),  
  array(2047109,"Archie",300000)  
  );  
  
for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo $emp[$row][$col]."  ";  
  }  
  echo "<br/>";  
}  
//****************************************************************** */

echo '<br>';
echo '(III) File Handling';
echo '<br>';

$filename = "/home/shivam/Downloads/3MCS/WT";    
$handle = fopen("File_Handle.txt", "r");//open file in read mode    
  
$contents = fread($handle, filesize($filename));//read file    
  
echo $contents;//printing data of file  
fclose($handle);//close file    


// for ($row = 0; $row < 3; $row++) {  
//     for ($col = 0; $col < 3; $col++) {  
//       echo $emp[$row][$col]."  ";  
//     }  
//     echo "<br/>";  
//   }  
  //****************************************************************** */
  
  echo '<br>';
  echo '<br>';
  echo '(IV) Forms (Text, Text area, Radio box, Check Box, Submit button, Reset button, Password, Hidden field) ';
  
  echo '<br>';
?>
   
   
   
   
   
   
<?php
    
    // define variables and set to empty values
    $name = $email = $password = $gender = $comment = $website = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
    $password = test_input($_POST["password"]);
    $attendance = test_input($_POST["attendance"]);
    }
    
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>

<!-- <h2>Form Handling</h2> -->

<form method = "post" >
    <table>
    <tr>
        <td>Name:</td> 
        <td><input type = "text" name = "name"></td>
    </tr>
    
    <tr>
        <td>E-mail:</td>
        <td><input type = "text" name = "email"></td>
    </tr>
    
    <tr>
        <td>Specific Time:</td>
        <td><input type = "text" name = "website"></td>
    </tr>
    
    <tr>
        <td>Class details:</td>
        <td><textarea name = "comment" rows = "5" cols = "30"></textarea></td>
    </tr>
    
    <tr>
        <td>Gender:</td>
        <td>
            <input type = "radio" name = "gender" value = "female">Female
            <input type = "radio" name = "gender" value = "male">Male
        </td>
    </tr>

    <tr>
        <td>Password:</td>
        <td>
            <input type = "text"   name = "password" >
            <input type = "hidden" name = "password" value = "3487">
            <!-- <input type = "text" name = "gender" value = "male">Male -->
        </td>
    </tr>

    <tr>
        <td>Attendance : </td>
        <td>
        <input type="checkbox" id="22" name="Shivam" value="Shivam">
        <label for="vehicle1"> 2047122 SHIVAM TYAGI</label><br>
        <input type="checkbox" id="09" name="Archie" value="Archie">
        <label for="vehicle2"> 2047109 ARCHISMAN BHATT</label><br>
        <input type="checkbox" id="10" name="Deva" value="Deva">
        <label for="vehicle3"> 2047110 DEVARAJ N</label><br><br>
            <!-- <input type = "text" name = "gender" value = "male">Male -->
        </td>
    </tr>
    
    <tr>
        <td>
            <input type = "submit" name = "submit" value = "Submit"> 
        </td>
    </tr>
    </table>
</form>

<?php
    echo "<h2>Your Given details are as :</h2>";
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

    echo $password;
    echo "<br>";

    echo $attendance;
    echo "<br>";
?>
      
   </body>
</html>