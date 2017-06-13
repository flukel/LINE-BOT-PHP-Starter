<?php
/**
 * @Author: fluk
 * @Date:   2017-06-13 05:07:23
 * @Last Modified by:   fluk
 * @Last Modified time: 2017-06-13 05:10:51
 */

$access_token = 'LUzOBN4LJxC2mvmKX0CO7+XHdL5Lrgw/Lnkwz8uCJTXGZdMGuYzqODXob4IISZQCRciewurTGWjj+Vy2+06mSPNpkJKD/nrqC3q5meNDFaPa5sIpl1p8slrThgdUgWw+lQEK+pR6mzD5LQPR+gR9/AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;