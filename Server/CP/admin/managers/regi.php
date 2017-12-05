<?php
include "../../funcs/connect.php";
include "../../funcs/funcs.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
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

    <meta charset="UTF-8">

    <?php
    echo '".
           <div class="body_style">
               <div class="menu">
                      <a href="#" onClick=exit()>  <img src="../../../img/exit.png" class="exit">  </a>
                      <a href="../panel.php">      <img src="../../../img/admin.png" class="logoright"></a>
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
if(isset($_GET["empty"]))
    echo ' <div class="ooops">کاردی خالی است</div>';
if(isset($_GET["full"]))
    echo ' <div class="okok">با موفقیت ثبت شد</div>';
if(isset($_GET["oopsno"]))
    echo ' <div class="ooops">مشکل در ثبت اطلاعات</div>';
if(isset($_GET["error"]))
    echo ' <div class="ooops">رمز عبور برابر نیست</div>';
?>


<div class="posi chap">
    <br>
    <form action="accNew.php" method="post" name="admin-user-data" id="form1" class=" chap"  dir="rtl">
        <input type="hidden" name="csrf_token" value="<?php echo generateToken('admin-user-data'); ?>"/>
        <div id="username" dir="rtl" >
            <label for="username" class="title chap"  dir="rtl">نام کاربری </label><br><input class="textarea2 chap" id="username" name="username" dir="rtl" type="text">
        </div>
        <div id="email" dir="rtl" >
            <label for="email" class="title chap"  dir="rtl">ایمیل</label><br><input class="textarea3 " id="email" name="email" dir="rtl" type="email">
        </div>
        <div id="password" dir="rtl" >
            <label for="password" class="title chap"  dir="rtl">رمز عبور</label><br><input class="textarea2 chap" id="password" name="password" dir="rtl" type="password">
        </div>
        <div id="password2" dir="rtl" >
            <label for="password2" class="title chap"  dir="rtl">تکرار رمز عبور</label><br><input class="textarea2 chap" id="password2" name="password2" dir="rtl" type="password">
        </div>
   <br>
        <div id="btn">    <input type="submit"  name="btn" id="btn" class="button1" value=" ثبت مدیر  ">  </div>
    </form>



    <a href="manag.php"><button class="oonvar">بازگشت</button></a>
</div>

</body>
</html>