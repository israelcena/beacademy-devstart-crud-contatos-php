<div class="container mt-3">
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($contacts as $i => $contact) {
        $contactInfos = explode(",", $contact);
        echo "<tr>";
        echo '<th scope="row">' . $i + 1 . '</th>';
        echo "<td>{$contactInfos[0]}</td>";
        echo "<td>{$contactInfos[1]}</td>";
        echo "<td>{$contactInfos[2]}</td>";
        echo '<td class="d-block me-auto"><a href="/edit?id=' . $i . '" class="btn btn-primary btn-sm me-2">Editar</a><a href="/delete?id=' . $i . '" class="btn btn-danger btn-sm">Excluir</a></td>';
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>