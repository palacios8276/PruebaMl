
<HTML>
<HEAD>
 <TITLE>Consulta por Usuario</TITLE>
</HEAD>
<BODY bgcolor="GREY">
<fieldset>
<?php
include("conexion.php");
?>
<?php

      $Seller_Id=$_GET['Seller_Id'];
      $Site_Id=$_GET['Site_Id'];



  $consulta=mysql_query("select * from Items where Seller_Id ='$Seller_Id' and Site_Id='$Site_Id'",$link);

   echo "<table>";
    echo "
         <th>CI</th><th>ID Articulo</th><th>Nombre del Articulo</th><th>ID de Categoria</th><th>Categoria</th>";
        while($row=mysql_fetch_array($consulta)){
               $Item_Id=$row["ID Articulo"];
                $Item_Title=$row["Nombre del Articulo"];
               $Item_CatId=$row["ID de Categoria"];
                              $Item_CatName=$row["Categoria"];

              
               



  echo "<tr><td>$Item_Id</td><td>$Item_Title</td><td> $Item_CatId</td><td> $Item_CatName</td>
    
</form>";}

echo "</table>";
?>
<form method="GET" action="inicio.php" align="center" target="_top">
</fieldset>
</BODY>
</HTML>
