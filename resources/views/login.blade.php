<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Georgia", serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            width: 700px;
            border-radius: 15px;
            overflow: hidden;
            background-color: #0F4C5C;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .side-logo {
            width: 40%;
            background-color: #0F4C5C;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .logo img {
            width: 120px;
            height: auto;
        }

        .login-form {
            width: 60%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #0F4C5C;
        }

        h1 {
            text-align: center;
            color: #fdf5e6;
            font-size: 24px;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            text-align: center;
            background-color: #fdf5e6;
            color: #0F4C5C;
            outline: none;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #fdf5e6;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            color: #0F4C5C;
            font-weight: bold;
            text-align: center;
        }

        .login-button:hover {
            background-color: #E0E0E0;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
            color: #fdf5e6;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="side-logo">
            <div class="logo">
                <img src="Logo VoyadeRide.png">
            </div>
        </div>
        <div class="login-form">
            <h1>Login</h1>
            @if ($errors->any())
                <div style="color: red;">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="login-button" onclick="landing.blade.php">Login</button>
            </form>
            <p class="register-link" onclick="window.location.href='{{ route('register') }}'">Register</p>
        </div>
    </div>
</body>
</html>
