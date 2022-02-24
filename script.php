<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'o nome não pode ser vazio!';
    return;
}

if(strlen($nome) < 3)

{
    echo ' O nome deve ter mais de 3 caracteres!';
    return;
}

if(strlen($nome) > 40)
{
    echo 'Nome maior que permitido!';
    return;
}
if(!is_numeric($idade))
{
    echo 'Informe um número para idade.';
    return;
}
if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i].".";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolecente')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i].".";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome." compete na categoria  ".$categorias[$i].".";
    }
}
