<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Coronao</title>
    <script src="https://kit.fontawesome.com/1c44cf5aa1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="nav navbar-expand-lg bordenavbar bordeIzquierdaGordo navbar-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php"><i class="fas fa-info"></i> Inicio</a>
                </li>
                <div class="dropdown marginTop">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-info"></i> ¿COVID-19?
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="covid-19.php"><i class="fas fa-info"></i> ¿Qué es el COVID-19?</a>
                        <a class="dropdown-item" href="sintomas.php"><i class="fas fa-viruses"></i> Síntomas</i></a>
                        <a class="dropdown-item" href="propaga.php"><i class="fas fa-question"></i> ¿Cómo se propaga la COVID-19?</a>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link active" href="evitar_el_contagio.php" tabindex="-1" aria-disabled="true"><i class="fas fa-shield-virus"></i> Evite el contagio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="lucha.php" tabindex="-1" aria-disabled="true"><i class="fas fa-shield-virus"></i>Lucha contra el coronavirus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://coronavirus.app/map" target="_blank"><i class="far fa-hand-paper"></i> Coronavirus App</a>
                </li>
            </ul>
            <button type="button" id="switch" class="boton ml-auto">Cambiar Tema</button>
        </div>
    </nav>