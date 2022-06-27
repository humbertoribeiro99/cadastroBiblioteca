<?php
 switch ($_REQUEST["acao"]) {
     case 'cadastrar':
         $aluno =        $_POST["aluno_id_aluno"];
         $livro =        $_POST["livro_id_livro"];
         $atendente=     $_POST["atendente_id_atendente"];
         $emprestimo =   $_POST["data_emprestimo"];
         $devolucao =    $_POST["data_devolucao"];
         

         $sql = "INSERT INTO reserva(aluno_id_aluno,livro_id_livro,atendente_id_atendente,data_emprestimo,data_devolucao) 
                 VALUES ('{$aluno}','{$livro}','{$atendente}','{$emprestimo}','{$devolucao}')";
         $res = $conn->query($sql) or die($conn->error);

         if ($res==true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=reserva-listar';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=reserva-listar';</script>";
         }
         break; 

        }

        ?>