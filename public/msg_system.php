<?php

require '../function/Db.php';
require '../function/printHtmlModules.php';

$db = new Db();
$html = new printHtmlModules();

$title = 'רישום למערכת';
$html->printHead($title);
?>

<div class="container mt-5">

    <?php
        $phone = '972544525210';

        $db->sendMsgWhatsapp($phone);

    ?>

</div>



