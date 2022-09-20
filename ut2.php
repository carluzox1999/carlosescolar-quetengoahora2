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

        // $horario = array(
        //     "Tiempo" => array("08:00-08-55", "08:55-09:50", "09:50-10:45", "10:45-11:15", "11:15-12:10", "12:10-13:05", "13:05-14:00"),
        //     "Materia" => array("EMR", "DSW", "DEW", "DPL", "DOR"),
        //     "Docente" => array("Maria del Sol Garcia Tarajano", "Sergio Ramos Suarez", "Maria del carmen Rodriguez Suarez", "Maria Antonia Montesdeoca Viera", "Ermis Papakonstatinou Baez"),
        //     "Aula" => array("201")
        // );
        $horario = array(
            "Lunes" => array(
                "08:00-08-55" => array(
                    "Docente" => "Maria del Sol Garcia Naranjo", 
                    "Materia" => "EMR",
                    "Aula" => "201"
                ),
                "08:55-10:45" => array(
                    "Docente" => "Sergio Ramos Suarez",
                    "Materia" => "DSW", 
                    "Aula" => "201"
                ),
                "11:15-14:00" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Materia" => "DEW", 
                    "Aula" => "201"
                )              
            ),

            "Martes" =>  array(
                "08:00-09:50" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "DEW",
                    "Aula" => "201"
                ),
                "09:50-12:10" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "201"
                ),
                "12:10-14:00" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "201"
                )             
            ),

            "Miercoles" =>  array(
                "08:00-09:50" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez",
                    "Materia" => "DEW", 
                    "Aula" => "201"
                ),
                "09:50-12:10" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "201"
                ),
                "12:10-14:00" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "201"
                )          
            ),

            "Jueves" =>  array(
                "08:00-10:45" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "DPL",
                    "Aula" => "201"
                ),
                "11:15-13:05" => array(
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
                "08:00-09:50" => array(
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
                "12:10-14:00" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW", 
                    "Aula" => "201"
                )        
            )
        );

        function mostrarHorario($array){
            foreach($array as $dia => $horario){
                echo "<h4>$dia</h4></br>";

                foreach($horario as $hora => $info){
                    echo "<p>$hora</p></br>";

                    foreach($info as $tittle => $datos){
                        echo "$tittle : $datos</br>";
                        
                    }
                }
            }
        };

        // function buscarAsignatura($dia, $hora, $minutos, $array){
        //     if()
        // }
        
        mostrarHorario($horario);
        
        if(!empty($_POST)){

        }

        $formulario = $_POST['formulario'];
        echo $formulario;
        // mostrarAsignaturas($materia);
    ?>
    </br>
    <form name="formulario" action="ut2.php" method="post">
        <table>
            <tr>
                <th>Módulo</th>
                <th>Hora</th>
                <th>Minutos</th>
            </tr>
            <tr>
                <td><input class="form-control" type="text" name="nombre"></td>
                <td><input class="form-control" type="number" name="hora" min="8" max="14"></td>
                <td><input class="form-control" type="number" name="minutos" min="0" max="59"></td>
            </tr>
        </table>
        <input type="submit" />
    </form>
</body>
</html>