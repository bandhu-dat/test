<?php
echo "admin page";
//session_start();
         $name=$_SESSION['name'];     
         echo'welcome :'. $name.'<br>';

?>
<html>
    <head>
        
    </head>
    <body>

        <form method="post" action="<?php echo base_url("demo/sbmt")?>" name="ContactForm" onsubmit="" onclick="<?php echo base_url("demo/edit")?>">
    <p>Catagory: <input type="text" size="65" name="catagory"></p>
    <p>Subcatagory:  <input type="text" size="65" name="subcatagory"></p>
    <p><input type="submit" value="Add" name="submit">
</form>

    </body>
</html>

