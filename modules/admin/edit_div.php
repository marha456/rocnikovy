
  <?php include "../../classes/admin_class.php";
  
  
     $r= new admin();
  
   
   $c=$_GET['q'];
  $k= $r->edit_magazines($c);
  echo $k;
  echo "
  <a style="."cursor:pointer;"."; onclick='hide()';>hide</a> ";
  
  
  ?>



