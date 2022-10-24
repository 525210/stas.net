<?php

require '../function/Db.php';
require '../function/printHtmlModules.php';

$db = new Db();
$html = new printHtmlModules();

$title = 'התחברות';
$html->printHead($title);

?>


<body>
<header>



    <?php $html->printMenu();?>

    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col">

                        <h2 class="display-5 font-weight-bold white-text pt-5 mb-2">

                        </h2>


                        <div class="col my-auto py-lg-5">
                            <div class="row bg-light rounded text-center mx-0 py-4 mb-4 mb-lg-0">
                                <div class="col mx-auto my-3">
                                    <p class="text-black-50 mb-4">התחברות</p>
                                    <!-- Contact Form -->
                                    <form action="" method="post">
                                        <div class="position-relative icon-group mb-3 text-right">
                                            <input name="email" type="email" class="form-control border-2" required placeholder="אימייל">
                                        </div>
                                        <div class="position-relative icon-group mb-3 text-right">
                                            <input name="email" type="password" class="form-control border-2" required placeholder="סיסמה">
                                        </div>
                                        <div class="d-grid mt-4">
                                            <button class="btn btn-warning btn-block" type="submit">המשך</button>
                                        </div>
                                    </form>
                                    <div class="mt-4">

                                        <a href="reg.php">רישום למערכת</a>

                                        <a href="reset_pass.php">איפוס סיסמא</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





<footer class="page-footer font-small unique-color-dark pt-0">
    <div class="primary-color">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">© כל הזכויות שמורות<?php echo ' ' . date('Y'); ?></h6>
                </div>

            </div>
        </div>
    </div>
</footer>



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>

<?php

if (!empty($_POST["email"] || $_POST["password"]))
{

    $email = $html->cleanInputData($_POST["email"]);
    $password = $html->cleanInputData($_POST["password"]);
}



//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
//$device = $_SERVER['HTTP_SEC_CH_UA_PLATFORM'];
//require_once 'Mobile_Detect.php';
//$detect = new Mobile_Detect;
//
//$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
//
//
////$from = $email;
//$from    = '525210@gmail.com';
//$subject = 'כניסה לאתר ראשי';
//$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
//mail($from, $subject,  'Ip Address ' . $ip . ' Device ' . $deviceType, $headers);