<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        div.email{
            margin-bottom: 20px;
        }
        
        div.f{
            text-align: center;
        }

        div.pw{
            margin-bottom: 20px;
        }

        input.email{
            padding: 3px;
        }

        input.pw{
            padding: 3px;
        }

        button.login{
            padding: 2px;
            padding-left: 15px;
            padding-right: 15px;

        }
    </style>
</head>
<body>
    <div class="f">
        <h1>Halaman Login</h1>
        <form action="login.php" method="POST">
            <div class="email">    
                <input class="email" type="email" name="email" id="email" placeholder="Masukkan Email" required>
            </div>
            <div class="pw">
                <input class="pw" type="password" name="password" id="password" placeholder="Masukkan Password" required>
            </div>
            <button class="login" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
