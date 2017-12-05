<?php
include "../../funcs/connect.php";
include "../../funcs/funcs.php";
?>
<html>
<head>
    <meta charset="UTF-8">
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
                      <a href="#" onClick=exit()>  <img src="../../img/exit.png" class="exit">  </a>
                      <a href="../panel.php">      <img src="../../img/admin.png" class="logoright"></a>
                      <p class="float_center textstyle">پنل مدیریت ،بنده وکیلم</p>
               </div>
           </div>
  ."';
        ?>
    </head>
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
if(isset($_POST["btn"]) && tokenIsValid($_POST['csrf_token'], 'shekayatname-description'))
{
    $sql="UPDATE `shekayatname` SET `datamind2` = ?, `datatitr` = ? WHERE `shekayatname`.`id` = ?;";

    $result=$connect->prepare($sql);

    $result->bindValue(1, $_POST["datamind2"], PDO::PARAM_STR);
    $result->bindValue(2, $_POST["datatitr"], PDO::PARAM_STR);
    $result->bindValue(3, $_GET["id"], PDO::PARAM_INT);

    $query=$result->execute();

    if($query)
    {
        if($_GET["id"]==1)
        {
            header('Location:../sheknamepage/shekayatName10.php');
            exit;
        }
        elseif($_GET["id"]==2)
        {
            header('Location:../sheknamepage/shekayatName11.php');
            exit;
        }
        elseif($_GET["id"]==3)
        {
            header('Location:../sheknamepage/shekayatName12.php');
            exit;
        }
        elseif($_GET["id"]==4)
        {
            header('Location:../sheknamepage/shekayatName13.php');
            exit;
        }
        elseif($_GET["id"]==5)
        {
            header('Location:../sheknamepage/shekayatName14.php');
            exit;
        }
        elseif($_GET["id"]==6)
        {
            header('Location:../sheknamepage/shekayatName15.php');
            exit;
        }

    }
    else
    {
        echo '<div class="ooops">مشکل در ثبت اطلاعات</div>';
    }
}
?>
<div class="posi chap">
    <form  id="form"  name="shekayatname-description" method="post" >
        <input type="hidden" name="csrf_token" value="<?php echo generateToken('shekayatname-description'); ?>"/>
        <h3 dir="rtl">تیتر</h3>
        <textarea name="datatitr" id="datatitr" class="textarea1 chap"  dir="rtl">
            <?php if (isset($_GET["datatitr"])) echo xss($_GET["datatitr"]); ?>
        </textarea>
        <br>
        <br>
        <br>
        <h3 dir="rtl">توضیحات</h3>
        <textarea name="datamind2" id="datamind2" class="textarea1 chap"  dir="rtl">
            <?php if (isset($_GET["datamind2"])) echo xss($_GET["datamind2"]); ?>
        </textarea>
        <br>

        <input type="submit"  name="btn" id="btn" class="button1" value="ثبت"   >
    </form>
    <?php
    if($_GET["id"]==1)
    {
        echo' <a href="../sheknamepage/shekayatName10.php"><button>بازگشت</button></a>';
    }
    elseif($_GET["id"]==2)
    {
        echo' <a href="../sheknamepage/shekayatName11.php"><button>بازگشت</button></a>';
    }
    elseif($_GET["id"]==3)
    {
        echo' <a href="../sheknamepage/shekayatName12.php"><button>بازگشت</button></a>';
    }
    elseif($_GET["id"]==4)
    {
        echo' <a href="../sheknamepage/shekayatName13.php"><button>بازگشت</button></a>';
    }
    elseif($_GET["id"]==5)
    {
        echo' <a href="../sheknamepage/shekayatName14.php"><button>بازگشت</button></a>';
    }
    elseif($_GET["id"]==6)
    {
        echo' <a href="../sheknamepage/shekayatName15.php"><button>بازگشت</button></a>';
    }
    ?>







</div>

</body>
</html>