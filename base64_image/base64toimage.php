<?php
/**
 * 删除当前目录及其目录下的所有目录和文件
 * @param string $path 待删除的目录
 * @note  $path路径结尾不要有斜杠/(例如:正确[$path='./static/image'],错误[$path='./static/image/'])
 */
function deleteDir($path2) {

    if (is_dir($path2)) {
        //扫描一个目录内的所有目录和文件并返回数组
        $dirs = scandir($path2);

        foreach ($dirs as $dir) {
            //排除目录中的当前目录(.)和上一级目录(..)
            if ($dir != '.' && $dir != '..') {
                //如果是目录则递归子目录，继续操作
                $sonDir = $path2.'/'.$dir;
                if (is_dir($sonDir)) {
                    //递归删除
                    deleteDir($sonDir);

                    //目录内的子目录和文件删除后删除空目录
                    @rmdir($sonDir);
                } else {

                    //如果是文件直接删除
                    @unlink($sonDir);
                }
            }
        }
        @rmdir($path);
    }
}
?>
<html>
<center>
<?php
$base64_image=$_POST["base64image"];
$image="data:image/jpg;base64,$base64_image";
$imageName = "25220_".date("His",time())."_".rand(1111,9999).'.png';
if (strstr($image,",")){
  $image = explode(',',$image);
$image = $image[1];
}
$path = "./".date("Ymd",time());
if (!is_dir($path)){ //判断目录是否存在 不存在就创建
  mkdir($path,0777,true);
}
$imageSrc= $path."/". $imageName; //图片名字
$r = file_put_contents($imageSrc, base64_decode($image));//返回的是字节数
if (!$r) {
echo "生成失败";
}else{
echo "生成成功<br>";
echo "<img src='$imageSrc'>";
}
?>
</center>
</html>