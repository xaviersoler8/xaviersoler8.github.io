<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World & Dinosaur Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        #dino-game {
            display: none;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f7f7f7;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <h1>Hello, World!</h1>
    
    <canvas id="dino-game"></canvas>
    
    <script>
        // Google Chrome Dinosaur Game
        var canvas = document.getElementById('dino-game');
        var ctx = canvas.getContext('2d');

        var dino = {
            x: 50,
            y: 150,
            width: 50,
            height: 50,
            draw: function() {
                ctx.fillStyle = 'green';
                ctx.fillRect(this.x, this.y, this.width, this.height);
            }
        };

        function gameLoop() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            dino.draw();
            requestAnimationFrame(gameLoop);
        }

        gameLoop();
    </script>
</body>
</html>


