<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;300;400;500&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kodchasan:ital,wght@0,300;1,200;1,300&family=Montserrat:ital,wght@0,200;0,300;0,800;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Parisienne&family=Playball&family=Poppins:ital,wght@0,100;0,200;0,300;0,800;0,900;1,100;1,200;1,300&family=Roboto+Condensed:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100;1,100&family=Roboto:ital,wght@0,100;0,300;1,100&family=Rubik+Beastly&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>How to Use Charts.JS in Laravel 9? - Mywebtuts.com</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Mono', monospace;
    }
    h1{
        text-align: center;
        font-size:35px;
        font-weight:900;
    }
</style>
    
<body>
    <h1>How to Use Charts.JS in Laravel 9 - LaravelTuts.com</h1>
    <canvas id="myChart" height="100px"></canvas>
    <div>{{$jsonData}}</div>
</body>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labels =  ['monday', 'tuesday', 'wed', 'thursday'];
    var users =  {{ Js::from($jsonData) }};
  console.log({{$jsonData}})
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [{x: 0, y: 369},
               {x: 1, y: 438},
               {x: 2, y: 329},
               {x: 3, y: 435},
               {x: 4, y: 359},
               {x: 5, y: 345},
               {x: 6, y: 406},
               {x: 7, y: 469},
               {x: 8, y: 457},
               {x: 9, y: 499},
               {x: 10, y: 352},
               {x: 11, y: 336},
               {x: 12, y: 480},
               {x: 13, y: 499},
               {x: 14, y: 354}]
        }]
    };
  
    const config = {
        type: 'line',
        data: data,
        options: {}
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
  
</script>
</html>