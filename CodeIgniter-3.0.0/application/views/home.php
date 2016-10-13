<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta http-equiv="Content-Type" content="text/html;charset = utf-8"> 
      <title>CodeIgniter View Example</title> 
   </head>
	
   <body> 
       <div id="container">
        <p> My View has been loaded </p>
        
        
        
        <?php foreach($records as $row);?>
   <h1><?php echo $row->title;?>
           </h1>
   </div>
        
   
      
   </body>
	
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

