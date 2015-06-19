<?php 

/*
Author: Adrien Thierry
Licence: GPLv2 or later
http://seraum.com
http://asylum.seraum.com
http://hackmyfortress.com
*/


/*    EXAMPLE OF USE :         */

// Result obfuscated file
$obf_file = "./obfuscated_file.php";

// Call the lib
require_once(dirname(__FILE__) . '/' . 'file' . '/' . 'class' . '/' . 'lib_obfuscator.php');

// Create the Obfuscator object
$obfuscator = new Free_Obfusc();

// Get the file content to obfuscate
$c = file_get_contents(dirname(__FILE__) . '/' . 'file' . '/' . 'hello.php');

// 1 round of obfuscation iterations
$it = 1;

// Obfuscating the file
// $c => the content to obfuscate
// $it => number of obfuscation iterations
$res =  $obfuscator->doIt($c, $it);	

// Write result in the $obf_file
file_put_contents($obf_file, $res);



?>
<?php /* HTML PART */ ?>
Code to Obfuscate :<br />
<textarea style='width:800px; height:250px;'><?php echo $c; ?></textarea><br /><br />

Result :<br />
<textarea style='width:800px; height:250px;'><?php echo $res; ?></textarea><br /><br />

<a target="_BLANK" href="<?php echo $obf_file; ?>">Access the result file</a>


