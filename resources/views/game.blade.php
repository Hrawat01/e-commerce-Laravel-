<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Move Game</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      background: #111;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: white;
      font-family: sans-serif;
    }

    .game-area {
      position: relative;
      width: 400px;
      height: 200px;
      border: 2px solid #fff;
      overflow: hidden;
    }

    .player {
      position: absolute;
      bottom: 10px;
      left: 180px;
      width: 40px;
      height: 40px;
      background: red;
      transition: left 0.2s, top 0.2s;
    }

    .controls {
      margin-top: 20px;
      text-align: center;
    }

    button {
      padding: 10px 20px;
      margin: 0 10px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div>
    <div class="game-area">
      <div id="player" class="player">you</div>
    </div>
    <div class="controls">
      <button onclick="moveLeft()">⬅ Left</button>
      <button onclick="moveUp()">⬆ Up</button>
      <button onclick="moveRight()">Right ➡</button>
      <button onclick="moveDown()">⬇ Down</button>
    </div>
  </div>

  <script>
    const player = document.getElementById('player');
      const gameArea = document.querySelector('.game-area');

    let xPosition = 180; // horizontal
    let yPosition = 150; // vertical (start near bottom)

    function moveLeft() {
      if (xPosition > 0) {
        xPosition -= 20;
        player.style.left = xPosition + 'px';
      }
    }

    function moveRight() {
      if (xPosition < 360) { // 400 - player width (40)
        xPosition += 20;
        player.style.left = xPosition + 'px';
      }
    }

    function moveUp() {
      if (yPosition > 0) {
        yPosition -= 20;
        player.style.top = yPosition + 'px';
      }
    }

    function moveDown() {
      if (yPosition < 160) { // 200 - player height (40)
        yPosition += 20;
        player.style.top = yPosition + 'px';
      }
    }
    document.addEventListener('keydown', (event) => {
        console.log(event)
      switch(event.key) {
        case 'ArrowLeft':
        case 'a': // WASD option
          moveLeft();
          break;
        case 'ArrowRight':
        case 'd':
          moveRight();
          break;
        case 'ArrowUp':
        case 'w':
          moveUp();
          break;
        case 'ArrowDown':
        case 's':
          moveDown();
          break;
      }
    });


    gameArea.addEventListener('mousemove', (event) => {
    const rect = gameArea.getBoundingClientRect();
    
    let mouseX = event.clientX - rect.left;
    let mouseY = event.clientY - rect.top;

    // Center player on mouse
    xPosition = Math.min(Math.max(mouseX - player.offsetWidth / 2, 0), rect.width - player.offsetWidth);
    yPosition = Math.min(Math.max(mouseY - player.offsetHeight / 2, 0), rect.height - player.offsetHeight);

    player.style.left = xPosition + 'px';
    player.style.top = yPosition + 'px';
  });



  </script>
</body>
</html>