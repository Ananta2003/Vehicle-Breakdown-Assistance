<?php
include("mech_connection.php");
error_reporting(0);


$query1= "SELECT * FROM mech";
$mechdata= mysqli_query($mconn, $query1);

$total= mysqli_num_rows($mechdata);



// echo $total;

if($total>0)
{
    ?>
    <link rel="stylesheet" href="css/MechStyle.css">
    <h1 align="center">Mechanics List </h1>
     <table  border="7" cellspacing="15" width="100%">
        <tr >
            <th width="20%">NAME</th>
            <th width="20%">CONTACT</th>
            <th width="40%">ADDRESS</th>
            <th width="20%">TYPE OF MECHANIC</th>
        </tr> 
        
   

    <?php
   // echo"Table has Records ";
    
    while($final = mysqli_fetch_assoc($mechdata))
    {

        echo " <tr >
                    <td>".$final['name']."</td>
                    <td>".$final['contact']."</td>
                    <td>".$final['adress']."</td>
                    <td>".$final['type']."</td>
                </tr>";

       
    }
}
else{
    echo"No Records ";
}

?>
 </table>