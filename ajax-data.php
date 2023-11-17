<?php

$conn = mysqli_connect('localhost','root','','test') or die("failed connection");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql) or die("SQL query failed");

if(mysqli_num_rows($result) > 0){
    ?>
    <div class="show-data-table">
        <table id="table-data">
            <tbody>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                
                <?php
                 foreach($result as $res){
                    // print_r($res['firstname']);
                ?>
                   <tr> <td><?= $res['id'] ?></td>
                    <td><?= $res['firstname'] .' '. $res['lastname'] ?></td></tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
    <?php
}else {
    echo  "no result found";
}