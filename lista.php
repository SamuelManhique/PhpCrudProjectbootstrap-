<h1>LISTAR USUARIOS</h1>

<?php

$sql = "SELECT * FROM usuario";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {

    print "<table class='table table-hover table-striped table-bordered'>";

    print "<tr>";
    print "<td>" . $row->id . "</td>";
    print "<td>" . $row->nome . "</td>";
    print "<td>" . $row->email . "</td>";
    print "<td>" . $row->data_nascimento . "</td>";
    print "</tr>";
    print "</table>";
} else {

    print "<p class='alert alert-danger'> Nao encontrou resultados</p>";
}
?>