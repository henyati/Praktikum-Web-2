<?php 

// Buat switch
$grade = "A";

switch ($grade) {
    case 'A':
        echo "Sangat Memuaskan";
        break;

    case 'B':
        echo "Memuaskan";
        break;    
    
    case 'C':
        echo "Cukup";
        break;   

    case 'D':
        echo "Kurang";
        break;  
        
    case 'D':
        echo "Sangat Kurang";
        break; 
        
    default:
        echo "Tidak Ada";
        break;
}

?>