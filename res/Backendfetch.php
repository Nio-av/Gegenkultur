<?php


for($i = 0; i++){ //Zeilen der DB durchgehen
    if( != null){ //sind Daten in der Reihe "i" in der DB?
        echo "<tr>";  //gibt eine neue Reihe aus
        readdata(i);
        echo "</tr>";
    }
    else{
        // beendet das auslesen
    }
    
}



function readdata( ){ // Lese die Daten aus der Tabelle
    
    writedata();
}

function writedata(){ //Erzeugt ein neues Feld in der Tabelle
    echo "<td>";
    echo 
    echo "</td>";
    
}



?>