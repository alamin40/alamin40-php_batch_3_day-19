<?php
session_start();

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Prime;
use App\classes\Series;
use App\classes\Register;
use App\classes\Auth;


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/home.php';
        }
        else
        {
            $auth = new Auth();
            $auth->login();
        }

    }
    elseif ($_GET['pages'] == 'series')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/series.php';
        }
        else
        {
            $auth = new Auth();
            $auth->login();
        }
    }
    elseif ($_GET['pages'] == 'register')
    {
        $register = new Register();
        $message = $register->add();
        include 'pages/register.php';


    }
    elseif ($_GET['pages'] == 'login')
    {
        if (isset($_SESSION['id']))
        {
            $home = new Home();
            $home->index();
        }
        else
            {
            include 'pages/login.php';

        }
    }

    elseif ($_GET['pages'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
    elseif ($_GET[['pages'] == 'all-data'])
    {
        $register = new Register();
        $result = $register->allData();
        echo '<pre>';
        print_r($result);
    }
    else
    {
        if (isset($_SESSION['id'])){
            $home = new Home();
            $home->index();
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }
}



elseif (isset($_POST['btn']))
{
    $prime = new Home($_POST);
    $result = $prime->primeNumber();
    include 'pages/home.php';


}

elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->getSeries();
    include 'pages/series.php';


}
elseif (isset($_POST['register_btn'])){

    $register = new Register($_POST);

}

elseif (isset($_POST['login_btn'])){

    $auth = new Auth($_POST);
    $message = $auth->verify();
    include 'pages/login.php';

}
else
{
    $home = new Home();
    $home->index();
}

