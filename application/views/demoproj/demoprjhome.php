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


        </style>

    </head>
    <body>
    <h>WELCOME TO DEMO SHOPPING STORE</h> 
    <p><a href="<?php echo base_url()?>Demo_prj/index">HOME</a>&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/admin">ADMIN</a>&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/store">STORE</a>&nbsp;&nbsp;<a href="http://localhost/bandhu/contactus.html">CONTACTUS</a></p>
    <table style="width:80%">
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
                        THIS IS OUR HOME PAGE OF DEMO  SHOPPING  PROJECT
                    </p>             
                </div> 
            </td>
        </tr>
    </table>
    <table align="center" style="width:50%">    
        <tr>
            <td><a href="http://localhost/bandhu/carregistration.html">
                    <img src="carimage1.jpg"  width="300" height="200">
                </a></td>
            <td><a href="http://localhost/bandhu/carregistration.html">
                    <img src="carimage2.jpg"  width="300" height="200">
                </a></td>		
            <td><a href="http://localhost/bandhu/carregistration.html">
                    <img src="carimage3.jpg"  width="300" height="200">
                </a></td>
        </tr>
        <tr>
            <td><a href="http://localhost/bandhu/carregistration.html">
                    <img src="carimage4.jpg"  width="300" height="200">
                </a></td>
            <td><a href="http://localhost/bandhu/carregistration.html">
                    <img src="carimage5.jpg"  width="300" height="200">
                </a></td>		
            <td><a href="http://localhost/bandhu/carregistration.html">
                    <img src="carimage6.jpg"  width="300" height="200">
                </a></td>
        </tr>
        <tr>
            <td><a href="http://localhost/bandhu/carregistration.html">
                    <img src="carimage7.jpg"  width="300" height="200">
                </a></td>
            <td><a href="http://localhost/bandhu/carregistration.html">
                    <img src="carimage8.jpg"  width="300" height="200">
                </a></td>		
            <td><a href="http://localhost/bandhu/carregistration.html">
                    <img src="carimgae9.jpg"  width="300" height="200">
                </a></td>
        </tr>
    </table>

</body>
</html>

