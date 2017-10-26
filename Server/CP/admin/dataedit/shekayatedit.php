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
if(isset($_POST["btn"]))
{
    $sql="UPDATE `technofa_admin`.`shekayat` SET `datamindd` = ? WHERE `shekayat`.`id` = ? ;";
    $result=$connect->prepare($sql);
    $result->bindValue(1,$_POST["datamindd"]);
    $result->bindValue(2,$_GET["id"]);
    $query=$result->execute();
    if($query)
    {
        header("location:../shekayat.php");
    }
    else
    {
        echo '<div class="ooops">مشکل در ثبت اطلاعات</div>';
    }
}
?>
<div class="posi chap">
    <form  id="form"  name="form1" method="post" >
        <textarea name="datamindd" id="datamindd" class="textarea1 chap"  dir="rtl">
            <?=

          $_GET["datamindd"];

            ?>
        </textarea>
        <br>

        <input type="submit"  name="btn" id="btn" class="button1" value="ثبت پاسخ"   >

    </form>
    <a href="../shekayat.php"><button>بازگشت</button></a>
</div>

</body>
</html>