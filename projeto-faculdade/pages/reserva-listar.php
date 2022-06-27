<h1>Listar Reserva</h1>
<?php

$sql = "SELECT * FROM reserva AS a INNER JOIN aluno AS b ON a.aluno_id_aluno = b.id_aluno
INNER JOIN livro AS c ON a.livro_id_livro = c.id_livro
INNER JOIN atendente AS d ON a.atendente_id_atendente = d.id_atendente";

//select * from reserva as r inner join aluno as alu on r.aluno_id_aluno = alu.id_aluno inner join livro as l 
//on r.livro_id_livro = l.id_livro inner join atendente as ate on r.atendente_id_atendente = ate.id_atendente;

$res = $conn->query($sql) or die ($conn->error);

$qtd = $res->num_rows;

print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
   if ($qtd > 0){ 
    print "<table class='table table-striped table-hover table-bordered'>";
    print "<tr>";
    
    print "<th>Aluno</th>";
    print "<th>Livro</th>";
    print "<th>Atendente</th>";
    print "<th>Emprestimo</th>";
    print "<th>Devolução</th>";
    print "</tr>";
     while ($row = $res->fetch_object()) {
       
         print "<tr>";
         print "<td>".$row->nome_aluno."</td>";
         print "<td>".$row->titulo_livro."</td>";
         print "<td>".$row->nome_atendente."</td>";
         print "<td>".$row->data_emprestimo."</td>";
         print "<td>".$row->data_devolucao."</td>";
         
       
     }
       print "</table>";
 }else{
     print "<div class= 'alert alert-danger'> Não há resultados</div>";
 }


?>