<?php
    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(E_ALL ^ E_WARNING);
 
    
/*
 * function:
 * validateForm:
 *  -> main function
 * getPostArray:
 * -> return POSTArray;
 * addHTMLCode:
 * ->inject HTML Code.
 * getForeachArray:
 * ->Operate from Array
 * createList:
 * ->Create <li> list.
 * isPreferContact:
 * ->It is true is POST[] eqaual name is preferContract.
 * 
 */
function validateForm(){
 
    addHTMLCode('<ul>');
    getForeachArray(getPostArray());
    addHTMLCode('</ul>');
 
    
}

function getPostArray (){
$array = [
$nameAndSurName = $_POST['nameAndSurName'],
$email = $_POST['email'],
$phoneCall = $_POST['phoneCall'],
$message = $_POST['message'],
$preferContact = $_POST['preferContact'],
$hadWebsite = $_POST['prop']
];
return $array;
}



function addHTMLCode ($HTMLSelector){
echo $HTMLSelector;
}




function getForeachArray($array){
   
    if ($array[0] == ''){
        return;
    }
foreach ($array as &$value){
  
       
    if (!isset($value)){
        continue;
    }
    if ($value ==  $_POST['message']){
        createList($value,'div');
        continue;
    }
     if (isPreferContact($value) ){
       $value = implode ("," , $value);
       createList ($value, 'li');
        continue;
        
    }
    if (is_array($value)){
        continue;
    }
   echo "<li>$value </li>";
   
}
}    

function isPreferContact ($value){
    
   if ($value  == $_POST['preferContact'] && isset($_POST['preferContact']) ){
       return true;
   } 
   return false;
}

function createList ($value, $HTMLSelector){
    echo '<'.$HTMLSelector.'>';
    echo $value;
    echo '</'.$HTMLSelector.'>';
}


?>

