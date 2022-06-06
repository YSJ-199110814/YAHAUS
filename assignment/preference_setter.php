<?php include('preferences.php'); ?>

<?php
//$scheduler_vars = [
//    "start" => "2022-07-01",
//    "end" => "2025-06-30"
//];

$exportcode = "<?php\n\n" . '$scheduler_vars' . "=[\n";
foreach($scheduler_vars as $var_name => $value){
    //echo "{$var_name}";
    $exportcode = $exportcode . "    '{$var_name}' => '{$value}',\n" ;
}
$exportcode = substr($exportcode, 0, -2) . "\n];\n\n?>";

file_put_contents('preferences.php', $exportcode);
?>
