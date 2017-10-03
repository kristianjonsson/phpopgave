<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    </head>
    <body>
        <header>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          UGE 1
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="dag1.php">DAG 1</a>
          <a class="dropdown-item" href="#">DAG 2</a>
          <a class="dropdown-item" href="#">DAG 3</a>
          <a class="dropdown-item" href="#">DAG 4</a>
          <a class="dropdown-item" href="#">DAG 5</a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          UGE 2
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="dag1.php">DAG 1</a>
          <a class="dropdown-item" href="#">DAG 2</a>
          <a class="dropdown-item" href="#">DAG 3</a>
          <a class="dropdown-item" href="#">DAG 4</a>
          <a class="dropdown-item" href="#">DAG 5</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          UGE 3
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="dag1.php">DAG 1</a>
          <a class="dropdown-item" href="#">DAG 2</a>
          <a class="dropdown-item" href="#">DAG 3</a>
          <a class="dropdown-item" href="#">DAG 4</a>
          <a class="dropdown-item" href="#">DAG 5</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
        </header>
        <h2><?php
       echo "mine opgaver på dag 1 i uge 1";
       ?></h2>
        <br>
        <br>
        
         <h3><?php echo"opgave 1" ?></h3>
         <h4> <?php echo" her er koden til opgave 1 " ?></h4>
       
        
        &LT;div class="col-lg-4"&GT;<br>    
        &LT;?php echo " her udskriver php en tekst";?&GT;<br>
        &LT;div class="col-lg-4"&GT;<br>
        &LT;?php echo " her udskriver en anden tekst";?&GT;<br> 
        &LT;?php echo " &LT;div class=\"col-md-6\"&GT;";<br>
        echo " &LT;span class=\"text-success\"&GT Det her virker bare!!&LT;/span&GT;;<br>
        echo " &LT;div&GT;";<br>
        <br>
        <h3><?php echo"hvordan opgave 1 ser ud " ?></h3>
<div class="col-lg-4">
   <?php echo "Her udskriver php en tekst"; ?>
</div>
<div class="col-lg-4">
   <?php echo "Og her udskrives en anden tekst"; ?> 
</div>
<?php
echo "<div class=\"col-md-6\">";
echo "<span class=\"text-success\">Det her virker bare!!</span>";
echo "</div>";
?> 
        
        <br>
        <br>
        
        
        <h3> <?php echo"opgave 2" ?></h3>
        <h4> <?php echo "koden til opgave 2" ?></h4>
        <br>
        
        &LT;h4&gt; &LT;?php echo" hvad kan PHP?" ? &gt; &lt;/h4&gt;<br>
        &LT;h2&gt; &LT;?php echo "Her er en liste over nogle af de ting man kan med PHP:" ? &gt; &lt;/h2&gt;<br>
        &LT;ul&gt;<br>
        &lt;li&gt;&lt;?php echo"PHP kan generere dynamisk indhold på din webside"?&gt;&LT;li&GT;<br>
        &lt;li&gt;&lt;?php echo"PHP kan oprette, åbne, læse, skrive, slette og lukke filer på serveren"?&gt;&LT;li&GT;<br>
        &lt;li&gt;&lt;?php echo"PHP kan modtage data fra en formular"?&gt;&LT;li&GT;<br>
        &lt;li&gt;&lt;?php echo"PHP kan læse, tilføje, redigere og slette data i din database"?&gt;&LT;li&GT;<br>
        &lt;li&gt;&lt;?php echo"PHP kan bruges til brugerkontrolleret adgang"?&gt;&LT;li&GT;<br>
        &LT;ul&gt;<br>
        <br>
        
        <h3><?php echo "hvordan opgave 2 skal se ud";?></h3>
        <br>
        <h4><?php echo" Hvad kan PHP?" ?></h4>
<h2><?php echo "Her er en liste over nogle af de ting man kan med PHP:" ?></h2>
<ul>
  <li><?php echo"PHP kan generere dynamisk indhold på din webside"?></li>
  <li><?php echo"PHP kan oprette, åbne, læse, skrive, slette og lukke filer på serveren"?></li>
  <li><?php echo"PHP kan modtage data fra en formular"?></li>
  <li><?php echo"PHP kan læse, tilføje, redigere og slette data i din database"?></li>
  <li><?php echo"PHP kan bruges til brugerkontrolleret adgang"?></li>
</ul>

    </body>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</html>
