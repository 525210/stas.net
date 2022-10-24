<?php

class printHtmlModules
{
    public function printHead($title)
    {
        echo "<!DOCTYPE html>
<html dir='rtl' lang='he'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <link href='img/icons_vkladka.png' rel='icon' />
  <title>$title</title>
    <meta name='description' content='טלפוניה IP לעסקים, משרדים וביתים, שירות מספק שירותי טלפוניה IP לתקשורת עם כל חלק בעולם במחירים נמוכים'>
  <!-- Font Awesome -->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css'>
  <!-- Bootstrap core CSS -->
  <link href='css/bootstrap.min.css' rel='stylesheet'>
  <!-- Material Design Bootstrap -->
  <link href='css/mdb.min.css' rel='stylesheet'>
  <!-- Your custom styles (optional) -->
  <link href='css/style.css' rel='stylesheet'>
</head>";
    }

    public function printMenu()
    {
        echo "<nav class='navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar'>
        <div class='container'>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='
            #basicExampleNav' aria-controls='basicExampleNav' aria-expanded='false' aria-label='
            Toggle Navigation'>

                <span class='navbar-toggler-icon'></span>

            </button>

            <a href='/' class='navbar-brand'>stas net</a>


            <div class='collapse navbar-collapse' id='basicExampleNav'>
                <ul class='navbar-nav mr-avto smooth-scroll'>
                    <li class='nav-item'>
                        <a href='/' class='nav-link waves-effect waves-light'>דף הבית</a>
                    </li>
                    <li class='nav-item'>
                        <a href='#the_benefits' class='nav-link waves-effect waves-light'>היתרונות</a>
                    </li>
                    <li class='nav-item'>
                        <a href='#contact' class='nav-link waves-effect waves-light'>צור קשר</a>
                    </li>
                </ul>
            </div>
            <ul class='navbar-nav nav-flex-icons'>
                <li class='nav-item'>
                    <a href='reg.php' class='nav-link waves-effect waves-light'>
                        <button class='btn btn-warning btn-sm'>הרשמה למערכת</button>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='log.php' class='nav-link waves-effect waves-light'>
                        <button class='btn btn-warning btn-sm'>כניסת לקוחות</button>
                    </a>
                </li>
            </ul>

        </div>
    </nav>";
    }

    public function printFooter()
    {
        echo "<script src='css_lp/jquery.min.js'></script> 
                <script src='css_lp/js/bootstrap.bundle.min.js'></script> 
                <script src='css_lp/js/theme.js'></script>
                </body>
                </html>";
    }

    public function cleanInputData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function debug($data)
    {
        echo '<pre>' . print_r($data, 1) . '</pre>';
    }

    public function register($user, $email, $password, $re_password)
    {
        $error = '';
        if ($user == '')
        {
            $error = 'יש למלא שם משתמש';
            echo "<div class='alert alert-danger mt-4'>$error</div>";
            die();
        }
        elseif ($email == '')
        {
            $error = 'עליך למלא את כתובת המייל';
            echo "<div class='alert alert-danger mt-4'>$error</div>";
            die();
        }
        elseif ($password != $re_password)
        {
            $error = 'סיסמאות לא תואמות';
            echo "<div class='alert alert-danger mt-4'>$error</div>";
            die();
        }
    }
}