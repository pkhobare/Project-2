<!DOCTYPE html>
<html>
<head>
<?php require 'logic.php'; ?>
</head>
    <body>
      <h1>XKCD style password generator</h1>

<form method='POST' action='index.php'>
Enter number of words:<br>
<input type='text' name='NumWords'><br>
Include numbers?:<br>
<input type='checkbox' checked='IncludeNumbers'><br>
Include symbols?:<br>
<input type='checkbox' checked='IncludeSymbols'><br>
Uppercase the first letter?:<br>
<input type='checkbox' checked='UppercaseFirstLetter'><br>
<input type='submit' value='Generate Password'><br>
<input type='submit'>
</form>

    </body>
</html>