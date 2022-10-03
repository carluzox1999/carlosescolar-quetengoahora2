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
    <input type="button" value="Atrás" onclick="location='index.php'">
    
    <hr>

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

        $horarioDocente1 = array(
            "Lunes" => array(
                "08:00-08-55" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "08:55-09:50" => array(
                    "Docente" => "",
                    "Materia" => "", 
                    "Aula" => ""
                ),
                "09:50-10:45" => array(
                    "Docente" => "",
                    "Materia" => "", 
                    "Aula" => ""
                ),
                "11:15-12:10" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAW"
                ),   
                "12:10-13:05" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSG",
                    "Aula" => "2º DAM"
                ),  
                "13:05-14:00" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSG",
                    "Aula" => "2º DAM"
                ),              
            ),

            "Martes" =>  array(
                "08:00-08-55" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "08:55-09:50" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "09:50-10:45" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAW"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAW"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "2º DAW"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "2º DAW"
                ),            
            ),

            "Miercoles" =>  array(
                "08:00-08:55" => array(
                    "Docente" => "",
                    "Materia" => "", 
                    "Aula" => ""
                ),
                "08:55-09:50" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAW"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAM"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAM"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "2º DAW"
                ), 
                "13:05-14:00" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "2º DAW"
                ),        
            ),

            "Jueves" =>  array(
                "08:00-10:45" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSG",
                    "Aula" => "2º DAM"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSG",
                    "Aula" => "2º DAM"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSG",
                    "Aula" => "2º DAM"
                ),
                "11:15-12:10" => array(
                    "Docente" => "",
                    "Materia" => "", 
                    "Aula" => ""
                ),   
                "12:10-13:05" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAM"
                ),  
                "13:05-14:00" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAW"
                ),  
            ),

            "Viernes" =>  array(
                "08:00-08:55" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "2º DAW"
                ),
                "08:55-09:50" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "DOR",
                    "Aula" => "2º DAW"
                ),
                "09:50-10:45" => array(
                    "Docente" => "",
                    "Materia" => "", 
                    "Aula" => ""
                ),
                "11:15-12:10" => array(
                    "Docente" => "", 
                    "Materia" => "", 
                    "Aula" => ""
                ),
                "12:10-13:05" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAM"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Ermis Papakonstantinou Baez", 
                    "Materia" => "SSF",
                    "Aula" => "1º DAM"
                )            
            )
        );

        $horarioDocente2 = array(
            "Lunes" => array(
                "08:00-08-55" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "08:55-09:50" => array(
                    "Docente" => "Sergio Ramos Suarez",
                    "Materia" => "DSW", 
                    "Aula" => "2º DAW"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Sergio Ramos Suarez",
                    "Materia" => "DSW", 
                    "Aula" => "2º DAW"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "IMW", 
                    "Aula" => "2º ASIR"
                ),   
                "12:10-13:05" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "IMW", 
                    "Aula" => "2º ASIR"
                ),  
                "13:05-14:00" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "IMW", 
                    "Aula" => "2º ASIR"
                ),              
            ),

            "Martes" =>  array(
                "08:00-08-55" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "08:55-09:50" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "09:50-10:45" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "2º DAW"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "2º DAW"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "LND",
                    "Aula" => "1º ASIR"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "LND",
                    "Aula" => "1º ASIR"
                ),            
            ),

            "Miercoles" =>  array(
                "08:00-08:55" => array(
                    "Docente" => "",
                    "Materia" => "", 
                    "Aula" => ""
                ),
                "08:55-09:50" => array(
                    "Docente" => "Sergio Ramos Suarez",
                    "Materia" => "LND", 
                    "Aula" => "1º ASIR"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "2º DAW"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW",
                    "Aula" => "2º DAW"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "PGV",
                    "Aula" => "2º DAM"
                ), 
                "13:05-14:00" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "PGV",
                    "Aula" => "2º DAM"
                ),        
            ),

            "Jueves" =>  array(
                "08:00-10:45" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "08:55-09:50" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "09:50-10:45" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "11:15-12:10" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "IMW", 
                    "Aula" => "2º ASIR"
                ),   
                "12:10-13:05" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "IMW", 
                    "Aula" => "2º ASIR"
                ),  
                "13:05-14:00" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "IMW", 
                    "Aula" => "2º ASIR"
                ),  
            ),

            "Viernes" =>  array(
                "08:00-08:55" => array(
                    "Docente" => "", 
                    "Materia" => "",
                    "Aula" => ""
                ),
                "08:55-09:50" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "LND",
                    "Aula" => "201"
                ),
                "09:50-10:45" => array(
                    "Docente" => "Sergio Ramos Suarez",
                    "Materia" => "PGV", 
                    "Aula" => "2º DAM"
                ),
                "11:15-12:10" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "EMR", 
                    "Aula" => "2º DAM"
                ),
                "12:10-13:05" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW", 
                    "Aula" => "2º DAW"
                ),
                "13:05-14:00" => array(
                    "Docente" => "Sergio Ramos Suarez", 
                    "Materia" => "DSW", 
                    "Aula" => "2º DAW"
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

        function mostrarHorarioDocente1(){
            global $horarioDocente1;

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
                foreach($horarioDocente1 as $dia => $programa){
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

        function mostrarHorarioDocente2(){
            global $horarioDocente2;

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
                foreach($horarioDocente2 as $dia => $programa){
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
    
        $horarioTipo = $_POST["horarioTipo"];
        // print_r($horarioTipo);
            for ($i = 0; $i<count($horarioTipo); $i++){
                if($horarioTipo[$i] == "horarioDAW"){
                    echo "<h2>Horario 2º DAW_M</h2>";
                    mostrarHorario($horario);
                }
                if ($horarioTipo[$i] == "horarioDAM") {
                    echo "<h2>Horario 2º DAM_M</h2>";
                    mostrarHorarioDAM($horarioDAM);
                }
                if ($horarioTipo[$i] == "docente1") {
                    echo "<h2>Horario Ermis Papakonstantinou Baez</h2>";
                    mostrarHorarioDocente1($horarioDocente1);
                }
                if ($horarioTipo[$i] == "docente2") {
                    echo "<h2>Horario Sergio Ramos Suarez</h2>";
                    mostrarHorarioDocente2($horarioDocente2);
                }
            }
    ?>
</body>
</html>