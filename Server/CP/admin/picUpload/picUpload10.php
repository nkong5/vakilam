<?php
include "../../funcs/connect.php";
include "../../funcs/funcs.php";
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

           <div class="body_style">
               <div class="menu">
                      <a href="#" onClick=exit()>    <img src="../../img/exit.png" class="exit">  </a>
                      <a href="../panel.php">      <img src="../../img/admin.png" class="logoright"></a>
                      <p class="float_center textstyle">پنل مدیریت ،بنده وکیلم</p>
               </div>
           </div>

</head>
<body id="style1">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php

if(isset($_POST["btn"]) && tokenIsValid($_POST['csrf_token'], 'picture-uploader') ) {

    if(isset($_FILES["pic"]["name"]) && $_FILES["pic"]["name"] == "")
    {
        header("location:../shekayatpic.php");
    }

    try {
        $info = getimagesize($_FILES["pic"]["tmp_name"]);
        if ($info === FALSE) {
            throw new Exception("Unable to determine image type of uploaded file");
        }

        if ($info[2] !== IMAGETYPE_JPEG) {
            throw new Exception("Invalid file extension. Only JPG and JPEG allowed!");
        }

        $tmp = $_FILES["pic"]["tmp_name"];
        if (!is_uploaded_file($tmp)) {
            throw new Exception("Unable to upload file!");
        }

        $fileName = sanitizeToAlphanumericDot($_FILES["pic"]["name"]);
        $location = "../shekayatPic/" . $fileName;
        if (!move_uploaded_file($tmp, $location)) {
            throw new Exception("Unable to move uploaded file to desired location!");
        }

        $sql = "UPDATE `shekayatpic` SET `piclink` = ? WHERE `shekayatpic`.`id` = ?;";
        $result = $connect->prepare($sql);
        $result->bindValue(1, $fileName, PDO::PARAM_STR);
        $result->bindValue(2, $_GET["id"], PDO::PARAM_INT);
        $query = $result->execute();

        if (!$query) {
            throw new Exception("Unable to update database!");
        }

        if ($_GET["id"] == 1) {
            $A = "shekayatHoghooghi.jpeg";
            $picNewA = "../shekayatPic/" . $A;
            rename($location, $picNewA);
            echo '<div class="posi chap">عکس مورد نظر شما ارسال شد</div>';
            echo "<br>";
            echo "<br>";
            echo '         <div class="posi chap"> <a href="../shekayatpic.php"><button>بازگشت</button></a></div>';
        } elseif ($_GET["id"] == 2) {
            $B = "shekayatKeyfari.jpeg";
            $picNewB = "../shekayatPic/" . $B;
            rename($location, $picNewB);
            echo '<div class="posi chap">عکس مورد نظر شما ارسال شد</div>';
            echo "<br>";
            echo "<br>";
            echo '         <div class="posi chap"> <a href="../shekayatpic.php"><button>بازگشت</button></a></div>';
        } elseif ($_GET["id"] == 3) {
            $C = "shekayatBeDivanEdalat.jpeg";
            $picNewC = "../shekayatPic/" . $C;
            rename($location, $picNewC);
            echo '<div class="posi chap">عکس مورد نظر شما ارسال شد</div>';
            echo "<br>";
            echo "<br>";
            echo '         <div class="posi chap"> <a href="../shekayatpic.php"><button>بازگشت</button></a></div>';
        } elseif ($_GET["id"] == 4) {
            $D = "sheykayatBeSazmanBazresi.jpeg";
            $picNewD = "../shekayatPic/" . $D;
            rename($location, $picNewD);
            echo '<div class="posi chap">عکس مورد نظر شما ارسال شد</div>';
            echo "<br>";
            echo "<br>";
            echo '         <div class="posi chap"> <a href="../shekayatpic.php"><button>بازگشت</button></a></div>';
        } elseif ($_GET["id"] == 5) {
            $E = "shekayatBeSazmanMelal.jpeg";
            $picNewE = "../shekayatPic/" . $E;
            rename($location, $picNewE);
            echo '<div class="posi chap">عکس مورد نظر شما ارسال شد</div>';
            echo "<br>";
            echo "<br>";
            echo '         <div class="posi chap"> <a href="../shekayatpic.php"><button>بازگشت</button></a></div>';
        } elseif ($_GET["id"] == 6) {
            $F = "shekayatSayerMavared.jpeg";
            $picNewF = "../shekayatPic/" . $F;
            rename($location, $picNewF);
            echo '<div class="posi chap">عکس مورد نظر شما ارسال شد</div>';
            echo "<br>";
            echo "<br>";
            echo '         <div class="posi chap"> <a href="../shekayatpic.php"><button>بازگشت</button></a></div>';
        } else {
            echo "Invalid ID.";
        }

    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
} else {
?>
<div class="posi chap">
        <form   method="post" enctype="multipart/form-data" name="picture-uploader" id="form">
            <input type="hidden" name="csrf_token" value="<?php echo generateToken('picture-uploader'); ?>"/>
            <div id="pic">
            <label for="fileField" >
            <input type="file"  name="pic" id="pic"  />
            </label>
            </div>
            <br>
            <br>
        <input type="submit"  name="btn" id="btn" class="button1" value="ارسال عکس "   >
         </form>
    <a href="../shekayatpic.php"><button>بازگشت</button></a>
</div>
<?php
}
?>