<?php
echo "admin page";

?>
<html>
    <head>
        
    </head>
    <body>

        <form method="post" action="<?php echo base_url("demo/updt")?>" name="ContactForm" onsubmit="" >
    <p>Catagory: <input type="text" size="65" name="catagory"></p>
    <p>Subcatagory:  <input type="text" size="65" name="subcatagory"></p>
    <p><input type="submit" value="edit" name="submit">
</form>

    </body>
</html>

