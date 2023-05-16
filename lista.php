<h1>LISTAR USUARIOS</h1>

<?php

$sql = "SELECT * FROM usuario";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {

    print "<table class='table table-hover table-striped table-bordered'>";

    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Accao</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->data_nascimento . "</td>";
        print "<td> 
                       <button onclick=\" location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-sucess'>Editar</button> 

                       <button onclick=\" if(confirm('Tem cereteza que deseja excluir?')) { location.href='?page=editar&id=" . $row->id . "';} else {false;}\" class='btn btn-danger'>Apagar</button>
               </td>";
        print "</tr>";
    }
    print "</table>";
} else {

    print "<p class='alert alert-danger'> Nao encontrou resultados</p>";
}
?>