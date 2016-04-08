<html>
    <body>
        <?php
        
        echo " you have registered successfully" . "br";
        
        $v1 = $_POST["Name"] ;
        $v2 = $_POST["Email"];
        $v3 = $_POST["Telephone"];
        $v4 = $_POST["Subject"];
        //$v5 = $_POSTt["Comment"];
        
         //echo "your name is ".$v1."br";
         //echo "your name is ".$v2."br";
         //echo "your name is ".$v3."br";
        //echo "your name is ".$v4."br";
       // echo "your name is ".$v5."br";
        
        
        ?><br>
        NAME : <?php echo $v1?> <br>
        mail : <?php echo $v2?> <br>
        telephone: <?php echo $v3?><br>
        subject :<?php echo $v4?> 
        
        
        
    </body>  
</html>

