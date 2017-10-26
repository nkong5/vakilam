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
    <link rel="stylesheet" type="text/css" href="../loginTheme.css">
    <link rel="stylesheet" type="text/css" href="../theme.css">
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
    <link type="text/css" rel="stylesheet" href="../style.css">
    <link type="text/css" rel="stylesheet" href="../indexstyle.css">
    <meta charset="UTF-8">

    <?php
    echo '".
           <div class="body_style">
               <div class="menu">
                      <a href="#" onClick=exit()>  <img src="../../img/exit.png" class="exit">  </a>
                      <a href="../panel.php">      <img src="../../img/admin.png" class="logoright"></a>
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
        <a href="../shekayat.php">   <div class="username9" align="center">شکایات</div> </a>
        <a href="userask.php">   <div class="username9" align="center">سوال حقوقی</div></a>
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
    $sql="select * from admindata ";
    $result=$connect->query($sql);
    foreach($result as $rows)
    {
        echo '
<div class="backnew4">

  <div class="adcomment" align="center">'.xss($rows["datamind"]).'</div>
    <div class="username" align="center">'.xss($rows["dataname"]).'</div>


    <div class="oprate" align="center">


         <a href="../dataedit/dataedit.php?id='.xss($rows["id"]).'&datamind='.xss($rows["datamind"]).'" class="aaa"><div class="click3">درج توضیحات</div></a>





    </select>
    </div>
';
    }
    ?>
</div>
</div>
</body>
</html>