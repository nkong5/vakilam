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
            if(x==true)
            {
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
if (isset($_POST["btn"]) && tokenIsValid($_POST['csrf_token'], 'correct-question')) {
    $sql="UPDATE `userdata` SET `usComment` = :usComment WHERE `id` = :id";
    $result=$connect->prepare($sql);
    $result->bindValue(':usComment', $_POST["usComment"], PDO::PARAM_STR);
    $result->bindValue('id', $_GET["id"], PDO::PARAM_INT);
    $query=$result->execute();

    if($query) {
        echo "<div class='okok'>با موقیت ثبت شد</div> ";
    } else {
        echo '<div class="oops">مشکل در ثبت اطلاعات</div>';
    }
}
?>
<div class="posi chap">
    <form  id="form"  name="correct-question" method="post" action="">
        <input type="hidden" name="csrf_token" value="<?php echo generateToken('correct-question'); ?>"/>
        <textarea name="usComment" id="usComment" class="textarea1 chap">
            <?php echo xss($_GET["usComment"]); ?>
        </textarea>
        <br>
        <input type="submit" name="btn" id="btn" class="button1" value="ثبت پاسخ"   >
    </form>
    <a href="../cat/userask.php"><button name="btn">بازگشت</button></a>
</div>

</body>
</html>







