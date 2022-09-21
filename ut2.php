<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario 2º DAW</title>
</head>
<body>
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
    
        function mostrarHorario(){
            global $horario;
            foreach($horario as $dia => $programa){
                echo "<h4>$dia</h4></br>";

                foreach($programa as $hora => $info){
                    echo "<p>$hora</p></br>";

                    foreach($info as $nombre => $datos){
                        echo "$nombre: $datos</br>";
                        
                    }
                }
            }
        };
        
        function modulo($diaModulo, $horaModulo, $minModulo){
            global $horario;
            // $primeraHora = null;

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
                            echo "<h2>Nos toca...:</h2>";
                            foreach ($info as $nombre => $cont) {
                                echo "</br>$nombre: $cont";
                            }
                        }
                    }
                }
            }
        };

        
        
        modulo("Miercoles","8", "40");
        echo "<hr>";
        mostrarHorario($horario);
    ?>
</body>
</html>