<?php

    $Dictionary = Array(
        'part',
        'child',
        'eye',
        'woman',
        'place',
        'work',
        'week',
        'case',
        'point',
        'government',
        'company',
        'number',
        'group',
        'problem',
        'fact'
    );
    
    //Array to store the password words
    $Password = Array();
    $numberWords = 5;
    $includeNumbers = FALSE;
    $includeSymbols = FALSE;
    
    foreach($_POST as $key => $value) {
    
        if($key == "NumWords")
            $numberWords = $_POST[$key];
        else if($key == "IncludeNumbers")
            $includeNumbers = $_POST[$key];
        else if($key == "IncludeSymbols")
            $includeSymbols = $_POST[$key];
    
        //$checked = $_POST['IncludeNumbers'];
    
    }
    
    for($i = 0; $i < $numberWords; $i++)
    {
        $index = rand(0,14);
        $searchIndex = array_search($Dictionary[$index], $Password);
        if($searchIndex !== FALSE)
        {
            --$i;
            continue;
        }
        
        if($includeNumbers)
        {
            $number = rand(0,9);
            echo $number;
            $Dictionary[$index] += $number;
            echo $Dictionary[$index];
            $includeNumbers = false;
        }
            
        array_push($Password, $Dictionary[$index]);
        
    }




?>