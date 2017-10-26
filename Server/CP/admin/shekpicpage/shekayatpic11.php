<?php
include "../../funcs/connect.php";
include "../../funcs/funcs.php";
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../admin/loginTheme.css">
    <link rel="stylesheet" type="text/css" href="../../admin/theme.css">
    <script type="text/javascript">
        function exit(){
            var x= confirm("آیا مایل به خروج هستید؟")
            if(x==true){
                window.location.href="../logout.php";
            }
            else
            {
            }
        }
    </script>
    <link type="text/css" rel="stylesheet" href="../../admin/style.css">
    <link type="text/css" rel="stylesheet" href="../../admin/indexstyle.css">
    <meta charset="UTF-8">

    <?php
    echo '".
           <div class="body_style">
               <div class="menu">
                      <a href="#" onClick=exit()>  <img src="../../img/exit.png" class="exit">  </a>
                      <a href="../../admin/panel.php">      <img src="../../img/admin.png" class="logoright"></a>
                      <p class="float_center textstyle">پنل مدیریت ،بنده وکیلم</p>
               </div>
           </div>
  ."';
    ?>
</head>
<body id="style1">
<br>
<br>
<br>
<br>
<div class="divi">
    <?php

    if(isset($_GET["empty"])){
        echo '<div class="ooops">ابتدا عکس مورد نظر را انتخاب کنید</div>';
    }
    if(isset($_GET["error"])){
        echo '<div class="ooops">مشکل در ارسال عکس وجود دارد</div>';
    }
    if(isset($_GET["alaram"])){
        echo '<div class="ooops">ارسال شما غیر مجاز است</div>';
    }
    if(isset($_GET["picUploaded"])){
        echo '<div class="okokok"> عکس مورد  نظر شما با موفقیت ارسال شد</div>';
    }
    ?>

    <div class="backnew9">
        <a href="../../admin/cat/userask.php">   <div class="username9" align="center">سوال حقوقی</div> </a>
        <a href="../../admin/cat/admindata.php">   <div class="username9" align="center">عناوین حقوقی</div></a>
        <a href="../../admin/shekayat.php">   <div class="username9" align="center">شکایات</div></a>
    </div>
    <div class="rtl">
        <div class="backnew3">
            <div class="adcomment2" align="center">نام عکسی که ارسال شد</div>
            <div class="username2" align="center">عنوان</div>


            <div class="oprate4" align="center">ارسال</div>
        </div>
    </div>
    <div class="rtl">
        <?php
        $sql="select * from shekayatpic WHERE picid =11";
        $result=$connect->query($sql);
        foreach($result as $rows)
        {
            echo '
<div class="backnew4">

  <div class="adcomment" align="center">'.xss($rows["piclink"]).'</div>
  <div class="username" align="center">'.xss($rows["picname"]). '</div>

 <div class="oprate" align="center">


         <a href="../../admin/picUpload/picUpload10.php?id=' .xss($rows["id"]).'&piclink='.xss($rows["piclink"]).'" class="aaa"><div class="click3">ارسال عکس</div></a>





    </select>
    </div>
';
        }
        ?>
    </div>
</div>
</body>
</html>