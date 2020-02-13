<main role="main" class="container">
    <div class="starter-template">
      <h1>Affichage de la liste des employés</h1>
    </div>

<!--
  8 =>
    object(stdClass)[13]
      public 'EmployeeID' => string '9' (length=1)
      public 'ContactID' => string '1005' (length=4)
      public 'NationalIDNumber' => string '695256908' (length=9)
      public 'ETitle' => string 'Design Engineer' (length=15)
      public 'CTitle' => string 'Ms.' (length=3)
      public 'FirstName' => string 'Gail' (length=4)
      public 'MiddleName' => string 'A' (length=1)
      public 'LastName' => string 'Erickson' (length=8)
      public 'EmailAddress' => string 'gail0@adventure-works.com' (length=25)
      public 'HireDate' => string '1998-02-06 00:00:00' (length=19)
-->

  <div class="row">
    <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Contact #</th>
        <th scope="col">National #</th>
        <th scope="col">Titre</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Poste</th>
        <th scope="col">Date Embauche</th>
        <th scope="col">Mail</th>
        <th scope="col"><i class="fas fa-eye"></i></th>
        <th scope="col"><i class="fas fa-edit"></i></th>
        <th scope="col"><i class="fas fa-trash-alt"></i></th>

      </tr>
    </thead>
    <tbody>
    <?php foreach ($employeelist as $e){ ?>
      <tr>
        <td><?php if (isset($e->EmployeeID)) echo $e->EmployeeID; ?></td>
        <td><?php if (isset($e->ContactID)) echo $e->ContactID; ?></td>
        <td><?php if (isset($e->NationalIDNumber)) echo $e->NationalIDNumber; ?></td>
        <td><?php if (isset($e->CTitle)) echo $e->CTitle; ?></td>
        <td><?php if (isset($e->LastName)) echo $e->LastName; ?></td>
        <td><?php if (isset($e->FirstName)) echo $e->FirstName; ?></td>
        <td><?php if (isset($e->ETitle)) echo $e->ETitle; ?></td>
        <td><?php if (isset($e->HireDate)) echo date('d/m/Y',strtotime($e->HireDate)); ?></td>
        <td><?php if (isset($e->EmailAddress)) echo $e->EmailAddress; ?></td>
        <td><?php if (isset($e->EmployeeID)) echo '<a href="index.php?c=employee&m=view&id='.$e->EmployeeID.'" data-toggle="tooltip" title="Voir" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>';?></td>
        <td><?php if (isset($e->EmployeeID)) echo '<a href="index.php?c=employee&m=edit&id='.$e->EmployeeID.'" data-toggle="tooltip" title="Modifier" class="btn btn-warning  btn-sm"><i class="fas fa-edit"></i></a>';?></td>
        <td><?php if (isset($e->EmployeeID)) echo '<a href="index.php?c=employee&m=delete&id='.$e->EmployeeID.'" data-toggle="tooltip" title="Supprimer" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>';?></td>
      </tr>
    <?php }?>
    </tbody>
    </table>
  </div>
</main><!-- /.container -->