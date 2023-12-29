<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100&family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
    <nav class="navbar bg-">
        <div class="logo">
            <a href="/">
                <img src="/img/petlogo.png" alt="">
            </a>
            <h1>PetMania</h1>
        </div>
        <div class="menu">
            <a href="/pacientes/create" class="btn btn-primary" id="button-nav">Cadastrar Paciente</a>
            <a href="/meusservicos" class="btn btn-primary m-2" id="button-nav">Serviços</a>
            <a href="/atendimentos/show" class="btn btn-primary" id="button-nav">Atendimentos</a>
        </div>

    </nav>
<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session ('msg'))
                    <p class="msgfail"> {{ session('msg') }} </p>
                @endif
                @if (session ('concluido'))
                    <p class="msgconcluido"> {{ session('concluido') }} </p>
                @endif
                @if (session ('editar'))
                    <p class="msgeditar"> {{ session('editar') }} </p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>PetMania &copy; 2023</p>
    </footer>

</body>
</html>