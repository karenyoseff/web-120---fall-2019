<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6Lf1zK4UAAAAAFJY8bGVmuf5u3nDF2945CoiuxbI";
$secretKey = "6Lf1zK4UAAAAABP6L8DUVfDIO3SaYCmklpVgumJt";

date_default_timezone_set('America/Los Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE)
{
//    case 'index.php':
//        $title = 'Alumina';
////        $logo 'fa-home';
//        $PageID = 'Alumina';
//    break;
    
    case 'about.php':
        $title = 'About Alumina';
//        $logo 'fa-users'; // change //
        $PageID = 'About';
    break;
        
    case 'products.php':
        $title = 'Products';
//        $logo 'fa-users';
        $PageID = 'Products';
    break;
        
        case 'contact.php':
        $title = 'Contact';
//        $logo 'fa-users';
        $PageID = 'Contact';
    break;  
        case 'disclaimer.php':
        $title = 'Disclaimer / Privacy Notice';
//        $logo 'fa-users';
        $PageID = 'Disclaimer / Privacy Notice';
    break; 
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}
