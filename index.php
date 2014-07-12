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
    <input type='checkbox' name='IncludeNumbers' value='numbers'>Include numbers<br>
    <input type='checkbox' name='IncludeSymbols'>Include symbols<br>
    <input type='checkbox' name='UppercaseFirstLetter'>Uppercase the first letter<br>
    <input type='submit' value='Generate Password'><br>
</form>

<?php
    for($int = 0; $int < count($Password); $int++)
    {
        echo($Password[$int].str_repeat('&nbsp;', 5));
    }
    
    ?>
</body>
</html>