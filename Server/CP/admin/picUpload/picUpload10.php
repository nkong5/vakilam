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
if(isset($_POST["btn"])) {
    if(isset($_FILES["pic"]["name"])=="")
    {
        header("location:../shekayatpic.php");
    }
    else
    {
        if (isset($_FILES["pic"]["name"]))
        {
            $file_parts = pathinfo($_FILES["pic"]["name"]);
            $extensions = Array('jpg','jpeg', 'jpe');

            if (in_array($file_parts['extension'], $extensions))
            {
                $piclink = rawurlencode($_FILES["pic"]["name"]);
                $tmp = $_FILES["pic"]["tmp_name"];
                $type = $_FILES["pic"]["type"];

                if (is_uploaded_file($tmp)) {
                    $extension = array("image/jpeg");
                    if (in_array($type, $extension)) {
                        $location = "../shekayatPic/" . $piclink;
                        $move = move_uploaded_file($tmp, $location);
                        if ($move) {
                            $sql = "UPDATE `shekayatpic` SET `piclink` = ? WHERE `shekayatpic`.`id` = ?;";
                            $result = $connect->prepare($sql);
                            $result->bindValue(1, $piclink, PDO::PARAM_STR);
                            $result->bindValue(2, $_GET["id"], PDO::PARAM_INT);
                            $query = $result->execute();
                            if ($query) {
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
                                    //header("location:../shekayatpic.php?alaram=234523");
                                    ?>
                                    Invalid ID.
                                    <?php

                                }
                            } else {
                                //header("location:../shekayatpic.php?error=1230956");
                                ?>
                                Unable to update database.
                                <?php
                                exit;
                            }

                        } else {
                            //header("location:../shekayatpic.php?notnot=333333");
                            ?>
                            Unable to write file.
                            <?php
                            exit;
                        }
                    } else {
                        //header("location:../shekayatpic.php?notUpload=555555");
                        ?>
                        Invalid file type. JPG and JPEG only!
                        <?php
                        exit;
                    }
                }
                else
                {
                    ?>
                    Invalid extension. JPG and JPEG only!
                    <?php
                    exit;
                }
            }
            else
            {
                ?>
                No file uploaded.
                <?php
                exit;
            }
        }
    }
}
else
{ ?>
<div class="posi chap">
        <form   method="post" enctype="multipart/form-data" name="form" id="form">
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