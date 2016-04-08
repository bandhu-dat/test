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

            body {
                background-color: green; 
            }

            img {
                position: absolute;
                left: 0px;
                top: 0px;
                z-index: -1;
            }   
        </style>

    </head>
    <body>
    <h>WELCOME TO SECONDHAND CAR TREDAR STORE</h> 
    <p><a href="http://localhost/bandhu/secondhandcar.html">HOME</a>&nbsp;&nbsp;<a href="http://localhost/bandhu/carregistration.html">REGISTRATION</a>&nbsp;&nbsp;<a href="<?php echo base_url()?>test/store">STORE</a>&nbsp;&nbsp;<a href="http://localhost/bandhu/contactus.html">CONTACTUS</a></p>
    <table style="width:80%">
        <tr>
            <td>
                <ul>
                    <li><a class="active" href="http://localhost/bandhu/secondhandcar.html">HOME</a></li>
                    <li><a href="http://localhost/bandhu/carregistration.html">REGISTRATION</a></li>
                    <li><a href="<?php echo base_url()?>test/store ">STORE</a></li>
                    <li><a href="http://localhost/bandhu/contactus.html">CONTACT US</a></li>
                </ul> 
            </td>
            <td>

            </td>
            <td>
                <div><img src="background3.jpg"  width="200" height="200" align="middle"> 
                    <p class="ex">
                        TOU CANE REACH US AT THE FOLLOWING  ADDRESS AND PHONE NUMBER OR YOU CAN MAIL US IN THE MAIL ID GIVEN BELLOW
                    </p>  
                </div> 
            </td>
        </tr>
    </table>
<table align="center" style="width:50%">    
        <tr>
            <td>
               FOR SALSE 
            </td>
            <td>
                719  BANDRA,MUMBAI,<br>
                PHONE NO. 24252242<br>
                MAIL ID:salse@gmail.com
            </td>		
                   </tr>
        <tr>
            <td>
             
            </td>
            <td>
                
            </td>		
            <td>
                
            </td>
        </tr>
        <tr>
            <td>FOR DILLERSHIP  
            </td>
            <td>
             912 BANDRA,MUMBAI,<br>
                PHONE NO. 296354,<br>
                MAIL ID :DILLER@GMAIL.COM  
            </td>
      
        </tr>
    </table>
</body>
</html>

