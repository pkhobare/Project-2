<?php
    //20 word dictionary
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
        'fact',
        'body',
        'war',
        'cake',
        'tree',
        'engine'
    );
    
    //Array to store the password words
    $Password = Array();

    $numberWords = 0;
    $includeNumbers = FALSE;
    $includeSymbols = FALSE;
    $UpperCaseLetter = FALSE;
    
    foreach($_POST as $key => $value) {
    
        if($key == "NumWords")
            $numberWords = $_POST[$key];
        else if($key == "IncludeNumbers")
            $includeNumbers = TRUE;
        else if($key == "IncludeSymbols")
            $includeSymbols = TRUE;
        else if($key == "UppercaseFirstLetter")
            $UpperCaseLetter = TRUE;
    
    }
    
    for($i = 0; $i < $numberWords; $i++)
    {
        $specialprocessing = FALSE;
        $index = rand(0,19);
        $searchIndex = array_search($Dictionary[$index], $Password);
        if($searchIndex !== FALSE)
        {
            --$i;
            continue;
        }
        
        if($includeNumbers)
        {
            $number = rand(0,9);
            $numStr = '%s';
            $numStr = sprintf($numStr, $number);
            
            $Dictionary[$index] = $Dictionary[$index].$numStr;
            $specialprocessing = TRUE;
        }
        
        if($includeSymbols)
        {
            $symStr = '%s';
            $symStr = sprintf($symStr, getSymbol());
            $Dictionary[$index] = $Dictionary[$index].$symStr;
            $specialprocessing = TRUE;
        }
        
        if($UpperCaseLetter)
        {
            $Dictionary[$index] = ucfirst($Dictionary[$index]);
            $specialprocessing = TRUE;
        }
        
        array_push($Password, $Dictionary[$index]);
    
    }
    
    function getSymbol()
    {
        $SymArray = Array(
            '!',
            '@',
            '#',
            '$',
            '%',
            '^',
            '&',
            '*'
        );
        
        $count = count($SymArray)-1;
        
        $index = rand(0, $count);
        return $SymArray[$index];
    }

?>