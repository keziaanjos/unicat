<h1>Listar gatos</h1>
<?php
  $sql = "SELECT * FROM gatos";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if ($qtd > 0) {
    print '<table class="table table-hover table-striped table-bordered">';
    print '<th>#</th>';
    print '<th>Nome</th>';
    print '<th>Idade</th>';
    print '<th>Sexo</th>';
    print '<th>Peso</th>';
    print '<th>Porte</th>';
    print '<th>Personalidade</th>';
    print '<th>Ações</th>';

    while($row = $res->fetch_object()) {
      print '<tr>';
      print '<td><img src="'.$row->imagem.'" style="width: 30px; height: 30px"></td>';
      print '<td>'.$row->nome .'</td>';
      print '<td>'.$row->idade .'</td>';
      print '<td>'.$row->sexo .'</td>';
      print '<td>'.$row->peso .'</td>';
      print '<td>'.$row->porte .'</td>';
      print '<td>'.$row->personalidade .'</td>';
      print "<td>
              <button onclick=\"location.href='?page=editar&id=". $row->id. " '\" class='btn btn-success'>Editar</button>
              <button onclick=\"if(confirm('tem certeza que deseja excluir ?')){location.href='?page=salvar&acao=excluir&id=". $row->id. " '}else{false}\" class='btn btn-danger'>Excluir</button
            </td>";
      print '</tr>';
    }
    print '</table>';
  } else {
    print '<p class="alert alert-danger">Não encontrou resultados</p>';
  }
?>