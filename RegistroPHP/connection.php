<?php 

//variavél que defini o servidor, no caso de um server local, se usa 
//local host

$server = 'localhost';

//variavel pra definir o usuario, o padrão é root

$user = 'root'; 

//variavel pra senha, que por padrao é nula

$password = '';

//e por fim, a variavel para o banco de dados, que deve ser igual a 
//o nome do banco de dados alvo, no meu caso: needahero

$bd = 'needahero'; 


if ($conn = mysqli_connect($server, $user, $password, $bd) ) {
    // echo('conectado');
} else {
    echo('error' . mysqli->error);
}

//função para mostrar mensagem de sucesso ao cadastrar

function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>
            $texto
        </div>";
}



?>