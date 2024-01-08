<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
        body {
            font-family: monospace;
            background-image: url('7.jpg');
            color: hotpink;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: hotpink;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5dc;
            border: 2px solid royalblue;
            border-radius: 5px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        }

        label {
            color: royalblue;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid royalblue;
            border-radius: 5px;
            background-color: #e6e6fa;
            color: royalblue;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: royalblue;
            color: #fff;
            padding: 10px 20px;
            border: 1px solid royalblue;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4169e1;
        }

        /* Tautan Daftar */
        p a {
            color: hotpink;
            text-decoration: line-through;
        }

        p a:hover {
            text-decoration: underline;
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
    <h2><center>Silahkan Login</center></h2>
    <form method="post" action="proses.php">
        <fieldset>
            <p>
                <label for="login_username">Username:</label>
                <input type="text" name="login_username" required>
            </p>
            <p>
                <label for="login_password">Password:</label>
                <input type="password" name="login_password" required>
            </p>
            <p>
                <input type="submit" name="login" value="Login">
            </p>
        </fieldset>
    </form>
    <p><center>Belum punya akun? <a href="register.php">Daftar di sini</a></center></p>
</body>
</html>
