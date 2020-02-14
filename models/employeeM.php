<?php
class EmployeeModel {
    public function construct(){}
    public function listAll(){
      $sql='select E.EmployeeID, C.ContactID, E.NationalIDNumber,E.Title as ETitle, C.Title as CTitle, C.FirstName, C.MiddleName, C.LastName, C.EmailAddress, E.HireDate
      from employee as E
      inner join contact as C on E.ContactID=C.ContactID';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=adventurework;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);
        //$stmt->bindParam(":var",$var);
        $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
        $dbh = null;
        return $res;
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }
    public function listOne($id)
    {
      $sql='select E.*, C.*,E.Title as ETitle, C.Title as CTitle, EM.Title as EMTitle, CM.Title as CMTitle, CM.FirstName as CMFirstName,

      CM.MiddleName as CMMiddleName, CM.LastName as CMLastName
      from employee as E
      inner join contact as C on E.ContactID=C.ContactID
      left join employee as EM on E.ManagerID=EM.EmployeeID
      left join contact as CM on EM.ContactID=CM.ContactID
      where E.EmployeeID=:id';

      try {
        $dbh = new PDO('mysql:host=localhost;dbname=adventurework;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);
        $stmt->bindParam(":id",$id);
        $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
        $dbh = null;
        return current($res);
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }


    public function up($data){

   //E.Title as ETitle, C.Title as CTitle, EM.Title as EMTitle, CM.Title as CMTitle, CM.FirstName as CMFirstName,

$sql="UPDATE employee as E 
inner join contact as C on E.ContactID=C.ContactID 
left join employee as EM on E.ManagerID=EM.EmployeeID 
left join contact as CM on EM.ContactID=CM.ContactID 
SET E.NationalIDNumber='".$data['NationalIDNumber']."',
 E.LoginID='".$data['LoginID']."',
 E.BirthDate='".$data['BirthDate']."',
E.MaritalStatus='".$data['MaritalStatus']."',
  E.Gender='".$data['Gender']."',
    C.EmailAddress='".$data['EmailAddress']."',
    C.EmailPromotion='".$data['EmailPromotion']."',
    C.Phone='".$data['Phone']."',
    E.Title='".$data['Title']."'
    where E.EmployeeID=".$data['EmployeeID'];
      
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=adventurework;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);

        //die(print_r( $stmt));
        return $stmt->execute();



        
        
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
         
      }
    }

public function ajouter($data)

{
  $sql="";
  /*$sql="UPDATE employee as E 
  inner join contact as C on E.ContactID=C.ContactID 
  left join employee as EM on E.ManagerID=EM.EmployeeID 
  left join contact as CM on EM.ContactID=CM.ContactID 
  SET E.NationalIDNumber='".$data['NationalIDNumber']."',
   E.LoginID='".$data['LoginID']."',
   E.BirthDate='".$data['BirthDate']."',
  E.MaritalStatus='".$data['MaritalStatus']."',
    E.Gender='".$data['Gender']."',
      C.EmailAddress='".$data['EmailAddress']."',
      C.EmailPromotion='".$data['EmailPromotion']."',
      C.Phone='".$data['Phone']."',
      E.Title='".$data['Title']."'
      where E.EmployeeID=".$data['EmployeeID'];*/
        
        try {
          $dbh = new PDO('mysql:host=localhost;dbname=adventurework;charset=utf8', 'root', '');
          $stmt=$dbh->prepare($sql);
  
          //die(print_r( $stmt));
          return $stmt->execute();
  

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
           
        }
      }

    public function deleteEmploye($EmployeeID)
    {
      $Employe = EmployeeModel::listOne($EmployeeID);
      $sql='DELETE employee , contact FROM employee  INNER JOIN contact
      WHERE employee.ContactID="'.$Employe->ContactID.'" 
      AND contact.ContactID= "'.$Employe->ContactID.'"';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=adventurework;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);

        //die(print_r($stmt));
        return $stmt->execute();
        $dbh = null;
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }
}
?>