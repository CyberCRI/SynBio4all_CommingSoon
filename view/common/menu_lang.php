<?php  
    function isLangSelected($langInput, $selectedLang){
        if($langInput==$selectedLang){
            return "selected";
        }
    }
?> 
<form id="langForm" action="index.php?obj=com&action=updatelang" method="post">
    <select name="language" onchange="langForm.submit();">
      <?php
      foreach ($listLang as &$langRead){
          echo "<option value='".$langRead->getDes()."' ".isLangSelected($langRead->getDes(), $selectedLang).">".$langRead->getName()."</option>";
          echo "\n";
      }
      ?>
    </select>
</form>