
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animal Library</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7f2;
            color: #26352b;
        }

        header {
            background: #285943;
            color: white;
            padding: 22px;
            text-align: center;
        }

        nav {
            background: #1e4433;
            padding: 15px;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            color: #bce5c9;
        }

        main {
            max-width: 1100px;
            width: 92%;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            min-height: 350px;
        }

        footer {
            background: #285943;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        @media (max-width: 600px) {
            nav {
                gap: 12px;
            }

            main {
                margin: 15px auto;
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Animal Library</h1>
        <p>Discover the animals of István Fekete's novels</p>
    </header>

    <nav>
        <a href="/">Mainpage</a>
        <a href="/database">Database</a>
        <a href="/contact">Contact</a>
        <a href="/graph">Graph</a>

        @auth
            <a href="/messages">Messages</a>

            @if(auth()->user()->isAdmin())
                <a href="/crud">CRUD</a>
            @endif

            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Animal Library Project | Created by: Chika Chinedu David  and Aiana Usubalieva</p>
        <p>Neptun codes:BYQJBV and GOXWA1 </p>
           <p>© {{ date('Y') }} Animal Library Project</p>
    </footer>

</body>
</html>
