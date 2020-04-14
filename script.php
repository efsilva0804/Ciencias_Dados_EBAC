<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
//$categorias[] = 'Master';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo  'O nome não pode ser vazio';
    return;
}

if(empty($idade))
{
    echo  'A idade não pode ser vazio';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve ter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome é muito extenso';
    return;
}

if(!is_numeric($idade))
{
    echo 'Informe um número para idade';
    return;
}

//var_dump($nome);
//var_dump($idade);
//return 0;

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Infantil')
            echo "O nadador ".$nome." compete na categoria Infantil";
    }
}
else if($idade >= 13 && $idade < 18)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adolescente')
            echo "O nadador ".$nome." compete na categoria Adolescente";
    }
}
else
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adulto')
            echo "O nadador ".$nome." compete na categoria Adulto";
    }
}
?>