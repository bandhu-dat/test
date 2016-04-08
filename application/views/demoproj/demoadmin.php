<?php
echo "admin demo page";
//session_start();
         $name=$_SESSION['name'];     
         echo'welcome :'. $name.'<br>';
        ;

?>
<html>
    <head>
        
    </head>
    <body>

         <p><a href="<?php echo base_url()?>demo_prj/subcat">ADD SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/product">ADD PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/catview">VIEW CATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/subcatview">VIEW SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/productview">VIEW PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/customerview">VIEW CUSTOMER</a></p>

        <form method="post" action="<?php echo base_url("demo_prj/sbmt")?>" name="ContactForm" onsubmit="" onclick="<?php echo base_url("demo/edit")?>">
          <p>Catagory: <input type="text" size="65" name="catagory"></p>
     <p><input type="submit" value="Add" name="submit">
</form>

    </body>
</html>