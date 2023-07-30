<?php
print ("111");
echo getcwd();
chdir('../');
print ("222");echo getcwd();
if($_REQUEST['ct']==''){
$cts = 'h5_index';
}
require_once './index.php';print ("444");
?>
