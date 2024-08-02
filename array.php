<?php 
/*
    $dados_usuario = [
        'nome' => 'Ribino',
        'email' => 'foxanchieta@gmail.com',
        'idade' => '19',
        'cidade' => 'Cornélio procópio'
    ];

    echo $dados_usuario['idade'];
*/
/*
    $usuario = [
    [
        "nome" => 'Anna Aveiro Nakamura Dos Santos Moreira Cuccittini',
        "idade" => '17',
        "estado" => 'Tokio, Japao'
    ],

    [
        "nome" => "Rafaella",
        "idade" => "18",
        "estado" => "Brasilia, Brasil"
    ],

    [
        "nome" => "Ribino",
        "idade" => "19",
        "estado" => "Parana, Brasil"
    ]

    ];
        echo $usuario[1]["nome"];
*/
/*
    $frutas=[' ','banana','pera','tomate','goiaba'];
    $existe=array_search('banana' ,$frutas);

        if($existe != null){
            echo 'O valor existe';
        }else {
            echo 'O valor nao existe';
        }

    echo '<br/>' . $existe;
*/
    $frutas=[' ','banana','pera','tomate','goiaba'];
    $existe2=in_array('banana' ,$frutas);
    echo $existe2;
?>