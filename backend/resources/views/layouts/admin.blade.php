<!DOCTYPE html>
<html lang="pt-BR">
<head class="p-3 text-bg-dark>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>To do</title>
</head>
<body>
    <header class="p-3 text-bg-dark"> 
        
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"> 
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"> 
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap">

                        </use>
                    </svg> 
                </a> 
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"> 
                    <li><a href="{{route('task.index')}}" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="{{route('task.create')}}" class="nav-link px-2 text-white">Cadastrar</a></li>

                    
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form> <div class="text-end"> <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        
    </header>
    <div class="container"> 
        @yield('content')
    </div>
</body>
</html>