<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            padding: 0;
            margin: 0;
            line-height: 1.5;    
            background-color: #021024;
        }
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 3px;
            position: fixed;
            width: 100%;
            top: 0;
            background-color: #021024;
            z-index: 1000;
            justify-content: flex-start;
        }
        nav img {
            width: 120px;
            margin: 10px;
        }
        nav ul {
            display: flex;
            list-style: none;
            padding: none;
            margin: 0;
        }
        nav ul ul > a {
            display: block;
            position: relative;
            padding: 20px 15px 10px 15px;
            text-decoration: none;
            color: white;
        }
        nav ul ul .link::before {
            content: '';
            position: absolute;
            display: block;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            transform: scaleX(0);
            transition: transform 0.3s ease;
            background-color: white;
        }
        nav ul ul .link:hover:before {
            transform: scaleX(1);
        }
        header {
            width: 100%;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            width: 100%;
            padding-top: 120px; 
            overflow-y: auto; 
            max-height: calc(100vh - 80px);
        }
        .area {
            background-color: #f0f0f0;
            border: 2px solid #cccccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            text-align: center;
            width: 100%;
        }
        .area h1 {
            color: #333333;
        }
        .area p {
            color: #666666;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-family: 'Times New Roman', Times, serif;
        }
        input[type="range"] {
            width: 100%;
        }
        .range-labels {
            display: flex;
            justify-content: space-between;
            margin-top: -10px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <img src="Logo.png">
            <ul>
                <ul><a href="index.php" class="link">Inicio</a></ul>
                <ul><a href="" class="link">Información</a></ul>
                <ul><a href="" class="link">Contacto</a></ul>
                <ul><a href="formulario.php" class="link">Formulario</a></ul>
                <ul><a href="" class="link">Acerca de</a></ul>
            </ul>
        </nav>
    </header>
    <div class="content">
        <div class="area">
            <h1>Evaluación del servicio</h1>
            <form id="evaluationForm">
                <div class="form-group" id="question1">
                    <label for="range1">1.-¿Que tan satisfecho está con la limpieza del vehículo? (0: Nada satisfecho, 10: Muy satisfecho)</label>
                    <input type="range" id="range1" name="range1" min="0" max="10">
                    <div class="range-labels">
                        <span>0</span>
                        <span>10</span>
                    </div>
                </div>
                <div class="form-group" id="question2">
                    <label for="range2">2.-¿Cómo calificaría la puntualidad en la entrega del vehículo? (0: Muy mala, 10: Excelente)</label>
                    <input type="range" id="range2" name="range2" min="0" max="10">
                    <div class="range-labels">
                        <span>0</span>
                        <span>10</span>
                    </div>
                </div>
                <div class="form-group" id="question3">
                    <label for="range3">3.-¿Le brindaron ayuda para trasladarse a su casa?</label>
                    <input type="range" id="range3" name="range3" min="0" max="2">
                    <div class="range-labels">
                        <span>No</span>
                        <span>No requería</span>
                        <span>Sí</span>
                    </div>
                </div>
                <div class="form-group" id="question4">
                    <label for="range4">4.-¿Le brindaron ayuda para trasladarse de su casa a la agencia?</label>
                    <input type="range" id="range4" name="range4" min="0" max="2">
                    <div class="range-labels">
                        <span>No</span>
                        <span>No requería</span>
                        <span>Sí</span>
                    </div>
                </div>
                <div class="form-group" id="question5">
                    <label for="range5">5.-¿Qué tan satisfecho está con la calidad del trabajo realizado en el vehículo? (0: Nada satisfecho, 10: Muy satisfecho)</label>
                    <input type="range" id="range5" name="range5" min="0" max="10">
                    <div class="range-labels">
                        <span>0</span>
                        <span>10</span>
                    </div>
                </div>
                <div class="form-group" id="question6">
                    <label for="range6">6.-¿Cómo evaluaría la actitud y amabilidad del personal de servicio? (0: Muy mala, 10: Excelente)</label>
                    <input type="range" id="range6" name="range6" min="0" max="10">
                    <div class="range-labels">
                        <span>0</span>
                        <span>10</span>
                    </div>
                </div>
                <div class="form-group" id="question7">
                    <label for="range7">7.-¿Qué tan claro y comprensible fue el proceso de explicación del servicio realizado? (0: Nada claro, 10: Muy claro)</label>
                    <input type="range" id="range7" name="range7" min="0" max="10">
                    <div class="range-labels">
                        <span>0</span>
                        <span>10</span>
                    </div>
                </div>
                <div class="form-group" id="question8">
                    <label for="range8">8.-¿Qué tan satisfecho está con la relación calidad-precio del servicio recibido? (0: Nada satisfecho, 10: Muy satisfecho)</label>
                    <input type="range" id="range8" name="range8" min="0" max="10">
                    <div class="range-labels">
                        <span>0</span>
                        <span>10</span>
                    </div>
                </div>
                <div class="form-group" id="question9">
                    <label for="range9">9.-¿Cómo calificaría la rapidez del servicio? (0: Muy lenta, 10: Muy rápida)</label>
                    <input type="range" id="range9" name="range9" min="0" max="10">
                    <div class="range-labels">
                        <span>0</span>
                        <span>10</span>
                    </div>
                </div>
                <div class="form-group" id="question10">
                    <label for="range10">10.-¿Se resolvieron todos los problemas del vehículo como esperaba? (0: Nada satisfecho, 10: Muy satisfecho)</label>
                    <input type="range" id="range10" name="range10" min="0" max="2">
                    <div class="range-labels">
                        <span>No</span>
                        <span>Por el momento si</span>
                        <span>Si</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
