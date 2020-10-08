<?php
echo "Tabel Logika ";
echo "<table border=1>
    <tr>
        <td>Input true</td>
        <td>Input 2</td>
        <td>AND</td>
        <td>OR</td>
    </tr>
    <tr>
        <td>false</td>
        <td>false</td>
        <td>".$and1 = printf(false && false)."</td>
        <td>".$or1 = printf(false || false)."</td>
    </tr>
    <tr>
        <td>false</td>
        <td>true</td>
        <td>".$and2 = printf(false && true)."</td>
        <td>".$or2 = printf(false || true)."</td>
    </tr>
    <tr>
        <td>true</td>
        <td>false</td>
        <td>".$and3 = printf(true && false)."</td>
        <td>".$or3 = printf(true || false)."</td>
    </tr>
    <tr>
        <td>true</td>
        <td>true</td>
        <td>".$and4 = printf(true && true)."</td>
        <td>".$or4 = printf(true || true)."</td>
    </tr>
</table>";
 ?>
