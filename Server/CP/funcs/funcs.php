<?php

/**
 * Returns String in upper case form
 * TODO Deprecate function, since returning an core PHP function doesn't serve a greater purpose
 *
 * @param $string
 * @return string
 */
function toupper($string)
{
    return strtoupper($string);
}

/**
 * Returns characters converted to HTML entities
 * TODO Deprecate function, since returning an core PHP function doesn't serve a greater purpose
 *
 * @param $string
 * @return string
 */
function xss($string)
{
	return htmlentities($string, ENT_QUOTES);
}


/**
 * Generates CSRF token
 *
 * @param string $formName Name of form
 * @return string
 */
function generateToken($formName)
{
    $key = 'pjqTSe2P5eCZkDEyS9rTG5Mc#';
    if ( !session_id() ) {
        session_start();
    }
    $sessionId = session_id();

    return sha1($formName.$sessionId.$key);
}

/**
 * Checks if the token for a given form name is valid
 *
 * @param string $token    Value of token
 * @param string $formName Name of form
 *
 * @return bool
 */
function tokenIsValid($token, $formName)
{
    return $token === generateToken($formName);
}

/**
 * Return only alphanumeric characters and dots of a given string
 *
 * @param string $string A given string
 * @return mixed
 */
function sanitizeToAlphanumericDot ($string)
{
    $result = preg_replace("/[^a-zA-Z0-9\.]+/", "", $string);
    return $result;
}

?>