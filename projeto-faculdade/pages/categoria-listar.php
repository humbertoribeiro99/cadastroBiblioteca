<h1>Listar Categoria</h1>
<?php

$sql = "SELECT * FROM categoria";

$res = $conn->query($sql) or die ($conn->error);

$qtd = $res->num_rows;

print "<p> Encontrou <b>$qtd</b> resultado(s)</p>";
if ($qtd > 0){ 
   print "<table class='table table-striped table-hover table-bordered'>";
   print "<tr>";
   print "<th>#</th>";
   print "<th>Categoria</th>";
   print "<th>Ações</th>";
   print "</tr>";
    while ($row = $res->fetch_object()) {
      
        print "<tr>";
        print "<td>".$row->id_categoria."</td>";
        print "<td>".$row->nome_categoria."</td>";
        
        print "<td>
               <button class='btn btn-success' onclick=\"location.href='?page=categoria-editar&id_categoria=".$row->id_categoria."';\">Editar</button>
               <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=categoria-salvar&acao=excluir&id_categoria=".$row->id_categoria."';}else{false;}\">Excluir</button>
        </td>";
        print "</tr>";
      
    }
      print "</table>";
}else{
    print "<div class= 'alert alert-danger'> Não há resultados</div>";
}
?>