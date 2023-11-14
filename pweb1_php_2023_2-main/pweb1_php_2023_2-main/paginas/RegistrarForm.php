<?php
 include './header.php';
 include '../db.class.php';
?>

<?php
  $db = new DB();
  $db->conn();

  if(!empty($_POST['id'])){
    $db->update("usuario",$_POST);
    header("location: Usuario.php");

  } else if($_POST){
    $db->insert("usuario",$_POST);
    header("location: Usuario.php");
  }

  if(!empty($_GET['id'])){
    $usuario = $db->find("usuario", $_GET['id']);
    //var_dump($usuario);
  }
?>

    <h2> SIstema academico</h2>
    <h3>Formulário Registrar usuario</h3>

    <form action="usuarioForm.php" method="post">
        <input type="hidden" name="id" >
        
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" >

        <label for="cpf">CPF</label><br>
        <input type="text" name="cpf" >

        <label for="email">Email</label><br>
        <input type="text" name="email" >

        <label for="senha">Senha</label><br>
        <input type="text" name="senha" >

        <label for="c_senha">Confirmar Senha</label><br>
        <input type="text" name="C_senha" >

        <label for="telefone">Telefone</label><br>
        <input type="text" name="telefone"  >

        <button type="submit">Salvar</button>
        <a href="Usuario.php"> Voltar </a>

    </form>
<?php include "./footer.php" ?>
