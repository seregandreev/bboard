<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/styles/main.css" rel="stylesheet" type="text/css">
    <title>@yield('title') :: Объявления</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="nav justify-content-start">
                <a href="{{ route('index') }}" class="navbar-brand mr-auto ">Главная</a>
                @auth
                <a href="{{ route('home') }}" class="nav-item nav-link">Мои объявления</a>
                @endauth
            </div>
            <div class="nav justify-content-end">
                @guest
                <a href="{{ route('register') }}" class="nav-item nav-link ">Регистрация</a>
                <a href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
                @endguest
                @auth
                <form action="{{ route('logout') }}" method="POST" class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Выход">
                </form>
                @endauth
            </div>
        </nav>
        <h1 class="my-3 text-center">Доска объявлений</h1>
        @yield('main')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>