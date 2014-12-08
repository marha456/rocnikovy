
<link href='styles/style.css' rel='stylesheet'/>
<link href='styles/admin.css' rel='stylesheet'/>



 <body>
<div id='wrapper'>
      <?php include "header.php"; ?>

<script>
function zobraz(cislo) {


    if (5==10) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("admin_section").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "modules/admin/recently_added.php" , true);
        xmlhttp.send();
    }
}


function uprav(cislo)
{
      document.getElementById("popup_edit").style.display="block";
     var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("popup_edit").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "modules/admin/edit_div.php?q=" + cislo , true);
        xmlhttp.send();


}

function hide (str)
{
document.getElementById("popup_edit").style.display="none";

}

function odosli(idcko)
{
alert(idcko);
  var name = document.getElementById("fmeno").value;
  var autor = document.getElementById("fautor").value;
  
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("verify").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "modules/admin/update.php?q=" + name +"&id=" +idcko , true);
        xmlhttp.send();




}

</script>



      
    <div id='control_bar'>
        <ul>     
          <li onclick='zobraz(1);'>POSLEDNE ZMENY</li>
          <li onclick=''>CLANKY</li>
          <li onclick=''>POTVRDENIA</li>
          <li onclick=''>REKLAMA</li>
          <li onclick=''>FINANCIE</li>
        </ul>
    </div>
    
    <?php ////tu sa bude zobrazovat obsah pomocou ajaxu ,ci uz clanky na upravu,posledne upravy atd ?>
    <div id='admin_section'>
    
        
      
    </div>


    <div id='popup_edit'> 
    
    </div>

 
 
 
 

</div>
</body>