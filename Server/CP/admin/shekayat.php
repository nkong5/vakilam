<?php
include "../funcs/connect.php";
include "../funcs/funcs.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="loginTheme.css">
    <link rel="stylesheet" type="text/css" href="theme.css">
    <script type="text/javascript">
        function exit(){
            var x= confirm("آیا مایل به خروج هستید؟")
            if(x==true){
                window.location.href="logout.php";
            }
            else
            {
            }
        }
    </script>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="indexstyle.css">
    <meta charset="UTF-8">
    <?php
    echo '".
           <div class="body_style">
               <div class="menu">
                      <a href="#" onClick=exit()><img src="../img/exit.png" class="exit">  </a>
                      <a href="panel.php"><img src="../img/admin.png" class="logoright"></a>
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
    if(isset($_GET["acceptOK"])){
        echo '<div class="okok"> تایید شد </div>';
    }
    if(isset($_GET["error"])){
        echo '<div class="ooops"> تایید انجام نشد</div>';
    }
    ?>
    <?php
    if(isset($_GET["deleted"])){
        echo '<div class="okok"> با موفقیت پاک شد</div>';
    }
    if(isset($_GET["notdeleted"])){
        echo '<div class="ooops">پاک نشد !!!</div>';
    }
    ?>
    <div class="backnew10">
        <a href="cat/userask.php">   <div class="username9" align="center">سوال حقوقی</div> </a>
        <a href="cat/admindata.php">   <div class="username9" align="center">عناوین حقوقی</div></a>
    </div>
    <div class="rtl">
        <div class="backnew3">
            <div class="adcomment2" align="center">توضیحات</div>
            <div class="username2" align="center">عنوان</div>
            <div class="oprate4" align="center">تغییرات</div>
        </div>
    </div>
    <div class="rtl">
        <?php
        $sql="select * from shekayat ";
        $result=$connect->query($sql);
        foreach($result as $rows)
        {
            echo '
<div class="backnew4">
    <div class="adcomment" align="center">'.xss($rows["datamindd"]).'</div>
    <div class="username" align="center">'.xss($rows["dataname"]).'</div>
    <div class="oprate" align="center">
         <a href="dataedit/shekayatedit.php?id='.xss($rows["id"]).'&datamindd='.xss($rows["datamindd"]).'" class="aaa"><div class="click3">درج توضیحات</div></a>
         ';
            if($rows["dataid"]==10)
            {
                echo'
            <a href="shekpicpage/shekayatpic10.php" style="text-decoration: none;"><div class="click14">ارسال عکس شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==11)
            {
                echo'
            <a href="shekpicpage/shekayatpic11.php" style="text-decoration: none;"><div class="click14">ارسال عکس شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==12)
            {
                echo'
            <a href="shekpicpage/shekayatpic12.php" style="text-decoration: none;"><div class="click14">ارسال عکس شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==13)
            {
                echo'
             <a href="shekpicpage/shekayatpic13.php" style="text-decoration: none;"><div class="click14">ارسال عکس شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==14)
            {
                echo'
            <a href="shekpicpage/shekayatpic14.php" style="text-decoration: none;"><div class="click14">ارسال عکس شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==15)
            {
                echo'
            <a href="shekpicpage/shekayatpic15.php" style="text-decoration: none;"><div class="click14">ارسال عکس شکایت</div></a>
           ';
            }




            echo''; /* ------------------------------------------------------------------------------ */




            if($rows["dataid"]==10)
            {
                echo'
            <a href="sheknamepage/shekayatName10.php" style="text-decoration: none;"><div class="click15">درج نمونه شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==11)
            {
                echo'
             <a href="sheknamepage/shekayatName11.php" style="text-decoration: none;"><div class="click15">درج نمونه شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==12)
            {
                echo'
            <a href="sheknamepage/shekayatName12.php" style="text-decoration: none;"><div class="click15">درج نمونه شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==13)
            {
                echo'
               <a href="sheknamepage/shekayatName13.php" style="text-decoration: none;"><div class="click15">درج نمونه شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==14)
            {
                echo'
            <a href="sheknamepage/shekayatName14.php" style="text-decoration: none;"><div class="click15">درج نمونه شکایت</div></a>
           ';
            }
            elseif($rows["dataid"]==15)
            {
                echo'
             <a href="sheknamepage/shekayatName15.php" style="text-decoration: none;"><div class="click15">درج نمونه شکایت</div></a>
           ';
            }

            echo'

    </div>
';
        }

        ?>
    </div>
</div>
</body>
</html>