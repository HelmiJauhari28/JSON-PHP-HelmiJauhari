<p>Jumlah Nilai TES</p>
<?php
$jsonobj = '{"Ilham":75,"Dava":80,"Ibnu":85}';

$arr = json_decode($jsonobj, true);

echo $arr["Sina"];
echo $arr["Rian"];
echo $arr["Fatur"];

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>