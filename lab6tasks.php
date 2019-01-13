<?php
phpinfo(); //php version and configuration info
echo 'Current script owner: ' . get_current_user().'<br/>'; //php script owner name
$rd = getenv('DOCUMENT_ROOT'); //current document root
echo 'current document root is'.$rd.'<br/>';
//operating system name
//echo php_uname()."\n";
echo 'Operating system on which php is running is'.PHP_OS.'<br/>';
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'This is a server using Windows!<br/>';
} else {
echo 'This is a server not using Windows!'."\n";
}
//swaping between two variables
$a = 15;
$b = 27;
 
// Swap Logic

echo "\nThe number before swapping is:\n";
echo "Number a =".$a." and b=".$b.'<br/>';

$temp = $a;
$a = $b;
$b = $temp;
 
echo "\nThe number after swapping is: \n";
echo "Number a =".$a." and b=".$b.'<br/>';

//print strings
echo 'Tomorrow I’ll learn something new.<br/>This is a bad command : del c:\\*.*\$.<br/> ';
//to test whether number using ternary operator
function trinary_Test($n){
$r = $n > 30
? "greater than 30<br/>"
: ($n > 20
? "greater than 20<br/>"
: ($n >10
? "greater than 10<br/>"
: "Input a number atleast greater than 10!<br/>")); 
echo $n." : ".$r."\n";
}
trinary_Test(38);
trinary_Test(25);
trinary_Test(15);
trinary_Test(2);

//return the components of url.
$url = 'http://www.example.com/path?arg=value#anchor';
echo 'url:'.$url.'<br/>';
$sub = substr($url, 0, 5);
echo 'Scheme:'.$sub.'<br/>'; 
$sub1=substr($url, 7,16);
echo 'host:'.$sub1.'<br/>';
$sub2=substr($url, 22,30);
echo 'path:'.$sub2;

// var_dump(parse_str($url));
// var_dump(parse_url($url, PHP_URL_SCHEME));
// var_dump(parse_url($url, PHP_URL_USER));
// var_dump(parse_url($url, PHP_URL_PASS));
// var_dump(parse_url($url, PHP_URL_HOST));
// var_dump(parse_url($url, PHP_URL_PORT));
// var_dump(parse_url($url, PHP_URL_PATH));
//var_dump(parse_url($url, PHP_URL_QUERY));
//var_dump(parse_url($url, PHP_URL_FRAGMENT));

?>