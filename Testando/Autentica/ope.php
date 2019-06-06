<?php 

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysqli_connect("127.0.0.1", "root",
    "", "banco_exemplo",3306)
or die ("Sem conexão com o servidor");

if (!$con) {
    echo 'Falha na conex�o com o banco de dados: ' . mysqli_error($con);
 }

$sql=sprintf("SELECT * FROM PESSOA WHERE NOME = '$login' AND SENHA = '$senha'");

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0)
{
      $_SESSION['login'] = $login;
      $_SESSION['senha'] = $senha;
      header('location:site.php');

}
else{
      unset ($_SESSION['login']);
      unset ($_SESSION['senha']);
      header('location:index.php');

  }
?>