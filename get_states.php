<?php
require_once('db.php');
if (isset($_POST['country_id'])) {
    $country_id = mysqli_real_escape_string($conn, $_POST['country_id']);
    $state_result = $conn->query("SELECT * FROM state WHERE country_id = $country_id");
    $options = "<option value=''>Select State</option>";
    while ($row = $state_result->fetch_assoc()) {
        $options .= "<option value='{$row['state_id']}'>{$row['state_name']}</option>";
    }
    echo $options;
}
?>