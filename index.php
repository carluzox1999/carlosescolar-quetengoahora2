<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>¿Que tengo ahora?</title>
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

        function moduloDAW(){
            global $horario;

            date_default_timezone_set("Atlantic/Canary");

            $dActual = date("D");
            $hActual = date("H");
            $mActual = date("m");

            switch($dActual){
                case "Mon":
                    $dActual = "Lunes";
                    break;
                
                case "Tue":
                    $dActual = "Martes";
                    break;
    
                case "Wed":
                    $dActual = "Miercoles";
                    break;
    
                case "Thu":
                    $dActual = "Jueves";
                     break;
                
                case "Fri":
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
            if($horaModulo>=9 && $minModulo>=50 || $horaModulo>=10 && $minModulo<=45 ){
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

        function moduloDAM(){
            global $horarioDAM;

            date_default_timezone_set("Atlantic/Canary");

            $dActual = date("D");
            $hActual = date("H");
            $mActual = date("m");

            switch($dActual){
                case "Mon":
                    $dActual = "Lunes";
                    break;
                
                case "Tue":
                    $dActual = "Martes";
                    break;
    
                case "Wed":
                    $dActual = "Miercoles";
                    break;
    
                case "Thu":
                    $dActual = "Jueves";
                     break;
                
                case "Fri":
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
            if($horaModulo>=9 && $minModulo>=50 || $horaModulo>=10 && $minModulo<=45 ){
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

            foreach ($horarioDAM as $dia => $programa) {
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
        
        function moduloDocente1(){
            global $horarioDocente1;

            date_default_timezone_set("Atlantic/Canary");

            $dActual = date("D");
            $hActual = date("H");
            $mActual = date("m");

            switch($dActual){
                case "Mon":
                    $dActual = "Lunes";
                    break;
                
                case "Tue":
                    $dActual = "Martes";
                    break;
    
                case "Wed":
                    $dActual = "Miercoles";
                    break;
    
                case "Thu":
                    $dActual = "Jueves";
                     break;
                
                case "Fri":
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
            if($horaModulo>=9 && $minModulo>=50 || $horaModulo>=10 && $minModulo<=45 ){
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

            foreach ($horarioDocente1 as $dia => $programa) {
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

        function moduloDocente2(){
            global $horarioDocente2;

            date_default_timezone_set("Atlantic/Canary");

            $dActual = date("D");
            $hActual = date("H");
            $mActual = date("m");

            switch($dActual){
                case "Mon":
                    $dActual = "Lunes";
                    break;
                
                case "Tue":
                    $dActual = "Martes";
                    break;
    
                case "Wed":
                    $dActual = "Miercoles";
                    break;
    
                case "Thu":
                    $dActual = "Jueves";
                     break;
                
                case "Fri":
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
            if($horaModulo>=9 && $minModulo>=50 || $horaModulo>=10 && $minModulo<=45 ){
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

            foreach ($horarioDocente2 as $dia => $programa) {
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
        
    <h1>HORARIOS Y MODULOS</h1>
    <hr>
    <div>
        <form action="ut2.php" method="post">
            <label for="horario">Horarios:</label>
            <select  name="horarioTipo[]">
                <optgroup label="GRUPOS">
                    <option value="horarioDAW" selected>2º DAW_M</option>
                    <option value="horarioDAM">2º DAM_M</option>
                </optgroup>
                <optgroup label="DOCENTES">
                    <option value="docente1">Ermis Papakonstantinou Baez</option>
                    <option value="docente2">Sergio Ramos Suarez</option>
                </optgroup>
            </select>
            <div>
            <button type="submit" style="border-radius: 60px; cursor: pointer;"><img src="imagenes/boton.png" width="20%" style="padding-top: 3em;"></button>
            </div>
        </form>
    </div>

</body>
</html>