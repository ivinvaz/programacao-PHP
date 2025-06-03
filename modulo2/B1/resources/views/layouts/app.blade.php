<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu App Laravel - @yield('titulo')</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { width: 80%; margin: 20px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        header { background-color: #333; color: #fff; padding: 10px 0; text-align: center; }
        nav ul { list-style: none; padding: 0; text-align: center; background-color: #e2e2e2; padding: 10px; }
        nav ul li { display: inline; margin: 0 15px; }
        nav ul li a { text-decoration: none; color: #333; font-weight: bold; }
        footer { text-align: center; padding: 20px; margin-top: 30px; background-color: #eee; color: #666; }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Meu App</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/itens">Itens</a></li>
            <li><a href="/contato">Contatos</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('conteudo')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Meu App Laravel. Todos os direitos reservados.</p>
    </footer>
</body>
</html>