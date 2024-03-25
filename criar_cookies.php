
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>XXXXXXXXXXXX Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "****************ENTROU";

                $user = $_POST["user"];
                $password = $_POST["password"];
                $cor = $_POST["cor"];

                if((setcookie('user',$user,time()+86400)) && //1 dia
                (setcookie('password',$password,time()+86400*10)) && //10 dias
                (setcookie('cor',$cor,time()+86400*0.5))){ //12horas
                    //A função header do PHP serve para definir ou modificar as diretivas
                    //do cabeçalho HTTP de uma mensagem de resposta d servidor para o cliente
                    header("location: excluir_cookie.php");
                }else{
                    echo "Falha ao criar o cookie!!!";
                }
            ?>
        </div>
    </body>
</html>