<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
    <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
</head>
<body>

    <div class="background">
    
    </div>






    <section id="conteudo-view" class="login">
       
       <h1>Login</h1>
       <h3>Acesse o sistema</h3>
      
      
        {!! Form::open(['route' => 'user.login','method' => 'post']) !!}


    <label>
        {!! Form::text('username', null,['class'=>'input','placeholder'=>"usuario"]) !!}
    </label>
    <label>
       {!! Form::password('password',['placeholder'=>"senha"]) !!}
    </label>
    {!! Form::submit('Entrar') !!}
    
    {!!Form::close() !!}

    </section>



</body>
</html>