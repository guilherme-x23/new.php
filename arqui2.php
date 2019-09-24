<?php
 include("Conexao.php");

 $idprd = $_POST['id'];
 $sql = "select nome from produto where id = ?";
 $cp = $con->prepare($sql);
 $cp->bind_param('i',$idprd);
 $cp->execute();
 $cp->bind_result($nome);
 $cp->fetch();
 echo $nome;

?>