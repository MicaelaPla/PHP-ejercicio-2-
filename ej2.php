<html>
<body>
<?php

   $año= $_POST["año"];

   if ($año%4 == 0)
   {
   echo "Es un año bisiesto";
   }

   else
   {
   echo "No es un año bisiesto";
   }

?>
</body>
</html>