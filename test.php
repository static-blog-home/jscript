<?php
//Bathroom 

if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "bot"))
{
$sayi = rand(1,5);
if($sayi==1){header("Location: https://www.bhg.com/bathroom/decorating/bathroom-decorating-ideas/"); }
if($sayi==2){header("Location: https://www.bhg.com/bathroom/remodeling/makeover/bathroom-remodeling-ideas/"); }
if($sayi==3){header("Location: https://www.bhg.com/bathroom/remodeling/makeover/small-black-white-bathroom-makeover/"); }
if($sayi==4){header("Location: https://www.bhg.com/bathroom/remodeling/makeover/modern-meets-eclectic-in-this-amazing-bath-remodel/"); }
if($sayi==5){header("Location: https://www.bhg.com/bathroom/decorating/bathroom-decorating-ideas/"); }
}


 ?>