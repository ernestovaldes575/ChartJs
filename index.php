<?php
    $Titulo1 = 'Ejemplo 01';
    $Titulo2 = 'Ejemplo 02';
    $Titulo3 = 'Ejemplo 03';
    $Titulo4 = 'Ejemplo 04';

    $Color1 = 'Verde';
    $Color2 = 'Rojo';
    $Color3 = 'Morado';
    $Color4 = 'Azul';
    $Color5 = 'Amarillo';
    $Color6 = 'Rojo';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* verde=#00c600, 
            amarillo=#ffff29, 
            rojo=#ff2f2f, 
            rojo canela=#a26a51 
            
        */
        *{
            margin: 0;
            padding: 0;
            background-color: #bbbbbb   ;
        }
        .contenedor{

            width: 100%;
            display: grid;
            place-items: center;
        }
        .contenedor-graph{
            width: 50%;
        }
        .contenedor div{
            margin-top: 5em;
            margin-bottom: 5em;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="contenedor-graph">
            <div>
                <canvas id="myChart"></canvas>
            </div>
            <div>
                <canvas id="myChart2"></canvas>
            </div>
            <div>
                <canvas id="myChart3"></canvas>
            </div>
            <div>
                <canvas id="myChart4"></canvas>
            </div>
            <div>
                <canvas id="myChart5"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        const ctx = document.getElementById('myChart');
        const ctx2 = document.getElementById('myChart2');
        const ctx3 = document.getElementById('myChart3');
        const ctx4 = document.getElementById('myChart4');
        const ctx5 = document.getElementById('myChart5');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Rojo', 'Azul', 'Amarillo', 'Verde', 'Morado', 'Naranja'],
                datasets: [{
                    label: '# of Votes',
                    data: [20, 50, 3, 15, 22, 3],
                    borderWidth: 4
                },{
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    label: '#Votes',
                    data: [12, 15, 3, 5, 2, 3],
                    borderWidth: 4
                }]
            },
            options: {
                // responsive:true,    
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animation:{
                    tension:{
                        durarion:30,
                        easing:'easeInBack',
                        from: 1,
                        to: 0,
                        loop:true
                    }
                }
            }
        });

        new Chart(ctx2, {
            type: 'polarArea',
            data: {
                //120,114,74 
                //120,114, 68, 6
                labels: ['Solicitudes','Termino','S/O','Falta'],
                datasets: [{
                    label: 'Ejemplo',
                    data: [120, 114, 68,6],
                    borderWidth: 5  
                }]
            },
            options: {
                layout:{
                    padding:50
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
        new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: ['Rojo', 'Azul', 'Amarillo', 'Verde', 'Morado', 'Naranja'],
                datasets: [{
                    label: 'Votos',
                    data: [50, 10, 20, 30, 40],
                    borderColor: '#ffd901',
                    backgroundColor: '#ffd901',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: 'Votos',
                    data: [50, 10, 20, 30, 40],
                    borderColor: '#1e00ff',
                    backgroundColor: '#1e00ff',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: 'Votos',
                    data: [50, 10, 20, 30, 40],
                    borderColor: '#bebebe',
                    backgroundColor: '#bebebe',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: 'Votos',
                    data: [50, 10, 20, 30, 40],
                    borderColor: '#ff0051',
                    backgroundColor: '#ff0051',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: 'Votos',
                    data: [50, 10, 20, 30, 40],
                    borderColor: '#',
                    backgroundColor: '#ff0051',
                    borderWidth: 2,
                    tension:0.2
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
            }
            }
        });

        new Chart(ctx4, {
            type: 'line',
            data: {
                labels: ['<?=$Color1?>', '<?=$Color2?>', '<?=$Color3?>', '<?=$Color4?>', '<?=$Color5?>', '<?=$Color6?>'],
                datasets: [{
                    label: '<?=$Titulo1?>',
                    data: [12, 19, 3, 5, 2, 3],
                    borderColor: '#ffd901',
                    backgroundColor: '#ffd901',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: '<?=$Titulo2?>',
                    data: [13, 9, 3, 2, 10, 13],
                    borderColor: '#1e00ff',
                    backgroundColor: '#1e00ff',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: '<?=$Titulo3?>',
                    data: [10, 30, 15, 2, 1, 13],
                    borderColor: '#bebebe',
                    backgroundColor: '#bebebe',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: '<?=$Titulo4?>',
                    data: [1, 9, 5, 12, 10, 3],
                    borderColor: '#ff0051',
                    backgroundColor: '#ff0051',
                    borderWidth: 2,
                    tension:0.2
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
            }
            }
        });
        new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: ['R2022','R2023','R2024'],
                datasets: [{
                    label: 'Recibidas',
                    data: [268,272,120],
                    borderColor: '#00c600',
                    backgroundColor: '#00c600',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: 'ConcluEdu',
                    data: [267,272,114],
                    borderColor: '#ffff29',
                    backgroundColor: '#ffff29',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: 'ConcluSE',
                    data: [-267,-271,68],
                    borderColor: '#ff2f2f',
                    backgroundColor: '#ff2f2f',
                    borderWidth: 2,
                    tension:0.2
                },{
                    label: 'Faltantes',
                    data: [1,0,6],
                    borderColor: '#a26a51',
                    backgroundColor: '#a26a51',
                    borderWidth: 2,
                    tension:0.2
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
            }
            }
        });
    </script>
</body>
</html>