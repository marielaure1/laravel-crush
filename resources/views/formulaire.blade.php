<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>💕 Laravel - Crush 💕</title>

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">

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
            padding: 20px;
            box-sizing: border-box;
        }

        h1{
            text-align: center;
            margin-top: 10vh;
            margin-bottom: 30px;
        }

        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            border: none;
            box-shadow: none;
            max-width: 100%;
        }

        form div{
            width: 100%;
            
        }

        input, textarea{
            width: 100%;
            padding: 20px;
            outline: none;
            border: none;
        }

        input::placeholder, textarea::placeholder{
            font-family: 'Tilt Neon', cursive;
        }

        button{
            background-color: #F92F60;
            border: none;
            font-family: 'Tilt Neon', cursive;
        }

        p{
            font-size: 20px;
            font-weight: 600;
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

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
   
        <form method="POST">
        @csrf
            <input type="hidden" name="token" value="dfd">
            <div>
                <input type="email" placeholder="Email du destinataire" name="email" value="{{ old('email') }}">
                
                <p class="error"></p>
            </div>
            <div>
                <textarea name="message" id="message" placeholder="Message" cols="30" rows="10">{{ old('message') }}</textarea>
                <p class="error"></p>
            </div>
            <div>
                <button type="submit">Envoyer</button>
            </div>

        </form>

        

    </body>
</html>
