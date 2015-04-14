<?php 
  function closeConn($conn){
    mysql_close($conn);
  }
  closeConn($conn);
?> 