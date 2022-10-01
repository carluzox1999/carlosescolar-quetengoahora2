<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        div {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            color: #B48C8C;
            text-align: center;
            border-radius: 30px;
            border: solid;
            margin: 20px;
        }
        
        h1{
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            color: #B48C8C;
            text-align: center;
        }

        h2{
            margin: 15px;
        }

        .pDiv{
           margin: 8px; 
        }

        table {     
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 12px;      
            width: 100%; 
            text-align: center;    
            border: 4px solid #B48C8C;
        }

        table th{
            background-color: gray;
        }

        .colorCelda{
            background-color: #D3CDCD;
        }

    </style>
    <?php
        

        $horario = array(
            "Lunes" => array(
                "08:00-08-55" => array(
                    "Docente" => "Maria del Sol Garcia Naranjo", 
                    "Materia" => "EMR",
                    "Aula" => "201"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Sergio Ramos Suarez",
                    "Materia" => "DSW", 
                    "Aula" => "201"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Sergio Ramos Suarez",
                    "Materia" => "DSW", 
                    "Aula" => "201"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Materia" => "DEW", 
                    "Aula" => "201"
                ),   
                "12:10-13:05" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Materia" => "DEW", 
                    "Aula" => "201"
                ),  
                "13:05-14:00" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Materia" => "DEW", 
                    "Aula" => "201"
                ),              
            ),

            "Martes" =>  array(
                "08:00-08-55" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "DPL",
                    "Aula" => "201"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "DPL",
                    "Aula" => "201"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "201"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "201"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "201"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "201"
                ),            
            ),

            "Miercoles" =>  array(
                "08:00-08:55" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez",
                    "Materia" => "DEW", 
                    "Aula" => "201"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez",
                    "Materia" => "DEW", 
                    "Aula" => "201"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "201"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "201"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "201"
                ), 
                "13:05-14:00" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "201"
                ),        
            ),

            "Jueves" =>  array(
                "08:00-10:45" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "DPL",
                    "Aula" => "201"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "DPL",
                    "Aula" => "201"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "DPL",
                    "Aula" => "201"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Materia" => "DEW",
                    "Aula" => "201"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Materia" => "DEW",
                    "Aula" => "201"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Maria del Sol Garcia Tarajano", 
                    "Materia" => "EMR",
                    "Aula" => "201"
                ) 
            ),

            "Viernes" =>  array(
                "08:00-08:55" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "DOR",
                    "Aula" => "201"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "DOR",
                    "Aula" => "201"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez",
                    "Materia" => "DPL", 
                    "Aula" => "201"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Maria del Sol Garcia Tarajano", 
                    "Materia" => "EMR", 
                    "Aula" => "201"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW", 
                    "Aula" => "201"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW", 
                    "Aula" => "201"
                )            
            )
        );

        function modulo(){
            global $horario;
            
            date_default_timezone_set("Atlantic/Canary");

            $dActual = date("D");
            $hActual = date("H");
            $mActual = date("M");

            switch($dActual){
                case "Monday":
                    $dActual = "Lunes";
                    break;
                
                case "Tuesday":
                    $dActual = "Martes";
                    break;
    
                case "Wednesday":
                    $dActual = "Miercoles";
                    break;
    
                case "Thursday":
                    $dActual = "Jueves";
                     break;
                
                case "Friday":
                    $dActual = "Viernes";
                    break;
            }

            $diaModulo = $dActual;
            $horaModulo = $hActual;
            $minModulo = $mActual;

            if($diaModulo !="Lunes" && $diaModulo !="Martes" && $diaModulo !="Miércoles" && $diaModulo !="Jueves" && $diaModulo !="Viernes"){
                echo "<div>";
                    echo "No hay clase";
                echo "</div>";
            };

            if ($horaModulo>=8 && $minModulo<=55) {
                $primeraHora = "08:00-08:55";
            }
            if($horaModulo>=8 && $minModulo<=55 || $horaModulo>=9 && $minModulo<=50 ){
                $primeraHora = "08:55-09:50";
            }
            if($horaModulo>=9 && $minModulo<=50 || $horaModulo>=10 && $minModulo<=45 ){
                $primeraHora = "09:50-10:45";
            }
            if($horaModulo>=11 && $minModulo<=15 || $horaModulo>=12 && $minModulo<=10){
                $primeraHora = "11:15-12:10";
            }
            if($horaModulo>=12 && $minModulo<=10 || $horaModulo>=13 && $minModulo<=05){
                $primeraHora = "12:10-13:05";
            }
            if($horaModulo>=13 && $minModulo<=05 || $horaModulo>=14 && $minModulo<=00){
                $primeraHora = "13:05-14:00";
            }

            foreach ($horario as $dia => $programa) {
                if ($dia == $diaModulo) {
                    foreach ($programa as $primeraHora2 => $info) {
                        if ($primeraHora == $primeraHora2) {
                            echo "<div>";
                                echo "<h2>Módulo actual</h2>";
                                echo "</br>";
                            foreach ($info as $nombre => $cont) {
                                    echo "<p class='pDiv'>$nombre: $cont</p>";
                            }
                        }
                        echo "</div>";
                    }
                }
            }
        };      
    ?>
        
    <h1>HORARIO 2º DAW</h1>
    <?php
        modulo();
        echo "<hr>";
    ?>

<!-- <button type="button"> <img src="carlosescolar-quetengoahora2\imagenes\boton.png" height ="80" width="100" /></button> -->
<!-- <a href="carlosescolar-quetengoahora2\imagenes\boton.png"></a> -->
<div>
    <input type="image" src="imagenes\boton.png" width="30%" onclick="location='ut2.php'"/>
</div>




</body>
</html>