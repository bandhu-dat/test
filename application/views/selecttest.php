<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <form border="14">  
       <?php  
         foreach($records->result() as $row)  
         {
             ?>
        roll_no:<?php echo $row->roll_no;?><br>
           NAME:<?php echo $row->name;?><br>   
               <?php }  
         ?>
         </form>  
<body>  
</body>  
</html>  