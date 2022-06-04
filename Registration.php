<?php
$flag=0;
if (empty($_POST['firstname'])){echo"First name is empty <br>"; $flag=1;}
if (empty($_POST['lastname'])){echo"Last name is empty <br>"; $flag=1;}
if (empty($_POST['gender'])){echo"Gender is empty <br>"; $flag=1;}
if (empty($_POST['email'])){echo"Email is empty <br>"; $flag=1;}
if (empty($_POST['number'])){echo"Mobile No is empty <br>"; $flag=1;}
if (empty($_POST['address'])){echo"Address is empty <br>"; $flag=1;}
if (empty($_POST['country'])){echo"Country is empty <br>"; $flag=1;}
if($flag==0){echo "Form is submittrd";}
?>