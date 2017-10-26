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
    <script type="text/javascript">
        function popup(){
            var x= confirm("آیا اطمینان دارید که می خواهید اطلاعات را پاک کنید؟")
            if(x==true){
                window.location.href="delmanag.php";
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
if(isset($_GET["acceptOK"])){
    echo '<div class="okok"> تایید شد </div>';
}
if(isset($_GET["error"])){
    echo '<div class="ooops"> تایید انجام نشد</div>';
}
?>
<?php
if(isset($_GET["deleted"])){
    echo '<div class="okok"> با موفقیت پاک شد</div>';
}
if(isset($_GET["notdeleted"])){
    echo '<div class="ooops">پاک نشد !!!</div>';
}
?>

<div class="backnew10">
    <a href="../shekayat.php">   <div class="username9" align="center">شکایات</div> </a>
    <a href="admindata.php">   <div class="username9" align="center">عناوین حقوقی</div></a>
</div>

<div class="rtl">
   <a href="../plus/plusedit.php" ><div class="oprate5" align="center">ثبت پرسش و پاسخ</div> </a>
<div class="backnew2">
    <div class="username2" align="center">نام کاربر</div>
    <div class="comment2" align="center">سوال حقوقی کاربر</div>
    <div class="adcomment2" align="center">پاسخ سوال حقوقی کاربر</div>
    <div class="oprate2" align="center">درج پاسخ و تغییرات</div>

</div>
</div>
<div class="rtl">
<?php
$sql="select * from userdata  Order By id Desc ";

$result=$connect->query($sql);


foreach($result as $rows)
{
       echo '
<div class="backnew">
    <div class="username" align="center">'.xss($rows["username"]).'</div>
    <div class="comment" align="center">'.xss($rows["usComment"]).'</div>
    <div class="adcomment" align="center">'.xss($rows["adComment"]).'</div>
    <div class="oprate" align="center">
    ';
    if($rows["status"]==0) {
        echo '
         <a href="../accept/acceptuser.php?id=' .xss($rows["id"]). '" class="aaa"><div class="click">تایید</div></a>
    ';
    }
        elseif($rows["status"]==1){
            echo'
         <a href="../accept/deacceptuser.php?id='.xss($rows["id"]).'" class="aaa"><div class="click">لغو نمایش</div></a>
    ';
        }


    if($rows["status"]==1)
    {
        echo'
            <div class="click12">تایید شده</div>
           ';
    }
    else
    {
        echo'
            <div class="click13">تایید نشده</div>
           ';
    };
    echo'
         <a href="../delet/delet-comment.php?id='.xss($rows["id"]).'" class="aaa" onClick=popup()><div class="click2">حذف</div></a>
         <a href="../ADedit/adedit.php?id='.xss($rows["id"]).'&adComment='.xss($rows["adComment"]).'" class="aaa"><div class="click3">درج پاسخ</div></a>
         <a href="../CUedit/cuedit.php?id='.xss($rows["id"]).'&usComment='.xss($rows["usComment"]).'" class="aaa"><div class="click4">اصلاح سوال</div></a>
         ';

    echo'

<select name="forma" onchange="location = this.value;" class="click5">
<option class="click6">پیوست</option>
         <option value="../accept/acAzadiVaAmniyat.php?id='.xss($rows["id"]).'">آزادی و امنیت</option> //sql value 10
         <option value="../accept/acHaghHayat.php?id='.xss($rows["id"]).'">حق زندگی</option></a> //sql value 11
         <option value="../accept/acHagheKar.php?id='.xss($rows["id"]).'">حق کار</option></a> //sql value 12
         <option value="../accept/acHaghTahsil.php?id='.xss($rows["id"]).'">حق تحصیل</option> //sql value 13
         <option value="../accept/acAzadieTajamo.php?id='.xss($rows["id"]).'">حقوق کودک</option> //sql value 14
         <option value="../accept/acAzadieBayan.php?id='.xss($rows["id"]).'">حق آزادی بیان</option> //sql value 15
         <option value="../accept/acHagheVakil.php?id='.xss($rows["id"]).'">حق دادخواهی و دادرسی عادلانه</option>//sql value 16
         <option value="../accept/acHagheSalamat.php?id='.xss($rows["id"]).'">حق سلامت و بهداشت</option> //sql value 17
         <option value="../accept/acAzadieMazhab.php?id='.xss($rows["id"]).'">حق آزادی عقیده و مذهب </option>//sql value 18
         <option value="../accept/acAsleBarabari.php?id='.xss($rows["id"]).'">اصل برابری و عدم تبعیض</option> //sql value 19
         <option value="../accept/acHoghoogheFarhangi.php?id='.xss($rows["id"]).'">حقوق اقلیت‌ها</option> //sql value 20
         <option value="../accept/acMohiteZistePaak.php?id='.xss($rows["id"]).'">حق برخورداری از محیط زیست سالم</option>//sql value 21
         <option value="../accept/acMamnooeiyateShekanje.php?id='.xss($rows["id"]).'">اصل ممنوعیت شکنجه</option>//sql value 22
         <option value="../accept/acHagheMaskan.php?id='.xss($rows["id"]).'">حقوق زنان</option>//sql value 23
         <option value="../accept/acDigarMavared.php?id='.xss($rows["id"]).'">سایر حقوق</option>//sql value 24
    </select>
    ';
    if($rows["catstatus"]==24)
    {
        echo'
            <div class="click10">سایر حقوق</div>
           ';
    }
    elseif($rows["catstatus"]==23)
    {
        echo'
            <div class="click10">حقوق زنان</div>
           ';
    }
    elseif($rows["catstatus"]==22)
    {
        echo'
            <div class="click10">اصل ممنوعیت شکنجه</div>
           ';
    }
    elseif($rows["catstatus"]==21)
    {
        echo'
            <div class="click10">حق برخورداری از محیط زیست سالم</div>
           ';
    }
    elseif($rows["catstatus"]==20)
    {
        echo'
            <div class="click10">حقوق اقلیت‌ها</div>
           ';
    }
    elseif($rows["catstatus"]==19)
    {
        echo'
            <div class="click10">اصل برابری و عدم تبعیض</div>
           ';
    }
    elseif($rows["catstatus"]==18)
    {
        echo'
            <div class="click10">حق آزادی عقیده و مذهب </div>
           ';
    }
    elseif($rows["catstatus"]==17)
    {
        echo'
            <div class="click10">حق سلامت و بهداشت</div>
           ';
    }
    elseif($rows["catstatus"]==16)
    {
        echo'
            <div class="click10">حق دادخواهی و دادرسی عادلان</div>
           ';
    }
    elseif($rows["catstatus"]==15)
    {
        echo'
            <div class="click10">حق آزادی بیان</div>
           ';
    }
    elseif($rows["catstatus"]==14)
    {
        echo'
            <div class="click10">حق کودک</div>
           ';
    }
    elseif($rows["catstatus"]==13)
    {
        echo'
            <div class="click10">حق تحصیل</div>
           ';
    }
    elseif($rows["catstatus"]==12)
    {
        echo'
            <div class="click10">حق کار</div>
           ';
    }
    elseif($rows["catstatus"]==11)
    {
        echo'
            <div class="click10">حق زندگی</div>
           ';
    }
    elseif($rows["catstatus"]==10)
    {
        echo'
            <div class="click10">آزادی و امنیت</div>
           ';
    }
    else
    {
        echo'
            <div class="click11">پیوستی انتخاب نشده</div>
           ';
    };

echo'
    </div>

';
}

?>
</div>
</body>
</html>
