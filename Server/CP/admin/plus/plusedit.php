<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../../funcs/funcs.php";
include "../../funcs/connect.php";
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
    echo '
           <div class="body_style">
               <div class="menu">
                      <a href="#" onClick=exit()>  <img src="../../img/exit.png" class="exit">  </a>
                      <a href="../panel.php">      <img src="../../img/admin.png" class="logoright"></a>
                      <p class="float_center textstyle">پنل مدیریت ،بنده وکیلم</p>
               </div>
           </div>
  ';
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

?>


<div class="posi chap">



        <br>
        <form action="accAdmin.php" method="post" name="submit-faq" id="submit-faq" class=" chap"  dir="rtl">
            <input type="hidden" name="csrf_token" value="<?php echo generateToken('submit-faq'); ?>"/>
            <div id="username" dir="rtl" >
            <label for="username" class="title chap"  dir="rtl">نام کاربر</label><br><input class="textarea2 chap" id="username" name="username" dir="rtl" type="text">
            </div>

            <div id="usComment">
            <label for="usComment" class="title chap"  dir="rtl">پرسش کاربر</label><br><textarea id="usComment" name="usComment" class="textarea1 chap"  dir="rtl"></textarea><br>
            </div>
            <div id="adComment">
             <label for="adComment" class="title chap"  dir="rtl">پاسخ به پرسش کاربر</label><br><textarea id="adComment" name="adComment" class="textarea1 chap"  dir="rtl">   </textarea><br>
            <br>
            </div>
        <div id="btn">    <input type="submit"  name="btn" id="btn" class="button1" value="ثبت اطلاعات">  </div>
        </form>



    <a href="../cat/userask.php"><button class="oonvar">بازگشت</button></a>
</div>

</body>
</html>