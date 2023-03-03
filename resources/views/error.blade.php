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
        }
        .antialiased{
            background: url("404.jpg") center/cover;
            height: 100vh;
            overflow: hidden;
            padding: 20px;
            box-sizing: border-box;
        }

        h1{
            text-align: center;
            margin-top: 20vh;
            margin-bottom: 30px;
            font-family: 'Tilt Neon', cursive;
        }

        p{
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Tilt Neon', cursive;
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
            font-family: 'Tilt Neon', cursive;
        }
    </style>
        <h1>💕 Laravel - Crush 💕</h1>

        <div>
            <p>Oupss! Cette page n'existe pas ou le message c'est autodétruit !</p>
            <a href="/">Envoyer un message</a>
        </div>

    </body>
</html>
