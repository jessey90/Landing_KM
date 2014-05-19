<!DOCTYPE html>
<html>
<head>
    <title>LinhSkin</title>
    <meta charset="UTF-8">
    <script type="text/javascript">
        function validateForm()
        {
            var x=document.forms["myForm"]["name"].value;
            var y=document.forms["myForm"]["email"].value;
            var z=document.forms["myForm"]["phone"].value;
            var atpos= y.indexOf("@");
            var dotpos=y.lastIndexOf(".");

            if (x==null || x=="" || y==null || y=="" || z==null || z=="")
            {
                if(x==null || x==""){
                    alert("Mời bạn nhập tên");
                } else if (y==null || y=="") {
                    alert("Mời bạn nhập Email");
                } else if (z==null || z==""){
                    alert("Mời bạn nhập Số điện thoại");
                } else {
                }
                return false;
            } else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {
                alert("Sai định dạng Email");
                return false;
        } else if (z.length < 10) {
                alert("Số điện thoại dưới 10 ký tự");
            }
        }
    </script>
</head>
<body>
<div>
    <?php
        if(isset($_GET["code"])){
            echo $_GET["code"];
        }else{?>
            <form name="myForm" action="logic.php" onsubmit="return validateForm()" method="post">
                Tên: <input type="text" name="name"><br>
                Email: <input type="text" name="email"><br>
                Số ĐT: <input type="text" name="phone">
                <input type="submit" name="submit">
            </form>
        <?php
        }
    ?>

</div>
</body>
</html>