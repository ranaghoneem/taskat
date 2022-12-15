
<?php
//error_reporting(E_ALL);
session_start();

$todolist = [];

       if(!isset($_SESSION['todo']))
	   {
            $_SESSION['todo'] = [];
			
       }
           
      if (isset($_POST['todo']))
		{
          $_SESSION['todo'][] = $_POST['todo']; 
		  header("Location: {$_SERVER['PHP_SELF']}?saved");
		// else {
       // header("Location: {$_SERVER['PHP_SELF']}?error");
  //  }
        }
    
$session = htmlentities(var_export($_SESSION, true));
 //print_r($_SESSION['todolist']);
     foreach($_SESSION['todo'] as $value) 
        {
         echo "todo " .$value;
        echo '</br>';
        }

//session_destroy();
//print_r($_SESSION);

?>


<html >
    <head>
   
     
        <style>
            textarea { font: 12px Consolas, Monaco, monospace; padding: 2px; border: 1px solid #444444; width: 99%; }
            .saved, .error { border: 1px solid #509151; background: #DDF0DD; padding: 2px; }
            .error { border-color: #915050; background: #F0DDDD; }
        </style>
    </head>
    <body>
       <center>  <h1>Session Variable Management</h1> </center>
		
		
	<?php if (isset($_GET['saved'])) { ?>
        <p class="saved">The session was saved successfully.</p>
		
<?php } ?>

<form  method="post"  action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" >

 <input type="text" name="todo"  ><br><br>

<input type="submit" name="submit" value="Update session"/><br><br>

</form>

</body>
</html>