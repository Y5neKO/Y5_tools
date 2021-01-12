<html>
<center>
<?php
$base64_image=$_POST["base64image"];
$image="data:image/jpg;base64,$base64_image";
$imageName = "y5neko_".date("His",time())."_".rand(1111,9999).'.png';
if (strstr($image,",")){
  $image = explode(',',$image);
$image = $image[1];
}
$path = "./".date("Ymd",time());
if (!is_dir($path)){ //判断目录是否存在 不存在就创建
  mkdir($path,0777,true);
}
$imageSrc= $path."/". $imageName; //图片名字
$r = file_put_contents($imageSrc, base64_decode($image));//返回字节数
if (!$r) {
echo "生成失败";
}else{
echo "生成成功<br>";
echo "<img src='$imageSrc'>";
}
?>
</center>
</html>
