<?php
if (isset($_SESSION['user'][0])) {
    $user = $_SESSION['user'][0];
    foreach ($user as  $value) {
        $user = $value;
    }
}
echo "OK";
echo "<pre>";
print_r($_POST);
echo "</pre>";
