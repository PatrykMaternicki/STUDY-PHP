<?php


function createTable(){
    $indexNumber = 0;
    echo "<tr>";
    createHeaderTable();
    echo "</tr>";
    for ($i = 0; $i < 11; $i++){
        echo "<tr>";
        createColumnTable($indexNumber);
        $indexNumber++;
        echo "</tr>";
    
    }
}
function createHeaderTable(){
    for ($i = 0 ; $i < 11 ; $i++){
        echo "<th>$i</th>";
    }
}

function createColumnTable($indexNumber){
    for ($i = 0; $i < 11; $i++){
        if ($i == 0){
            echo "<td class='firstRow'>$indexNumber</td>";
            continue;
    }
        $result = $i * $indexNumber;
        echo "<td>$result</td>";
    }
}
?>

