<?php 
  switch ($_REQUEST["acao"]) {
    case 'cadastrar':
      $nome = $_POST["nome"];
      $idade = $_POST["idade"];
      $sexo = $_POST["sexo"];
      $peso = $_POST["peso"];
      $porte = $_POST["porte"];
      $personalidade = $_POST["personalidade"];
      $imagem = $_POST["imagem"];

      $sql = "INSERT INTO gatos (nome, idade, sexo, peso, porte, personalidade, imagem) 
        VALUES ('{$nome}', {$idade}, '{$sexo}', {$peso}, '{$porte}', '{$personalidade}', '{$imagem}')";
        
      $res = $conn->query($sql);

      if ($res==true) {
        print "<script>alert('Cadastrado com sucesso');</script>";
        print "<script>location.href='?page=listar';</script>";
      } else {
        print "<script>alert('Não foi possível cadastrar');</script>";
        print "<script>location.href='?page=listar';</script>";
      }
      break;
    case 'editar':
      $nome = $_POST["nome"];
      $idade = $_POST["idade"];
      $sexo = $_POST["sexo"];
      $peso = $_POST["peso"];
      $porte = $_POST["porte"];
      $personalidade = $_POST["personalidade"];
      $imagem = $_POST["imagem"];

      $sql = "UPDATE gatos SET 
                nome='{$nome}',
                idade='{$idade}',
                sexo='{$sexo}',
                peso='{$peso}',
                porte='{$porte}',
                personalidade='{$personalidade}',
                imagem='{$imagem}'
              WHERE id=".$_REQUEST["id"];

      $res = $conn->query($sql);

      if ($res==true) {
        print "<script>alert('Editado com sucesso');</script>";
        print "<script>location.href='?page=listar';</script>";
      } else {
        print "<script>alert('Não foi possível editar');</script>";
        print "<script>location.href='?page=listar';</script>";
      }

      break;
    case 'excluir':
      $sql = "DELETE FROM gatos WHERE id=".$_REQUEST["id"];

      $res = $conn->query($sql);

      if ($res==true) {
        print "<script>alert('Excluído com sucesso');</script>";
        print "<script>location.href='?page=listar';</script>";
      } else {
        print "<script>alert('Não foi possível Excluir');</script>";
        print "<script>location.href='?page=listar';</script>";
      }
      break;
  }