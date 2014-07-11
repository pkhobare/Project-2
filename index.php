<!DOCTYPE html>
<html>
<head>
<?php require 'logic.php'; ?>
</head>
    <body>
      <h1>XKCD style password generator</h1>

<form method='POST' action='index.php'>
Enter number of words:<br>
<input type='text' name= 'NumWords'><br>
Include numbers?:<br>
<input type='checkbox' name='IncludeNumbers'><br>
Include symbols?:<br>
<input type='checkbox' name='IncludeSymbols'><br>
Uppercase the first letter?:<br>
<input type='checkbox' checked='UppercaseFirstLetter'><br>
<input type='submit' value='Generate Password'><br>
</form>

<?php
    for($int = 0; $int < count($Password); $int++)
    {
        echo($Password[$int]."\n");
        
    }
    
    //print_r($Password);
    
    ?>
    </body>
</html>