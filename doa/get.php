<?php
include_once('main/include/config.php');

$val = $_GET["value"];

$val_M = mysqli_real_escape_string($con, $val);

$sql = "select name,id from district where name='$val_M'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0) {
    echo "<select>";
    while ($rows= mysqli_fetch_assoc($result)) {
        echo "<option>".$rows["id"]."</option>";
    }

    echo "</select>";

  }else {
    echo "<select>
            <option>District ID</option>
        </select>";
  }

?>