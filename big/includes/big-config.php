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
    case 'index.php':
        $title = 'BIG Karen Garcia';
//        $logo 'fa-home';
        $PageID = 'Client Questionnaire';
    break;
    
    case 'flexbox.php':
        $title = 'Flexbox Research';
//        $logo 'fa-users'; // change //
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = 'Galleries';
//        $logo 'fa-users';
        $PageID = 'Galleries and Research';
    break;
        
        case 'map.php':
        $title = 'Google Map';
//        $logo 'fa-users';
        $PageID = 'Map';
    break;  
        
        case 'calendar.php':
        $title = 'Google Calendar';
//        $logo 'fa-users';
        $PageID = 'Google Calendar';
    break;  
        
        case 'youtube.php':
        $title = 'Youtube';
//        $logo 'fa-users';
        $PageID = 'Youtube';
    break; 
        
        case 'shoppingcarts.php':
        $title = 'Shopping Cart';
//        $logo 'fa-users';
        $PageID = 'Shopping Cart';
    break; 
        
        case 'siteapp.php':
        $title = 'Responsive site vs Native App';
//        $logo 'fa-users';
        $PageID = 'Responsive site vs Native App';
    break; 
        
        case 'webcam.php':
        $title = 'Web Cameras';
//        $logo 'fa-users';
        $PageID = 'Web Cameras';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}