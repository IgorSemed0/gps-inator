<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOC-GPS</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
        }

        #header {
            background-color: #262626;
            color: #ffffff;
        }

        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }

        header {
            background-color: #262626;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }
        .tl{
            display: flex;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .logo-container{
            margin-left: 10px;
        }

        .logo-container img {
            max-height: 24px;
        }

        nav {
            display: flex;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
            position: relative;
        }
        nav ul li.submenu ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #262626;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            width: 100%;
        }

        nav ul li.submenu:hover ul {
            display: flex;
            flex-direction: column;
        }

        nav ul li.submenu ul li {
            width: 100%;
        }

        nav a {
            text-decoration: none;
            color: #ffffff;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #00bfff;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #333;
            color: #ffffff;
        }

        .search-bar button {
            margin-left: 10px;
            padding: 8px;
            background-color: #00bfff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-container {
            text-align: center;
            margin-top: 20px;
        }

        .search-container h2 {
            font-size: 20px;
            color: #00bfff;
            margin-bottom: 5px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-bar input {
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #333;
            color: #ffffff;
        }

        .search-bar button {
            margin-left: 10px;
            padding: 8px;
            background-color: #00bfff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }



        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .content {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #333;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }

        .content h1 {
            color: #00bfff;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .content p {
            color: #ffffff;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        footer {
            background-color: #262626;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .copyright {
            flex-grow: 1;
        }

    </style>

</head>
<body>

    <header>
        <div class="tl">
            <div class="logo">DOC-GPS</div>
            <div class="logo-container">
                <img src="images/logo.png" alt="Logo">
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Início</a></li>
                <li class="submenu">
                    <a href="{{ route('servico') }}">Serviços</a>
                    <ul>
                        <li><a href="{{ route('forms') }}">Cadastrar</a></li>
                        <li><a href="{{ route('servico') }}">Encontrar</a></li>
                        <li><a href="{{ route('lista_servicos') }}">Editar Serviços</a></li>
                    </ul>
                </li>
                <li><a href="#">Suporte</a></li>
            </ul>
        </nav>
    </header>

  <section class="search-container">

    <h2>Encontre informações sobre serviços e seus requisitos em um só lugar!</p>
  </section>

  <section class="content">
    <h1>Bem-vindo ao DOC-GPS</h1>
    <p>O DOC-GPS é o seu guia online para facilitar o processo de obtenção de serviços. Imagine que você precisa tratar um documento, como a carteira de identidade. Geralmente, é necessário visitar o local duas vezes: uma para obter informações sobre os requisitos e outra para realizar o procedimento.</p>
    <p>No entanto, com o DOC-GPS, você pode evitar a segunda visita desnecessária. Nosso site oferece uma solução simples e eficiente. Basta pesquisar o serviço desejado para obter informações detalhadas sobre sua localização e requisitos. Simplificamos o caminho para você!</p>
  </section>

  <div class="search-container">
    <p>Encontrar Serviço</p>
    <form action="{{ route('pesquisar-servicos') }}" method="POST">
        @csrf
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar..." name="termo_pesquisa">
            <button type="submit">Buscar</button>
        </div>
    </form>

  </div>

  <footer>
    <div class="footer-content">
        <div class="copyright">
            <p>&copy; 2023 DOC-GPS. Todos os direitos reservados.</p>
        </div>
    </div>
  </footer>
</body>
</html>
