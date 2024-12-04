<?php 
     $_data = array('HTML', 'CSS', 'JAVASCRIPT', 'PYTHON', 'JAVA', 'JAVASCRIPT', 'PYTHON', 'JAVA', 'JAVASCRIPT', 'PYTHON', 'JAVA', 'JAVASCRIPT', 'PYTHON', 'JAVA', 'JAVASCRIPT', 'PYTHON', 'JAVA');
?>

<div style="display: flex; gap: 24px; overflow-x: scroll; flex-wrap: nowrap; width: 80%;">
     <?php
          foreach($_data as $element){ ?>
          <div style="height: 128px;  background-color: green; display: flex; justify-content: center; align-items: center; border-radius: 12px;">
               <p style="width: 168px; text-align: center;"><?php echo $element ?></p>
          </div>
     <?php } ?>
</div>