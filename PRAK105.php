<!DOCTYPE html>
<html>
    <head>
        <style>
               th {
                background-color: red;
               }
        </style>
    <title>
    </title>
    </head>
    <body>
    
    <h1></h1>
    
    <?php 
    $s ['s1'] = "Galaxy 22";
    $s ['s2'] = "Galaxy S22+";
    $s ['s3'] = "Galaxy A03";
    $s ['s4'] = "Galaxy Xcover 5";
    
    echo "<table width = 250, border = 1>";
    echo "<tr><th height = 50><b><center>Daftar Smartphone terbaru</b></th></tr>";
    echo "<tr><td>Samsung $s[s1] </t></tr>";
    echo "<tr><td>Samsung $s[s2] </t></tr>";
    echo "<tr><td>Samsung $s[s3] </t></tr>";
    echo "<tr><td>Samsung $s[s4] </t></tr>";
    echo "</table>";
    ?>
    </body>
</html>