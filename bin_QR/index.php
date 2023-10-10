<html>
<head>
    <title>二进制转二维码-Y5neKO</title>
    <style>
        *{
            padding: 0 ;
            margin: 0 auto;
        }
        .a{
            width: 5px;
            height: 5px;
            background: #000;
            float: left;
        }
        .b{
            width: 5px;
            height: 5px;
            background: #fff;
            float: left;
        }
        .c{
            width: 5px;
            height: 5px;
            background: #000;
            margin-left:480px
        }
        .d{
            width: 5px;
            height: 5px;
            background: #fff;
            margin-right:480px
        }
    </style>
</head>
<body>
<form action="" method="post">
    请输入二维码长度：<input type="text" name="Length">
    </br>
    请输入二进制代码：<input type="text" name="Binary">
    </br>
    <input type="submit" value="提交">
</form>
    <script type="text/javascript">
        var a = "<?php echo $_POST["Binary"]; ?>";
        document.write('字符个数：${a.length}</br>');
        for (var o = 0; o < a.length; o++) {
            if(a[o] == 0) {
                if ((o + 1) % <?php echo $_POST["Length"]; ?> == 0) {
                    document.write("<div class='d'></div>");
                } else {
                    document.write("<div class='b'></div>");
                }
            } else {
                if ((o + 1) % <?php echo $_POST["Length"]; ?> == 0) {
                    document.write("<div class='c'></div>");
                } else {
                    document.write("<div class='a'></div>");
                }
            }
        }
    </script>
</body>
</center>
</html>