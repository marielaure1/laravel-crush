<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>💕 Laravel - Crush 💕</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://unpkg.com/mvp.css@1.12/mvp.css"> 
    </head>
    <body class="antialiased">

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Tilt Neon', cursive;
        }
        .antialiased{
            background-color: #ffedf0;
            height: 100vh;
            padding: 20px 5vw;
            box-sizing: border-box;
        }

        h1, h2{
            text-align: center;
            margin-top: 10vh;
            margin-bottom: 30px;
        }

        p{
            font-size: 16px;
            text-align: center;
            margin-bottom: 20px;
        }

        div{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        a{
            font-weight: 500;
            padding: 8px 20px;
            background-color: rgb(255, 129, 179);
            color: white;
        }

    
    </style>
        <h1>💕 Laravel - Crush 💕</h1>

        <div>
            <h2>Message reçu à {{ $viewMessage->date }}</h2>
            <p>{{ $viewMessage->message }}</p>

            <a href="/">Envoyer un message</a>
        </div>
    </body>
</html>
