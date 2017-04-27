<?php
    include_once('../../pages/common/header.php');
    include_once($BASE_DIR .'database/users.php');

    $info = getUserInfo($_SESSION['username']);
    $smarty->display('users/changePassword.tpl');

    include_once('../../pages/common/footer.php');
?>
