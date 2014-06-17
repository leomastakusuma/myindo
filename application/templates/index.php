<?php echo $this->doctype()?>
<html>
<head>
<<html>
    <head>
        <title> Myindo Cyber Media</title>
        <?php echo $this->headLink()->appendStylesheet($this->baseUrl('gaya.css')) ?>
    </head>
    <body>
       
        <table border="1" cellspacing="0" cellpading="0" width="80%" align="center">
            <tr >
                <td align="center" height="60" colspan="2">Header</td>

            </tr>
            <tr>
              <td colspan="2"><?php include "menu.php"?></td>
            </tr>

            <tr>
                <td width="20%">
                   <?php include 'sidebar.php';?>
                </td>
                <td width="80%">
            <?php echo $this->layout()->content; ?>
                </td>
        
            </tr>
            <tr>
                <td align="center" colspan="2">Footer</td>
            </tr>
            
        </table>
                
    </body>
    
    
</html>



