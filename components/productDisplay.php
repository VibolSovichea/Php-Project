<?php 
     $_data = array('HTML', 'CSS', 'JAVASCRIPT', 'PYTHON', 'JAVA', 'JAVASCRIPT', 'PYTHON', 'JAVA', 'JAVASCRIPT', 'PYTHON', 'JAVA', 'JAVASCRIPT', 'PYTHON', 'JAVA', 'JAVASCRIPT', 'PYTHON', 'JAVA');
?>

<div style="display: flex; justify-content: center; gap: 24px; flex-wrap: wrap;">
     <?php foreach($_data as $element) {?>
          <div 
          style="width: 360px; 
          height: 185px; 
          background: red; 
          display: flex; 
          align-items: center;
          flex-direction: column;
          gap: 6px;
          border-radius: 12px;">
               <div class="img-placeholder" style="width: 100%; height: 120px; background-color: black; border-radius: 12px 12px 0px 0px;"></div>
               <div><?php echo $element?></div>
          </div>
     <?php } ?>
</div>