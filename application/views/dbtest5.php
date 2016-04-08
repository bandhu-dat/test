<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <table border="14">  
      <tbody>  
         <tr>  
            <td>Roll_No</td>  
            <td>Name</td>  
         </tr>  
         <?php  
         foreach($records->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->roll_no;?></td>  
            <td><?php echo $row->name;?></td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>  
</html>  