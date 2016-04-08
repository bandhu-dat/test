<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <p><a href="<?php echo base_url()?>demo_prj/subcat">ADD SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/product">ADD PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/catview">VIEW CATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/subcatview">VIEW SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/productview">VIEW PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/customerview">VIEW CUSTOMER</a></p>
   <form border="14"method="post" action="<?php echo base_url("demo_prj/produpdt")?>">  
       <?php
      $prod_id = $id ;
      //  print_r($prod_id) ;
     //  exit ;
       ?>
       <p> prod_id:<input type="text" size="65" name="prod_id" readonly value ="<?php echo $prod_id;?>"/></p><br>
        <p>name: <input type="text" size="65" name="name"></p>
         <p>quantity: <input type="text" size="65" name="quantity"></p>
          <p>price: <input type="text" size="65" name="price"></p>
       <p><input type="submit" value="update" name="submit">
         </form>  
<body>  
</body>  
</html>  