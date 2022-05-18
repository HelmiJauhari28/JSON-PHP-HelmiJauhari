<p>Jumlah Nilai TES</p>
<?php
$jsonobj = '{"Ilham":75,"Dava":80,"Ibnu":85}';

$arr = json_decode($jsonobj, true);

echo $arr["Ilham"];
echo $arr["Dava"];
echo $arr["Ibnu"];

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>