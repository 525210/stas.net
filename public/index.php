<?php

require '../function/Db.php';
require '../function/printHtmlModules.php';

$db = new Db();
$html = new printHtmlModules();

$title = 'מרכזייה מאובטחת בענן';

$html->printHead($title);

?>


<body>
<header>



    <?php $html->printMenu();?>

    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-10">
                        <h2 class="display-5 font-weight-bold white-text pt-5 mb-2">
                            מרכזיה פרטית בענן
                        </h2>
                        <hr class="hr-light">
                        <h4 class="white-text my-4">מרכזיה מתקדמת וירטואלית הכוללת:</h4>
                        <ul class="white-text text-right">
                            <li>מערכת ניתוב שיחות חכם</li>
                            <li>ניהול תורים</li>
                            <li>הקלטת שיחות</li>
                            <li>ניהול שיחות ועידה</li>
                            <li>כלים לניהול מוקד טלפוני</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<main class="mt-5">
    <div class="container">
        <section id="the_benefits" class="text-center">
            <h2 class="mb-5 font-weight-bold">היתרונות שלנו:</h2>
            <hr class="my-5">
            <div class="row d-flex justify-content-center mb-4">
                <hr class="my-3">
            </div>
            <div class="row">
            <div class="col-md-4 mb-5">
                <i class="fas fa-phone fa-4x grey-text"></i>
                <h4 class="my-4 font-weight-bold">מספר אחד</h4>
                <p class="grey-text">הקצאת מספר אחד לכל עובד</p>
            </div>
                <div class="col-md-4 mb-5">
                    <i class="fas fa-assistive-listening-systems fa-4x grey-text"></i>
                    <h4 class="my-4 font-weight-bold">מרכזייה</h4>
                    <p class="grey-text">מרכזייה וירטואלית מאפשרת האזנה, לחישה והתפרצות לשלוחה</p>
                </div>
                <div class="col-md-4 mb-5">
                    <i class="fas fa-bezier-curve fa-4x grey-text"></i>
                    <h4 class="my-4 font-weight-bold">חיבור</h4>
                    <p class="grey-text">חיבור לציודים קיימים – טלפונים אנאלוגיים פשוטים, פקסים, פנל דלת</p>
                </div>
            </div>
            <hr class="my-5">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <i class="fas fa-satellite-dish fa-4x grey-text"></i>
                    <h4 class="my-4 font-weight-bold">מרכזיה בענן</h4>
                    <p class="grey-text">מרכזיה בענן מאפשרת עבודה מרחוק באמצעות טלפונים בבית העובדים או שלוחות במחשב הנייד</p>
                </div>
                <div class="col-md-4 mb-5">
                    <i class="fas fa-atom fa-4x grey-text"></i>
                    <h4 class="my-4 font-weight-bold">מרכזייה</h4>
                    <p class="grey-text">מרכזיה בענן כוללת את כל שירותי המרכזייה כמו החזק, העבר, חנה שיחה, שיחת מפגש, לא להפריע ועוד</p>
                </div>
                <div class="col-md-4 mb-5">
                    <i class="far fa-clock fa-4x grey-text"></i>
                    <h4 class="my-4 font-weight-bold">זמני פעילות</h4>
                    <p class="grey-text">הגדרת זמני פעילות למענה מקצועי ויעיל עבור המתקשרים</p>
                </div>
            </div>
        </section>
