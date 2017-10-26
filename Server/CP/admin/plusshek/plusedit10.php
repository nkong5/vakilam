<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
    include "../../funcs/connect.php";
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
if(isset($_GET["empty"]))
   echo ' <div class="ooops">کاردی خالی است</div>';
if(isset($_GET["full"]))
    echo ' <div class="okok">با موفقیت ثبت شد</div>';
if(isset($_GET["oopsno"]))
    echo ' <div class="ooops">مشکل در ثبت اطلاعات</div>';
?>
<div class="posi chap">
        <br>
        <form action="accAdmin10.php" method="post" name="form1" id="form1" class=" chap"  dir="rtl">
            <div id="datatitr" dir="rtl" >
            <label for="datatitr" class="title chap"  dir="rtl">تیتر</label><br><input class="textarea2 chap" id="datatitr" name="datatitr" dir="rtl" type="text">
            </div>
            <div id="datamind2">
            <label for="datamind2" class="title chap"  dir="rtl">درج نمونه شکایت</label><br><textarea id="datamind2" name="datamind2" class="textarea1 chap"  dir="rtl"></textarea><br>
            </div>
            <br>
        <div id="btn">    <input type="submit"  name="btn" id="btn" class="button1" value="ثبت اطلاعات">  </div>
        </form>



    <a href="../sheknamepage/shekayatName10.php"><button class="oonvar">بازگشت</button></a>
</div>

</body>
</html>