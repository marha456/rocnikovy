
  <?php include "../../classes/admin_class.php";
  
  
  
   
   $c=$_GET['q'];
   $idcko=$_GET['id'];
  
  $a=new admin();

  $conn = mysqli_connect($a->server, $a->name, $a->pass,$a->db );
  $sql="update magazines set name = '$c'  where id = $idcko ";
  
 
  $result = mysqli_query($conn, $sql);
  
  echo "<span style='color:green;'>uspesna zmena</span>"


 
  
  ?>



