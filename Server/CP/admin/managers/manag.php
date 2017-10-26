<?php
include "../../funcs/connect.php";
include "../../funcs/funcs.php";
?>
<html xmlns="http://www.w3.org/1999/html">
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

<?php
if(isset($_GET["deleted"])){
    echo '<div class="okok"> با موفقیت پاک شد</div>';
}
if(isset($_GET["notdeleted"])){
    echo '<div class="ooops">پاک نشد !!!</div>';
}
if(isset($_GET["full"]))
    echo ' <div class="okok">با موفقیت ثبت شد</div>';
?>

<div class="rtl">

    <div class="backnew5">

        <div class="comment3" align="center">نام کاربری مدیر</div>
        <div class="adcomment3" align="center">ایمیل مدیر</div>
        <div class="oprate2" align="center">تنظیمات</div>
        <a href="regi.php" >  <div class="username3" align="center">ساخت اکانت جدید</div></a>
    </div>

</div>
<div class="rtl">
    <?php
    $sql="select * from admin  Order By id Desc ";
    $result=$connect->query($sql);
    foreach($result as $rows)
    {
        echo '
<div class="backnew">

    <div class="comment" align="center">'.xss($rows["username"]).'</div>
    <div class="adcomment" align="center">'.xss($rows["email"]).'</div>
    <div class="oprate" align="center">
    <a  class="aaa" href="delmanag.php?id='.xss($rows["id"]).'" >  <div class="click2">حذف</div></a>
    </div>
';
    }
    ?>
</div>
</body>
</html>