<?php
include "../funcs/connect.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../admin/style.css">
    <link rel="stylesheet" type="text/css" href="../admin/loginTheme.css">
    <link rel="stylesheet" type="text/css" href="../admin/theme.css">
<script type="text/javascript">
function exit(){
    var x= confirm("آیا مایل به خروج هستید؟")
    if(x==true){
             window.location.href="../admin/logout.php";
    }
    else
    {

    }
}
</script>
    <script type="text/javascript">
        function popup(){
            var x= confirm("آیا اطمینان دارید که می خواهید اطلاعات را پاک کنید؟")
            if(x==true){
                window.location.href="../admin/logout.php";
            }
            else
            {

            }
        }
    </script>
</head>
<body>
<?php
if(1==1)
 {
     echo '".
   <div>
   <br>
   <br>
                      <a href="managers/manag.php"> <div class="start3">مدیران</div></a>

               </div>
           <div class="body_style">
               <div class="menu">
                      <a href="#" onClick=exit()>  <img src="../img/exit.png" class="exit">  </a>
                      <a href="panel.php">      <img src="../img/admin.png" class="logoright"></a>
                                    <p class="float_center textstyle">پنل مدیریت ،بنده وکیلم</p>
               </div>
                           <a href="cat/admindata.php"> <div class="start1">عناوین حقوقی</div></a>
                              <a href="cat/userask.php"> <div class="start2">سوال حقوقی</div></a>
                                  <a href="shekayat.php"> <div class="start2">شکایات</div></a>
               </div>
               <br><br><br>

  ';
 }
     else
         {
           header("Location:login.php");
           exit;
         }
?>

<br>
<br>
<br>

</body>
</html>