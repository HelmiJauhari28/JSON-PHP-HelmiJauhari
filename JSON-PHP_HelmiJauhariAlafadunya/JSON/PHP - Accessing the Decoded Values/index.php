<p>NIlai TES</p>
<?php
$jsonobj = '{"Ilham":75,"Dava":80,"Ibnu":85}';

$obj = json_decode($jsonobj);

echo $obj->Ilham;
echo $obj->Dava;
echo $obj->Ibnu;
?>