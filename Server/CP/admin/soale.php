<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../admin/style.css">
    <link rel="stylesheet" type="text/css" href="../admin/loginTheme.css">
    <link rel="stylesheet" type="text/css" href="../admin/theme.css">
<script type="text/javascript">
function exit(){
    var x= confirm("آیا مایل به خروج هستید؟")
    if(x==true){
             window.location.href="../admin/logout.php";
    }
    else
    {

    }
}
</script>
</head>
<body>
<?php
include "../funcs/connect.php";
if(1==1)
 {

                 echo '".
<div class="body_style">
<div class="menu">
<a href="#" onClick=exit()>  <img src="../img/exit.png" class="exit">  </a>
<img src="../img/admin.png" class="logoright">
<p class="float_center textstyle">پنل مدیریت ،بنده وکیلم</p>
</div>
    <br>
    <br>
    <center>
  <div class="content2">
   <div class="rmenu">
   <br>

   <ul class="menuu">

  <a href=cat/userask.php target="frame"> <li><div class="newbtn">سوالات حقوقی</div></li></a>

   </ul>

   </div>
   <div class="lmenu"><iframe class="ifrm" frameborder="0" name="frame" id="frame style-1"></iframe>
   </div>



    </div>
    </center>

</div>

</div>
  ."';

     }
else
{
    header("location:login.php");
}
?>
<br>
<br>
<br>
</body>
</html>