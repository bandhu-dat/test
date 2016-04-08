store1.php
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

            h{
                color: maroon;
                margin-left: 400px; 
                text-decoration: underline;
                letter-spacing: 4px;

            }
            p{
                margin-left: 850px;
                letter-spacing: 2px;
                margin-bottom: 100px;

            }
            p.ex {
                margin-left: 70px;
                letter-spacing: 2px;
                margin-bottom: 100px;

            }
            li a.active {
                background-color: #4CAF50;
                color: white;
            }

            li a:hover:not(.active) {
                background-color: #555;
                color: white;
            }
            div{
                padding: 50px 30px 50px 80px;
                background-color: green; 
            }
            div.content{
              text-align: left ;
             left padding: 4px;
              padding-right: 100px ;    
            }

            body {
                background-color: green; 
            }


        </style>

    </head>
    <body>
    <h>WELCOME TO DEMO SHOPPING STORE</h> 
    <p><a href="<?php echo base_url()?>Demo_prj/index">HOME</a>&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/admin">ADMIN</a>&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/store">STORE</a>&nbsp;&nbsp;<a href="http://localhost/bandhu/contactus.html">CONTACTUS</a></p>
        <tr>    
            <td>
                <ul>
                    <li><a class="active" href="<?php echo base_url()?>Demo_prj/index">HOME</a></li>
                    <li><a href="<?php echo base_url()?>demo_prj/admin">ADMIN</a></li>
                    <li><a href="<?php echo base_url()?>demo_prj/store">STORE</a></li>
                    <li><a href="http://localhost/bandhu/contactus.html">CONTACT US</a></li>
                </ul> 
            </td>
            <td>

            </td>
            <td>
                <div>
                    <p class="ex">
                        THIS IS OUR HOME PAGE OF DEMO  SHOPPING  STORE
                    </p>             
                </div> 
            </td>
        </tr>
    </table>
     <div class="content" >
    <form method="post" align="left" action="<?php echo base_url("demo_prj/customer")?>" >  
       <?php  
         foreach($records->result() as $row)  
         {
             ?>
         <p>Prodct id:<input type="text" size="65" name="prod_id" readonly  value ="<?php echo $row->prod_id; ?>"/></p> <br>

          <p>Product Name:<input type="text" size="65" name="product_name" readonly value ="<?php echo $row->name; ?>"/></p><br> 
          <p>Pricey:<input type="text" size="65" name="price" readonly value ="<?php echo $row->price; ?>"/></p> <br>    
               <?php }  
         ?>
        <p> Quantity: <input type="text" size="65" name="quantity"></p>
        <p> Customer name: <input type="text" size="65" name="customername"></p>
        <p> Phone no.: <input type="text" size="65" name="phone"></p>
        <p> Address: <input type="text" size="65" name="address"></p>
         <p><input type="submit" value="Conferm" name="submit">
         </form>  
       </p></div> 
</body>
</html>

