<?php
//print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email'])&& !empty($_POST['senha']))
{
    //ACESSAR O SISTEMA
    include_once('config.php');
    $email= $_POST['email'];
    $senha= $_POST['senha'];

  /*print_r('Email:'. $email);
    print_r('<br>');
    print_r('Senha:' .$senha);*/
    $sql=  "SELECT * FROM cadastro_users WHERE email='$email'='$email' and senha='$senha'";
    $result= $conexao-> query($sql);
    print_r($sql);

}else{
    //não acessa 
    header('Location: login.php');   
}