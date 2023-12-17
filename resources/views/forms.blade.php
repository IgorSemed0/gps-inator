<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARF</title>

<style>
    body {
        background-color: #1a1a1a;
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    #form {
        background-color: #262626;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        padding: 20px;
        max-width: 600px;
        width: 100%;
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
        width: 100%;
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




</style>

</head>
<body>
    <form action="/cadastrar-servico" id="form" method="POST">
        @csrf
        <fieldset>
            <legend><h2>Cadastrar serviço</h2></legend>
            <h3>Dados do Serviço</h3>
            <label for="Servico">Serviço<br><input type="text" required id="Servico" placeholder="Digite o tipo de serviço" name="servico"></label><br>
            <br>
            <label for="provincia">Escolha a província:<br></label>
            <select name="provincia" id="provincia">
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
            <label for="Endereco">Endereço<br><input required type="text" id="Endereco" placeholder="Endereço da instituição" name="endereco"></label>
            <br><br>
            <label for="Descricao">Descrição do Serviço <br><textarea required name="descricao" id="Descricao" cols="60" minlength="20" rows="5"  placeholder="Coloque a descrição do seu serviço aqui..." maxlength="250"></textarea></label><br>

            <h3>Documentos Requisitados</h3>
            <label for="BI">Bilhete de Identidade</label>
            <input type="checkbox" name="bi" id="BI">
            <br><br>
            <label for="Fotografias">Fotografias</label>
            <input type="checkbox" name="fotografia" id="Foto">
            <br><br>
            <label for="curriculum">Curriculum</label>
            <input type="checkbox" name="curriculum" id="curriculum">
            <br><br>
            <input type="submit" value="Cadastrar">
        </fieldset>

    </form>
</body>
</html>
