<?php
//
    $dia = "Lunes";
    switch ($dia) {
        case 'Lunes':
            echo "$dia : <br>";
            echo "TECNOLOGIA WEB II"."<br>";
            echo "De 08:00 - 13:00 horas";
            break;
            case 'Martes':
                echo "$dia : <br>";
                echo "CONTROL Y AUTOMATIZACION INDUSTRIAL II"."<br>";
                echo "De 08:00 - 13:00 horas";
                break;
                case 'Miercoles':
                    echo "$dia : <br>";
                    echo "TELEMATICA II"."<br>";
                    echo "De 08:00 - 13:00 horas";
                    break;
                    case 'Jueves':
                        echo "$dia : <br>";
                        echo "EMPRENDIMIENTO PRODUCTIVO I"."<br>";
                        echo "De 08:00 - 11:00 horas"."<br>";
                        echo "TALLER DE MODALIDAD DE GRADUACION I"."<br>";
                        echo "De 11:30 - 13:00";
                        break;
                        case 'Viernes':
                            echo "$dia : <br>";
                            echo "SISTEMAS DE INFORMACION Y LABORATORIOS II"."<br>";
                            echo "De 08:00 - 13:00 horas";
                            break;                           
                                                                                            
        default:
            echo "Dia Fuera del Rango";
            break;
    }
?>