<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Login | Emoji Blast</title>
    <style>
        body { margin: 0; background: radial-gradient(circle, #1a0033, #000); height: 100vh; display: flex; justify-content: center; align-items: center; font-family: sans-serif; overflow: hidden; }
        .login-card { background: rgba(255, 255, 255, 0.05); padding: 40px; border-radius: 20px; border: 2px solid cyan; box-shadow: 0 0 30px cyan; width: 320px; text-align: center; backdrop-filter: blur(10px); }
        h2 { color: cyan; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 30px; }
        input { width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #444; background: rgba(0,0,0,0.5); color: white; box-sizing: border-box; outline: none; }
        input:focus { border-color: #ff007f; box-shadow: 0 0 10px #ff007f; }
        .btn { width: 100%; padding: 15px; border: none; border-radius: 8px; background: linear-gradient(45deg, #ff007f, #8000ff); color: white; font-weight: bold; cursor: pointer; transition: 0.3s; }
        .btn:hover { transform: scale(1.05); box-shadow: 0 0 20px #ff007f; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>LOGIN</h2>
        <!-- Ye data 'process.php' ko bhejega -->
        <form action="process.php" method="POST">
            <input type="text" name="username" placeholder="Gamer Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">START GAME 🚀</button>
        </form>
    </div>
</body>
</html>
