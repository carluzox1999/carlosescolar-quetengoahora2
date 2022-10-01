<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario 2º DAW</title>
</head>
<body>
    <style>
        input[type=button], input[type=submit], input[type=reset] {
            background-color: #B48C8C;
            width: 100%;
            border-radius: 30px;
            border: 1;
            color: black;
            font-weight: bold;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }

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

        // https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21OptGroup.php/function/OptGroup%3A%3AdoFlattenOptions/9.0.x
        // Dos horarios en distintos arrays, uno de alumn DAM y otro de DAW, que el selector nos ponga esos horarios
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

        $horarioDAM = array(
            "Lunes" => array(
                "08:00-08-55" => array(
                    "Docente" => "Jose Ignacio Zeballos", 
                    "Materia" => "PGV",
                    "Aula" => "103"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Jose Ignacio Zeballos",
                    "Materia" => "PGV", 
                    "Aula" => "103"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Ermis Papakonstantinou Baez",
                    "Materia" => "SSG", 
                    "Aula" => "103"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSG", 
                    "Aula" => "103"
                ),   
                "12:10-13:05" => array(
                    "Docente" => "Miguel Angel Hernandez Rodriguez", 
                    "Materia" => "PGL", 
                    "Aula" => "103"
                ),  
                "13:05-14:00" => array(
                    "Docente" => "Maria del Sol Garcia Tarajano", 
                    "Materia" => "EMR", 
                    "Aula" => "103"
                ),              
            ),

            "Martes" =>  array(
                "08:00-08-55" => array(
                    "Docente" => "Maria del Sol Garcia Tarajano", 
                    "Materia" => "EMR",
                    "Aula" => "103"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Maria del Cristo Garcia Leon", 
                    "Materia" => "DAD",
                    "Aula" => "103"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Maria del Cristo Garcia Leon", 
                    "Materia" => "DAD",
                    "Aula" => "103"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Miguel Angel Hernandez Rodriguez", 
                    "Materia" => "PGL",
                    "Aula" => "103"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Jose Ignacio Zeballos", 
                    "Materia" => "AED",
                    "Aula" => "103"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Jose Ignacio Zeballos", 
                    "Materia" => "AED",
                    "Aula" => "103"
                ),            
            ),

            "Miercoles" =>  array(
                "08:00-08:55" => array(
                    "Docente" => "Jose Ignacio Zeballos",
                    "Materia" => "AED", 
                    "Aula" => "103"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Jose Ignacio Zeballos",
                    "Materia" => "AED", 
                    "Aula" => "103"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Jose Ignacio Zeballos", 
                    "Materia" => "AED",
                    "Aula" => "103"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Maria del Cristo Garcia Leon", 
                    "Materia" => "DAD",
                    "Aula" => "103"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Maria del Cristo Garcia Leon", 
                    "Materia" => "DAD",
                    "Aula" => "103"
                ), 
                "13:05-14:00" => array(
                    "Docente" => "Jose Ignacio Zeballos", 
                    "Materia" => "PGV",
                    "Aula" => "103"
                ),        
            ),

            "Jueves" =>  array(
                "08:00-10:45" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSG",
                    "Aula" => "103"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Jose Ignacio Zeballos", 
                    "Materia" => "AED",
                    "Aula" => "103"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Jose Ignacio Zeballos", 
                    "Materia" => "AED",
                    "Aula" => "103"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Maria del Cristo Garcia Leon", 
                    "Materia" => "DAD",
                    "Aula" => "103"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Maria del Cristo Garcia Leon", 
                    "Materia" => "DAD",
                    "Aula" => "103"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Jose Ignacio Zeballos", 
                    "Materia" => "PGV",
                    "Aula" => "103"
                ) 
            ),

            "Viernes" =>  array(
                "08:00-08:55" => array(
                    "Docente" => "Maria Antonia Montesdeoca Viera", 
                    "Materia" => "SSG",
                    "Aula" => "103"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSG",
                    "Aula" => "103"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Maria del Cristo Garcia Leon",
                    "Materia" => "DAD", 
                    "Aula" => "103"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Maria del Sol Garcia Tarajano", 
                    "Materia" => "EMR", 
                    "Aula" => "103"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Miguel Angel Hernandez Rodriguez", 
                    "Materia" => "PGL", 
                    "Aula" => "103"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Miguel Angel Hernandez Rodriguez", 
                    "Materia" => "PGL", 
                    "Aula" => "103"
                )            
            )
        );
    
        function mostrarHorario(){
            global $horario;

            echo "<table border='1 solid' cellpadding='4'>";
                echo "<tr>";
                    echo "<th scope='row'>-----</th>";
                    echo "<th>8:00 - 8:55</th>";
                    echo "<th>8:55 - 9:50</th>";
                    echo "<th>9:50 - 10:45</th>";
                    echo "<th>11:15 - 12:10</th>";
                    echo "<th>12:10 - 13:05</th>";
                    echo "<th>13:05 - 14:00</th>";
                echo "</tr>";
                foreach($horario as $dia => $programa){
                    echo "<tr>";
                        echo "<td class='colorCelda'>";
                            echo "<b>$dia</b>";
                        echo "</td>";
                    echo "</td>";
                    foreach($programa as $hora => $info){
                        echo "<td>";
                        foreach($info as $nombre => $datos){
                            echo "<p>$datos</p>";
                        }
                        echo "</td>";
                    }
                }
            echo "</table>";
        };

        function mostrarHorarioDAM(){
            global $horarioDAM;

            echo "<table border='1 solid' cellpadding='4'>";
                echo "<tr>";
                    echo "<th scope='row'>-----</th>";
                    echo "<th>8:00 - 8:55</th>";
                    echo "<th>8:55 - 9:50</th>";
                    echo "<th>9:50 - 10:45</th>";
                    echo "<th>11:15 - 12:10</th>";
                    echo "<th>12:10 - 13:05</th>";
                    echo "<th>13:05 - 14:00</th>";
                echo "</tr>";
                foreach($horarioDAM as $dia => $programa){
                    echo "<tr>";
                        echo "<td class='colorCelda'>";
                            echo "<b>$dia</b>";
                        echo "</td>";
                    echo "</td>";
                    foreach($programa as $hora => $info){
                        echo "<td>";
                        foreach($info as $nombre => $datos){
                            echo "<p>$datos</p>";
                        }
                        echo "</td>";
                    }
                }
            echo "</table>";
        };

        
    ?>
    <input type="button" value="Atrás" onclick="location='index.php'">
    
    <hr>

    <!-- ---------------------------------------------- -->
    <!-- Cambiar por el horario de un alumno distinto, uno de DAM y otro de DAW -->
    <!-- Todo esto en un formulario -->

    <div>
        <form action="ut2.php" method="post">
            <label for="horario">Horarios:</label>
            <select  name="horarioTipo">
                <optgroup label="GRUPOS">
                    <option value="horarioDAW" selected>2º DAW</option>
                    <option value="horarioDAM">2º DAM</option>
                </optgroup>
            </select>
            <input type="submit" value="Ver Horario">
        </form>
    </div>
    
    <!-- ---------------------------------------------- -->

    <?php
        // $submit = $_POST["submit"];
        // $tipo = $_POST["horarioTipo"];
        // mostrarHorario($horario);
        // mostrarHorarioDAM($horarioDAM);
        if(isset($_POST["submit"])){
            if($_POST["horarioTipo"] == "horarioDAW"){
                mostrarHorario($horario);
            }
            if ($_POST["horarioTipo"] == "horarioDAM") {
                mostrarHorarioDAM($horarioDAM);
            }
        }
    ?>
</body>
</html>