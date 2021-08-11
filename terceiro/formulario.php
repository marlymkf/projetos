<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form name="cadastro" action="cadastro.php" method="post">
                Nome:<br> <input type="text" name="nome" /> <br><br>

                Endereço:<br> <input type="number" name="endereco" /> <br><br>

                Cidade:<br> <input type="text" name="cidade" /> <br><br>

                <input type="submit" name="botao" value="Enviar" />
                <input type="reset" name="botao" value="Limpar" />


        </form><br>

        <form id="miltinForm" nome="miltinForm" action="xxxx" method="xxxx">

                <div>
                        <label for="nome">Nome: </label>
                        <input id="nome" type="text">
                </div>

                <div>
                        <label for="email">*E-mail:</label>
                        <input id="email" nome="email" type="text">
                </div>

                <div>
                        <label>Assunto</label>
                        <input name="subject" type="text">
                </div>

                <div>
                        <label for="comentario">*Comentários</label>
                        <textarea id="comentario" nome="comentario" cols="25" rows="7"></textarea>
                </div>

                <div>
                        <input nome="submit" type="submit" value="Enviar">
                        <input type="reset" value="Resetar">
                        <br>
                        *campos de preenchimento obrigatório
                </div>
        </form>

        <style>
                body {
                        background: rgb(250, 250, 250);
                        max-width:500px;
                        padding: 25px;
                        margin: auto;
                }

                #miltinForm {
                        background: #fff;
                        padding: 20px;
                        border: 1px solid #dbdbdb;
                }

                #miltinForm div {
                        margin-top: 5px;
                        font: 400 15px Arial, Verdana, Helvetica;
                        color: rgb(124, 124, 124)
                }
                #miltinForm label {
                        background: #fff;
                        color: rgb(124,124,124);
                        cursor: pointer;
                        padding: 3px;
                         
                }

                #miltinForm input, #miltinForm textarea {
                        background: rgb(250, 250, 250);
                        font: 100 15px Arial, Verdana, Helvetica;
                        color: rgb(124, 124, 124);
                        padding: 5px 5px;
                        line-height: 28px;
                        border: 1px solid #dbdbdb;
                        width: 100%;
                }
                #miltinForm input:focus, #miltinForm textarea:focus{
                        outline: none !important;
                        box-shadow: 0 08px rgb(158, 158, 158);
                }
                #miltinForm input:hover, #miltinForm textarea:hover{
                        border:1px dashed #000;

                }
                #miltinForm input[type="submit"] {
                        background:  rgb(150, 150, 150);
                        color: rgb(240, 240, 240);
                        cursor: pointer;
                }
                #miltinForm input[type="reset"] {
                        background:  rgb(184, 184, 184);
                        color: rgb(100, 100, 100);
                        cursor: pointer;

                }


        </style>


</body>

</html>