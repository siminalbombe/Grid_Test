<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 17/05/2017
 * Time: 09:38
 */
session_start();

function displayResults($conn){
    $persons = $_SESSION['persons'];
    for ($i=0; $i<=2; $i++)
        array_shift($persons);

    $selectKonDisValues = "SELECT K1,D1,K2,D2,K3,D3,K4,D4,K5,D5,K6,D6,K7,D7,K8,D8,K9,D9,K10,D10,K11,D11,K12,D12,K13,D13,K14,D14,K15,D15,K16,D16,K17,D17,K18,D18,K19,D19,K20,D20 FROM grid.proband WHERE ID=".$_SESSION['probandID'];
    $result = $conn->query($selectKonDisValues);
    $counter = 1;

    while ($row = $result->fetch_assoc()) {
       foreach ($persons as $item){
           $konkordanz = "K".$counter;
           $diskordanz = "D".$counter;
           if($item == ""){
              echo "<tr hidden><td>".$item."</td><td>".$row[$konkordanz]."</td><td>".$row[$diskordanz]."</td>";
           }
           else{
               echo "<tr><td>".$item."</td><td style='text-align: center'>".$row[$konkordanz]."</td><td align='center'>".$row[$diskordanz]."</td>";
           }
           $counter++;
       }
    }
}
?>


<div>
    <table style="float: left" border="1">

        <tr><td>Name</td><td>Konkordanz</td><td>Diskordanz</td></tr>
        <?php displayResults($conn); ?>
    </table>
</div>