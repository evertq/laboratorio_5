<?php
//ESTRUCTURA CONDICIONAL MULTIPLE
    $dia = 5;
    switch ($dia) {
        case '1':
            echo "Domingo";
            break;
            case '2':
                echo "Lunes";
                break;
                case '3':
                    echo "Martes";
                    break;
                    case '4':
                        echo "Miercoles";
                        break;
                        case '5':
                            echo "Jueves";
                            break;
                            case '6':
                                echo "Viernes";
                                break;
                                case '':
                                    echo "Sabado";
                                    break;
                                                                                            
        default:
            echo "Dia Fuera del Rango";
            break;
    }
?>