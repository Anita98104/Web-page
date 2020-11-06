<?php
 
  if(($_GET[id]=="123")&&($_GET[pwd]=="123")) //條件如果login.html，d符合123，pwd符合123顯示welcome //不符合顯示不符合顯示login failure
    echo "welcome";
  else
    echo "login failure";
?>