<?php
session_start();

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/functs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Edam-Volendam');

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display('navigation.tpl');



$action=isset($_GET['action'])?$_GET['action']:'home';
    $templateParser->display('header.tpl');
    
switch($action){
    case 'home':
        $templateParser->display('home.tpl');  
        
    break;
    case 'edam':
        $templateParser->display('locations.tpl');
    break;
    case 'users':
        include 'model/select_all_items.php';
        $templateParser->assign('result',$result);
        $templateParser->display('users.tpl');
        $templateParser->display('userPanel.tpl');
    break;

    case 'bedrijven':
        include 'model/select_all_items2.php';
        $templateParser->assign('result',$result);
        $templateParser->display('bedrijven.tpl');

        break;
    case 'delete':
        $id = $_GET['phpro_user_id'];
       include 'delete_item.php';
        $tepmplateParser->display('userPanel.tpl');
        break;
    case 'contact':
        $templateParser->display('contact.tpl');
    break;
    case 'login':

        include 'model/login.php';
        include 'model/adduser.php';
    break;

    case 'logout':

        $templateParser->display('login.tpl');
        include 'model/logout.php';
        break;
    case 'test':

        $templateParser->display('test.tpl');

        break;

    case 'login2':
        $templateParser->display('login_submit.php');
        break;
    case 'update':
        include 'model/update.php';
        break;
    case 'accounts':
        $templateParser->display('accounts.tpl');
        break;


    case 'login_submit':

        include 'model/login_submit.php';
        $templateParser->display('login_submit.tpl');
    break;

    case 'bedrijf_submit':

        include 'model/bedrijf_submit.php';
        $templateParser->display('bedrijf_submit.tpl');
        break;
        case 'adduser_submit':
        include 'model/adduser_submit.php';
        $templateParser->display('adduser_submit.tpl');

    break;
    case 'admin':
        $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:"show";

        $submit_update = isset($_POST['submit_update'])? 1:0;
        $cms_action = $submit_update?'save':$cms_action;

        $templateParser->display('userPanel.tpl');
        switch($cms_action)
        {
            case 'show':
                include 'model/select_all_items.php';
                $templateParser->assign('result',$result);
                $templateParser->display('cms_show.tpl');
            break;
            case 'delete':
                $id = $_GET['id'];
                include 'model/delete_item.php';
            break;
            case 'insert':
                $templateParser->display('cms_insert.tpl');  
            break;
            case 'edit':
                $id = isset($_GET['id'])?$_GET['id']:0;
                include 'model/select_one.php';
             //   include 'model/update.php';
                $templateParser->assign('result',$result);
                $templateParser->display('edit.tpl');
            break;
            case 'save':
                //call to model to save item: UPDATE

                //go to admin view
            break;
        }
       
    break;
}

$templateParser->display('footer.tpl');

