<?php

session_start();



// VARIAVEL QUE VERIFICA SE A AUTENTICAO FOI REALIZADA
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = [
    1 => 'Administrativo', 2 => 'Usúario'
];

//USUARIOS DO SISTEMA
$usuarios_app = [
    array('id' =>1, 'email' => 'rillary@adm.com', 'senha' => '12345', 'perfil_id' => 1),
    array('id' =>2,'email' => 'danilo@teste.com', 'senha' => 'abcde' , 'perfil_id' => 2),
    array('id' =>3,'email' => 'bruna@teste.com', 'senha' => 'frubana', 'perfil_id' => 2),
    array('id' =>4,'email' => 'leonardo_holanda1999@hotmail.com', 'senha' => 'Orabolas22', 'perfil_id' => 1)
];

/*
echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
*/

foreach($usuarios_app as $user){
   
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }  
}

if ($usuario_autenticado == true){
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
} else {
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'NAO';
}


// ------ REQUISIÇÃO $_GET ---------
/*
    print_r($_GET);

    echo '<hr/>';

    echo $_GET['email'];
    echo '<br/>';
    echo $_GET['senha'];
*/


// ------ REQUISIÇÃO $_POST --------
/*
    print_r($_POST);

    echo '<br/>';

    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha']
*/
?>