<!--        <hr class="my-5">-->
<!--        <section id="examples" class="text-center">-->
<!--            <h2 class="mb-5 font-weight-bold">Examples</h2>-->
<!--            <div class="row">-->
<!--                <div class="col-lg-4 col-md-12 mb-4">-->
<!--                    <div class="view overlay zoom">-->
<!--                        <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" alt="" class="img-fluid">-->
<!--                        <div class="mask flex-center"></div>-->
<!--                    </div>-->
<!--                    <h4 class="my-4 font-weight-bold">Heading</h4>-->
<!--                    <p class="grey-text">Lorem ipsum dolor sit amet,-->
<!--                        consectetur adipisicing elit. Dignissimos illum inventore suscipit!</p>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6 mb-4">-->
<!--                    <div class="view overlay zoom">-->
<!--                        <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" alt="" class="img-fluid">-->
<!--                        <div class="mask flex-center"></div>-->
<!--                    </div>-->
<!--                    <h4 class="my-4 font-weight-bold">Heading</h4>-->
<!--                    <p class="grey-text">Lorem ipsum dolor sit amet,-->
<!--                        consectetur adipisicing elit. Dignissimos illum inventore suscipit!</p>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6 mb-4">-->
<!--                    <div class="view overlay zoom">-->
<!--                        <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" alt="" class="img-fluid">-->
<!--                        <div class="mask flex-center"></div>-->
<!--                    </div>-->
<!--                    <h4 class="my-4 font-weight-bold">Heading</h4>-->
<!--                    <p class="grey-text">Lorem ipsum dolor sit amet,-->
<!--                        consectetur adipisicing elit. Dignissimos illum inventore suscipit!</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
        <hr class="my-5">
        <section id="contact">
        <div class="col my-auto py-lg-5">
            <div class="row bg-light rounded text-center mx-0 py-4 mb-4 mb-lg-0">
                <div class="col-11 mx-auto my-3">
                    <p class="text-black-50 mb-4">השאירו פרטים ונחזור אליכם</p>
                    <!-- Contact Form -->
                    <form action="" method="post">
                        <div class="position-relative icon-group mb-3 text-right">
                            <input name="name" type="text" class="form-control border-2" required placeholder="שם מלא">

                        </div>
                        <div class="position-relative icon-group mb-3 text-right">
                            <input name="phone" type="phone" class="form-control border-2" placeholder="טלפון ליצירת קשר">

                        </div>
                        <div class="position-relative icon-group mb-3 text-right">
                            <input name="mail" type="text" class="form-control border-2" required placeholder="אימייל">

                        </div>
                        <div class="d-grid mt-4">
                            <button class="btn btn-primary btn-block" type="submit">חזרו אליי</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST["name"]))
                    {
                        echo "<div class='alert alert-success mt-3' role='alert'>תודה הפרטים נשלחו בהצלחה</div>";
                    }
                    ?>

                </div>
            </div>
        </div>
        </section>
    </div>
</main>



<footer class="page-footer font-small unique-color-dark pt-0">
    <div class="primary-color">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">© כל הזכויות שמורות<?php echo ' ' . date('Y'); ?></h6>
                </div>
<!--                <div class="col-md-6 col-lg-7 text-center text-md-right">-->
<!--                    <a href="#" class="fb-ic ml-0">-->
<!--                        <i class="fab fa-facebook white-text mr-4"></i>-->
<!--                    </a>-->
<!--                    <a href="#" class="fb-ic ml-0">-->
<!--                        <i class="fab fa-twitter white-text mr-4"></i>-->
<!--                    </a>-->
<!--                    <a href="#" class="fb-ic ml-0">-->
<!--                        <i class="fab fa-facebook white-text mr-4"></i>-->
<!--                    </a>-->
<!--                    <a href="#" class="fb-ic ml-0">-->
<!--                        <i class="fab fa-instagram white-text mr-4"></i>-->
<!--                    </a>-->
<!--                </div>-->
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

if (!empty($_POST["name"]) || $_POST["phone"] || $_POST["mail"])
{

    $user = $html->cleanInputData($_POST["name"]);
    $email = $html->cleanInputData($_POST["mail"]);
    $phone = $html->cleanInputData($_POST["phone"]);

    $from    = '525210@gmail.com';
    $subject = 'הזמנה מהאתר של ראשי';
    $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
    mail($from, $subject, $user . " " . $phone . " " . $email, $headers);
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