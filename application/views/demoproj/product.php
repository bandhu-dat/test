<html>
    <head>
        
    </head>
    <p><a href="<?php echo base_url()?>demo_prj/subcat">ADD SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/product">ADD PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/catview">VIEW CATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/subcatview">VIEW SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/productview">VIEW PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/customerview">VIEW CUSTOMER</a></p>
    <body>

        <form method="post" action="<?php echo base_url("demo_prj/addprod")?>" name="ContactForm" onsubmit="" onclick="<?php echo base_url("demo/edit")?>">
         <p>SubCatagory: <input type="text" size="65" name="subcatagory"></p>
          <p>Product name: <input type="text" size="65" name="name"></p>
           <p>Quantity: <input type="text" size="65" name="quantity"></p>
            <p>Price: <input type="text" size="65" name="price"></p>
     <p><input type="submit" value="Add" name="submit">
</form>

    </body>
</html> 