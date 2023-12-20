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
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #262626;
            color: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .tl {
            display: flex;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .logo-container {
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

        .search-container {
            text-align: center;
            margin-top: 20px;
        }

        .search-container p {
            font-size: 16px;
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

        #content {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        #form {
            background-color: #262626;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            padding: 20px;
            max-width: 600px;
            width: 100%;
            margin: 20px;
        }

        #form fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }

        #form legend {
            color: #ffffff;
        }

        #form h2, #form h3 {
            color: #00bfff;
        }

        #form label {
            display: block;
            margin-bottom: 10px;
        }

        #form input,
        #form select,
        #form textarea {
            width: calc(100% - 16px);
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #333;
            color: #ffffff;
        }

        #form input[type="submit"] {
            background-color: #00bfff;
            color: #ffffff;
            cursor: pointer;
            box-shadow: #161616;
        }

        footer {
            background-color: #262626;
            color: #ffffff;
            padding: 20px;
            text-align: center;
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

  <div id="content">
    <form action="/atualizar-servico/{{$servico->id}}" id="form" method="POST">
        @csrf
        @method("PUT")
        <fieldset>
            <legend><h2>Cadastrar serviço</h2></legend>
            <h3>Dados do Serviço</h3>
            <label for="Servico">Serviço<br><input type="text" required id="Servico" placeholder="Digite o tipo de serviço" name="servico" value="{{$servico->servico}}"</label><br>
            <br>
            <label for="provincia">Escolha a província:<br></label>
            <select name="provincia" id="provincia" value="{{$servico->provincia}}">
                <option value="Bengo">Bengo</option>
                    <option value="Benguela">Benguela</option>
                    <option value="Bié">Bié</option>
                    <option value="Cabinda">Cabinda</option>
                    <option value="Cuando Cubango">Cuando Cubango</option>
                    <option value="Cuanza Norte">Cuanza Norte</option>
                    <option value="Cuanza Sul">Cuanza Sul</option>
                    <option value="Cunene">Cunene</option>
                    <option value="Huambo">Huambo</option>
                    <option value="Huíla">Huíla</option>
                    <option value="Luanda">Luanda</option>
                    <option value="Lunda Norte">Lunda Norte</option>
                    <option value="Lunda Sul">Lunda Sul</option>
                    <option value="Malanje">Malanje</option>
                    <option value="Moxico">Moxico</option>
                    <option value="Namibe">Namibe</option>
                    <option value="Uíge">Uíge</option>
                    <option value="Zaire">Zaire</option>
            </select> <br><br>
            <label for="Endereco">Endereço<br><input required type="text" id="Endereco" placeholder="Endereço da instituição" name="endereco" value="{{$servico->endereco}}"></label>
            <br><br>
            <label for="Descricao">Descrição do Serviço <br><textarea required name="descricao" id="Descricao" cols="60" minlength="20" rows="5"  placeholder="Coloque a descrição do seu serviço aqui..." maxlength="250" value="{{$servico->descricao}}"></textarea></label><br>

            <h3>Documentos Requisitados</h3>
            <label for="BI">Bilhete de Identidade</label>
            <input type="checkbox" name="bilhete_identidade" id="BI" value="{{$servico->bilhete_identidade}}">
            <br><br>
            <label for="Fotografias">Fotografias</label>
            <input type="checkbox" name="fotografia" id="Foto" value="{{$servico->fotografia}}">
            <br><br>
            <label for="curriculum">Curriculum</label>
            <input type="checkbox" name="curriculum" id="curriculum" value="{{$servico->curriculum}}">
            <br><br>
            <input type="submit" value="Cadastrar">
        </fieldset>
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
