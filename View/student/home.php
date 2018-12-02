<html>
    
    <head>
      <?php include_once '../teacher/commons/head_tag.php'; ?>  
        <title>
            student LMS 
        </title>
    </head>
    
    <body>
        
      <?php include_once '../teacher/commons/head_nav_student.php';
       include_once('../../Control/common.php');?>   
        
        
        <div class="container">
      
   <h1 class="mt-5">Welcome Student : NAME  </h1>
            
                      
            <input type="hidden" name="id" value="<?= safeGet("id"); ?>">
               
    </div>
        
        
     <?php include_once '../teacher/commons/tail.php';?>   
    </body>
</html>

