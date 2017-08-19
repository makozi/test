
<form action=""  method="post">

<?php

include('db.php');


if(isset($_POST['submit']))
{
$data=$_POST['data'];


$ret=mysql_query("insert into info(data) values('$data')");
if($ret)
{
$_SESSION['msg']="Inserted Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Unable to Insert";
}
}

?>





<p align="center"><font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font></p><br>

<p align="center"><input id="data" name="data" type="text" ></p>

 <p align="center"><input type="submit"  name="submit" value="Insert"></p>


<?php


$sql=mysql_query("select * from info where data='$data' ");
$cnt=1;

if($sql)
    {
       $ii=0;
      while($row=mysql_fetch_array($sql)){


  $data = $row['data'];


?>


<p align="center"> <input  value="<?php echo htmlentities($row['data']);?>" type="text" ></p><br>

<?php

}
	}

?>


</form>


