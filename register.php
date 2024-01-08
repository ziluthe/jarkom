<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('1.jpg');
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: gold;
            color: black;
            text-align: center;
            padding: 10px;
        }

        h2 {
            color: olive;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: black;
            border: 2px solid gold;
            border-radius: 5px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        }

        label {
            color: gold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid gold;
            border-radius: 5px;
            background-color: #808000;
            color: gold;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: gold;
            color: black;
            padding: 10px 20px;
            border: 1px solid gold;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ffd700;
        }

        /* Media query untuk responsif */
        @media only screen and (max-width: 600px) {
            form {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <h2>Silahkan Registrasi</h2>
    </header>
    <form method="post" action="proses.php">
        <fieldset>
            <p>
                <label for="register_id">ID:</label>
                <input type="text" name="register_id" required>
            </p>
            <p>
                <label for="register_username">Username:</label>
                <input type="text" name="register_username" required>
            </p>
            <p>
                <label for="register_password">Password:</label>
                <input type="password" name="register_password" required>
            </p>
            <p>
                <input type="submit" name="register" value="Registrasi">
            </p>
        </fieldset>
    </form>
</body>
</html>
