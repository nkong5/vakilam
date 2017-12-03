<?php

function toupper($string)
{
    return strtoupper($string);
}

function xss($string)
{
	return htmlentities($string, ENT_QUOTES);
}

?>