<html>
    <head>
        <title>base64转图片</title>
    </head>
    <body>
        <h1>base64转图片</h1>
        <p>数据不能太大，不然会报错（防止爆破）</p>
        <form action="base64toimage.php" method="post">
        <textarea name="base64image" cols="80" rows="10"></textarea><br />
        <input type="submit" value="生成">
        </form>
    </body>
</html>