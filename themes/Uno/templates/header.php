<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="themes/Uno/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="themes/Uno/assets/css/main.css">
    

    <title>Inicio</title>
    <style>
        :root {
            --primary_Color: #6ddbd0;
            --background_Color: #f0f2f9;
            --Secundary_background_color: #FFF;
            --Green_Color: #46c89b;
            --Red_Color: #ce5956
        }




        a {
            text-decoration: none !important;
            color: #fff !important;
        }



        #SEARCHICON {
            position: relative;
            left: -45px;
        }

        .WelcomeHome_Container {
            border: 3px solid var(--Green_Color);
        }

        #SubCard_for_Receivable {
            position: relative;
        }

        #SubCard_for_Receivable::before {
            content: "";
            position: absolute;
            left: -10px;
            background-color: var(--Green_Color);
            height: 90%;
            width: 4px;
        }

        #SubCard_for_Receivable-red {
            position: relative;
        }

        #SubCard_for_Receivable-red::before {
            content: "";
            position: absolute;
            left: -10px;
            background-color: var(--Red_Color);
            height: 90%;
            width: 4px;
        }
    </style>
</head>

<body class="container-fluid" style="background-color: #111;">