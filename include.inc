<?php
if (isset($_SESSION["check"])) {
    if ($_SESSION["check"] === "No") {
        echo "<center><p style='color: red;'>帳號或密碼錯誤，請回到上一頁重新輸入!</p></center>";
    } elseif ($_SESSION["check"] === "RoleError") {
        echo "<center><p style='color: red;'>角色選擇錯誤，請重新選擇!</p></center>";
    }
}
?>
