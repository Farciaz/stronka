<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz Rejestracji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .register-container {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        .register-container h2 {
            text-align: center;
        }
        .register-container input[type="text"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        .register-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .register-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Rejestracja</h2>
    <form action="register.php" method="post">
        <input type="text" name="username" placeholder="Nazwa użytkownika" required>
        <input type="password" name="password" placeholder="Hasło" required>
        <input type="password" name="confirm_password" placeholder="Potwierdź hasło" required>
        <input type="submit" value="Zarejestruj">
    </form>
</div>

</body>
</html>
