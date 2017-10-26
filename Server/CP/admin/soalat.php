<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
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
  <a href="panel.php">      <img src="../img/admin.png" class="logoright"></a>
<p class="float_center textstyle">پنل مدیریت ،بنده وکیلم</p>
</div>
    <br>
    <br>
    <center>
  <div class="content2">
   <div class="rmenu">
   <br>

   <ul class="menuu">

   <li><button><a href=cat/azadiVaAmniyat.php target="frame">حق آزادی و امنیت</a></button></li>
   <li><button><a href=cat/hagheHayat.php target=frame>حق حیات</a></button></li>
   <li><button><a href=cat/hagheKar.php target=frame>حق کار</a></button></li>
   <li><button><a href=cat/hagheTahsil.php target=frame>حق تحصیل</a></button></li>
   <li><button><a href=cat/azadieTajamo.php target=frame>حق آزادی تجمع</a></button></li>
   <li><button><a href=cat/AzadieBayan.php target=frame>حق آزادی بیان</a></button></li>
   <li><button><a href=cat/hagheVakil.php target=frame>حق داشتن وکیل</a></button></li>
   <li><button><a href=cat/hagheSalamat.php target=frame>حق سلامت و بهداشت</a></button></li>
   <li><button><a href=cat/azadieMazhab.php target=frame>اصل آزادی مذهب</a></button></li>
   <li><button><a href=cat/asleBarabari.php target=frame>اصل برابری</a></button></li>
   <li><button><a href=cat/hoghoogheFarhangi.php target=frame>حقوق فرهنگی</a></button></li>
   <li><button><a href=cat/mohiteZist.php target=frame>محیط زیست</a></button></li>
   <li><button><a href=cat/shakanjeh.php target=frame>ممنوعیت شکنجه</a></button></li>
   <li><button><a href=cat/hagheMaskan.php target=frame>حق مسکن</a></button></li>
   <li><button><a href=cat/digarMavared.php target=frame>دیگر موارد</a></button></li>
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