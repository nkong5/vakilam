<?php
function toupper($string)
{
return strtoupper($string);
}
function xss($string)
{
	return htmlspecialchars($string);
}
?>