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
            "Lunes" => $materia = array(
                "EMR" => array(
                "Docente" => "Maria del Sol Garcia Naranjo", 
                    "Aula" => "201",
                    "Orden" => "08:00 - '08:55"
                ),
                "DSW" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Aula" => "201",
                    "Orden" => "08:55 - '10:45"
                ),
                "DEW" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Aula" => "201",
                    "Orden" => "11:15 - '14:00"
                )              
            ),

            "Martes" => $materia = array(
                "DPL" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Aula" => "201",
                    "Orden" => "08:00 - '09:50"
                ),
                "DSW" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Aula" => "201",
                    "Orden" => "09:50 - '12:10"
                ),
                "DOR" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Aula" => "201",
                    "Orden" => "12:10 - '14:00"
                )             
            ),

            "Miercoles" => $materia = array(
                "DEW" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Aula" => "201",
                    "Orden" => "08:00 - '09:50"
                ),
                "DSW" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Aula" => "201",
                    "Orden" => "09:50 - '12:10"
                ),
                "DOR" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Aula" => "201",
                    "Orden" => "12:10 - '14:00"
                )          
            ),

            "Jueves" => $materia = array(
                "DPL" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Aula" => "201",
                    "Orden" => "08:00 - '10:45"
                ),
                "DEW" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Aula" => "201",
                    "Orden" => "11:15 - '13:05"
                ),
                "EMR" => array(
                    "Docente" => "Maria del Sol Garcia Tarajano", 
                    "Aula" => "201",
                    "Orden" => "13:05 - '14:00"
                ) 
            ),

            "Viernes" => $materia = array(
                "DOR" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Aula" => "201",
                    "Orden" => "08:00 - '09:50"
                ),
                "DPL" => array(
                    "Docente" => "Maria del Carmen Rodriguez Suarez", 
                    "Aula" => "201",
                    "Orden" => "09:50 - '10:45"
                ),
                "EMR" => array(
                    "Docente" => "Maria del Sol Garcia Tarajano", 
                    "Aula" => "201",
                    "Orden" => "11:15 - '12:10"
                ),
                "DSW" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Aula" => "201",
                    "Orden" => "12:10 - '14:00"
                )        
            )
        );

        function mostrarHorario($horario){
            foreach($horario as $dia => $materia){
                echo "<th>$dia</th>";
            }
        };

        function mostrarAsignaturas($materia){
            foreach($materia as $materia => $valor){
                echo "<td>$materia</td>";
            }
        }
    ?>
    <table style=width:50% border="1">
        <tr>
            <?php
                mostrarHorario($horario);
            ?>
        </tr>
        <tr>
            <td>
                <?php
                    mostrarAsignaturas($materia);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>