<?php 

class admin
{

  var $conn, $server ,$pass ,$name , $db;
  function __construct ()
  {
    $this->server ="localhost";
    $this->pass='usbw';
    $this->name='root';
    $this->db='spbf';

  }
  function connect ()
  {
  
    $this->conn =  new mysqli($this->server, $this->name, $this->pass,$this->db );

// Check connection

//echo "Connected successfully";
       return $this->conn;
  
  }

   /////funkciu volam na vypis posledne editovanych veci ////
  function get_last_changes()
  {

      $this->connect();
      $text="<h2>Posledne upravy </h2>";
      $sql="select * from magazines order by date" ;
      
      $result = $this->conn->query($sql);
       
       while($row = $result->fetch_assoc()) {
        $text= $text.  "<div class='admin_list'>id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["autor"]. "
        <span onclick='uprav(".$row["id"].");'class='admin_uprav'>Upravit</span></div>";
        
       
    }

        return $text;
  }
  
  /////////toto mi vypise form do divka na upravu clanku
  function edit_magazines($idcko)
  {
  
  
  
    $this->connect();
      $text="<form method='post' id='edit_magazine'>";
      $sql="select * from magazines where id=$idcko" ;
      
      $result = $this->conn->query($sql);
       
       while($row = $result->fetch_assoc()) {
        //$text= $text.  "<div class='admin_list'>id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["autor"]. "
        //<span onclick='uprav(".$row["id"].");'class='admin_uprav'>Upravit</span></div>";
        
        //$idcko=$row['id'];
        $text= $text. "<input type='text' value=".$row["name"]." name='meno' id='fmeno'>TOTO JE NAZOV <br>";
        $text= $text. "<input type='text' value=".$row["autor"]." name='autor' id='fautor'>TOTO JE autor <br>";
        $text= $text. "<input type='text' value=".$row["name"]." name='meno' >TOTO JE NAZOV <br>";
        $text= $text. "<input type='text' value=".$row["name"]." name='meno' >TOTO JE NAZOV <br>";
        $text= $text. "<input type='text' value=".$row["name"]." name='meno' >TOTO JE NAZOV <br>";
        $text= $text. "<input type='button' value='odosli' onclick='odosli(".$row["id"].");' >." ;
        
       
    }
        $text=$text. "</form>";
        $text=$text. "<div id='verify'></div>";
        

        return $text;
  }

  ////////////////// form pre vytvorenie noveho zaznamu
   function new_magazine($idcko)
  {
  
      $text="<form method='post' id='edit_magazine'>";
     

        $text= $text. "<input type='text' value='' >zadajte nazov." ;
        $text= $text. "<input type='text' value='' >zadajte autora." ;
        $text= $text. "<input type='text' value='' >zadajte hodnotenie." ;
        $text= $text. "<input type='submit' value='odosli' >." ;
        
    
        $text=$text. "</form>";
        

        return $text;
  }





















}

 ?>