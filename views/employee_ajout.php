<?php
function fAge($date) {
  $datetime1 = new DateTime("today");
  $datetime2 = new DateTime($date);
  $interval = $datetime2->diff($datetime1);
  return $interval->format('%y');
  }  ?>
<main role="main" class="container">
    <div class="starter-template">
      <h1>ajout d'un employé </h1>
    </div>

<!--
object(stdClass)[6]
  public 'EmployeeID' => string '270' (length=3)
  public 'NationalIDNumber' => string '56920285' (length=8)
  public 'ContactID' => string '1004' (length=4)
  public 'LoginID' => string 'adventure-works\sharon0' (length=23)
  public 'ManagerID' => string '3' (length=1)
  public 'Title' => null
  public 'BirthDate' => string '1951-06-03 00:00:00' (length=19)
  public 'MaritalStatus' => string 'M' (length=1)
  public 'Gender' => string 'F' (length=1)
  public 'HireDate' => string '2001-02-18 00:00:00' (length=19)
  public 'SalariedFlag' => string '1' (length=1)
  public 'VacationHours' => string '4' (length=1)
  public 'SickLeaveHours' => string '22' (length=2)
  public 'CurrentFlag' => string '1' (length=1)
  public 'rowguid' => string '�c���vK�����L' (length=16)
  public 'ModifiedDate' => string '2001-02-10 23:00:00' (length=19)
  public 'NameStyle' => string '0' (length=1)
  public 'FirstName' => string 'Sharon' (length=6)
  public 'MiddleName' => string 'B' (length=1)
  public 'LastName' => string 'Salavaria' (length=9)
  public 'Suffix' => null
  public 'EmailAddress' => string 'sharon0@adventure-works.com' (length=27)
  public 'EmailPromotion' => string '2' (length=1)
  public 'Phone' => string '970-555-0138' (length=12)
  public 'PasswordHash' => string 'C319012D5AA85B7AF4406D05C96463F34163154F' (length=40)
  public 'PasswordSalt' => string 'dhGWm88=' (length=8)
  public 'AdditionalContactInfo' => null
  public 'ETitle' => string 'Design Engineer' (length=15)
  public 'CTitle' => null
  public 'EMTitle' => string 'Engineering Manager' (length=19)
  public 'CMTitle' => null
  public 'CMFirstName' => string 'Roberto' (length=7)
  public 'CMMiddleName' => null
  public 'CMLastName' => string 'Tamburello' (length=10)
-->

  <br/>
  <div class="row">

  </div>
<form action="" method="post">
<div class="row form-group">
    <label class="col-md-4 control-label">ID:</label>
    <div class="col-md-8">
    <input type="text" name="EmployeeID" class="form-control" 
    placeholder="EmployeeID" value="">
</div>
  </div>
  <div class="row form-group">
    <label class="col-md-4 control-label">Numéro sécurité sociale :</label>
    <div class="col-md-8">
    <input type="text" name="NationalIDNumber" class="form-control" 
    placeholder="NationalIDNumber" value="">
</div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 control-label">LoginID </label>
    <div class="col-md-8">
    <input type="text" name="LoginID" class="form-control" 
    placeholder="LoginID" value="">
</div>
  </div>


  <div class="row form-group">
    <label class="col-md-4 control-label">Date de naissance :</label>
    <div class="col-md-8">
    <input type="text" name="BirthDate" class="form-control" 
    placeholder="BirthDate" value="">
    </div>
  </div>
  <div class="row form-group">
    <label class="col-md-4 control-label">Date d'entrée dans l'entreprise :</label>
    <div class="col-md-8">
    <input  ReadOnly type="text" name="HireDate" class="form-control" 
    placeholder="HireDate" value="">
    </div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 control-label">Statut marital :</label>
    <div class="col-md-8">
    <input type="text" name="MaritalStatus" class="form-control" 
    placeholder="MaritalStatus" value="">
    </div>
  </div>


  <div class="row form-group">
    <label class="col-md-4 control-label">Sexe :</label>
    <div class="col-md-8">
    <input type="text" name="Gender" class="form-control" 
    placeholder="Gender" value="">
    </div>
  </div>


  <div class="row form-group">
    <label class="col-md-4 control-label">Nombre d'heure de vacances :</label>
    <div class="col-md-8">
    <input ReadOnly type="text" name="VacationHours" class="form-control" 
    placeholder="VacationHours" value="">
    </div>
  </div>


  <div class="row form-group">
    <label class="col-md-4 control-label">Nombre d'heure de maladie :</label>
    <div class="col-md-8">
    <input ReadOnly type="text" name="SickLeaveHours" class="form-control" 
    placeholder="SickLeaveHours" value="">
    </div>
  </div>


  <div class="row form-group">
    <label class="col-md-4 control-label">Adresse mail :</label>
    <div class="col-md-8">
    <input type="text" name="EmailAddress" class="form-control" 
    placeholder="EmailAddress" value="">
    </div>
  </div>
  <div class="row form-group">
    <label class="col-md-4 control-label">EmailPromotion :</label>
    <div class="col-md-8">
    <input type="text" name="EmailPromotion" class="form-control" 
    placeholder="EmailPromotion" value="">
        </div>
  </div>
  <div class="row form-group">
    <label class="col-md-4 control-label">Téléphone :</label>
    <div class="col-md-8">

    <input type="text" name="Phone" class="form-control" 
    placeholder="Phone" value="">
       
  </div>
  </div>
  <div class="row form-group">
    <label class="col-md-4 control-label">Poste occupé :</label>
    <div class="col-md-8">
    <input type="text" name="ETitle" class="form-control" 
    placeholder="ETitle" value="">
           </div>
  </div>

  <div class="row form-group">
    <label class="col-md-4 control-label">Dernière modification :</label>
    <div class="col-md-8">
    <input  ReadOnly type="text" name="ModifiedDate" class="form-control" 
    placeholder="PhModifiedDateone" value="" >
    </div>
  </div>

  <button type="submit" class =" center btn btn-primary" name="submit" > valider</button>
 
  </form>

</main><!-- /.container -->