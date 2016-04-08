<html>
<body>

 <table align="center" style="width:50%">    
        <tr>
        <?php
        $i = 0 ;
        foreach ($records->result() as $row) {
           if($i > 3){
           $i = 0 ;
            ?>
            <tr>
         <?php
         }
         ?>
           
         <td><img src="<?php echo base_url()?>image/<?php echo $row->name;?>.jpg"  width="150" height="100" hspace="20px"><br><a href="<?php echo base_url()?>demo_prj/shop/<?php echo $row->prod_id;?>"><?php echo $row->name; ?></a><br><?php echo $row->price; ?> 
        </td>
        
       
     <?php
      $i = $i + 1 ;
      
      }
        ?>
        </tr>
    </table>



</body>
</html>