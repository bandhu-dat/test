<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <p><a href="<?php echo base_url()?>demo_prj/subcat">ADD SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/product">ADD PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/catview">VIEW CATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/subcatview">VIEW SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/productview">VIEW PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/customerview">VIEW CUSTOMER</a></p>
   <form border="14"method="post" action="<?php echo base_url("demo_prj/subcatupdt")?>">  
       <?php
      $subcat_id = $id ;
       // print_r($cat_id) ;
     //  exit ;
       ?>
       <p> SubCatagory id:<input type="text" size="65" name="subcat_id" readonly value ="<?php echo $subcat_id;?>"/></p><br>
        <p>SubCatagory: <input type="text" size="65" name="subcatagory"></p>
       <p><input type="submit" value="update" name="submit">
         </form>  
<body>  
</body>  
</html>  