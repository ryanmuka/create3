<?php
while (true) {
$nama = explode(" ", nama());
$nama1 = $nama[0];
$nama2 = $nama[1];
$hasil_1= acak(2);
$email = ''.$nama1.''.$hasil_1.'%40haikak.my.id';
$datacurl = ''.$nama1.''.$hasil_1.'';

$cookie = curl('https://www.instagram.com/accounts/web_create_ajax/attempt/', null, null);
$csrf = ($cookie[2]['csrftoken']);
$rur = ($cookie[2]['rur']);
$mid = ($cookie[2]['mid']);
$no = 1;
$headers = array();
$headers[] = 'Host: www.instagram.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers[] = 'X-CSRFToken: '.$csrf.'';
$headers[] = 'X-IG-WWW-Claim: 0';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Origin: https://www.instagram.com';
$headers[] = 'Connection: close';
$headers[] = 'Referer: https://www.instagram.com/';
$headers[] = 'Cookie: rur='.$rur.'; csrftoken='.$csrf.'; mid='.$mid.'; ig_did=EA93A123-CB93-4AEC-8793-98A66201BFA8';

$data = curl('https://www.instagram.com/accounts/web_create_ajax/attempt/', 'email='.$datacurl.'@haikak.my.id&enc_password=%23PWD_INSTAGRAM_BROWSER%3A10%3A1594305387%3AAfpQAJlgURvD3350lMjlRu4ilP7IUJ2E65oGVjGpgrC32SRTcgFezeMEheqJC20kN4zMSuAF%2BfIV2MJvTUnEyRuAF4kIGqsksrXxVj4xd3A6W1ixn6%2FuY4ES6LtHQ0UE66C8Wp9wyoDDMAQp3g%3D%3D&username='.$datacurl.'&first_name='.$nama1.'+'.$nama2.'&month=7&day=9&year=1999&client_id=Xwcm2gALAAE35SQKgoHIcTE4FoZU&seamless_login_enabled=1', $headers);
$tersedia = get_between($data[1], 'suggestions": ["', '",');

$headers10 = array();
$headers10[] = 'Host: www.instagram.com';
$headers10[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0';
$headers10[] = 'Accept: */*';
$headers10[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers10[] = 'X-CSRFToken: '.$csrf.'';
$headers10[] = 'X-IG-WWW-Claim: 0';
$headers10[] = 'Content-Type: application/x-www-form-urlencoded';
$headers10[] = 'X-Requested-With: XMLHttpRequest';
$headers10[] = 'Origin: https://www.instagram.com';
$headers10[] = 'Connection: close';
$headers10[] = 'Referer: https://www.instagram.com/';
$headers10[] = 'Cookie: rur='.$rur.'; csrftoken='.$csrf.'; mid='.$mid.'; ig_did=EA93A123-CB93-4AEC-8793-98A66201BFA8';

$data = curl('https://www.instagram.com/accounts/web_create_ajax/attempt/', 'email='.$datacurl.'@haikak.my.id&enc_password=%23PWD_INSTAGRAM_BROWSER%3A10%3A1594305387%3AAfpQAJlgURvD3350lMjlRu4ilP7IUJ2E65oGVjGpgrC32SRTcgFezeMEheqJC20kN4zMSuAF%2BfIV2MJvTUnEyRuAF4kIGqsksrXxVj4xd3A6W1ixn6%2FuY4ES6LtHQ0UE66C8Wp9wyoDDMAQp3g%3D%3D&username='.$tersedia.'&first_name='.$nama1.'+'.$nama2.'&month=7&day=9&year=1999&client_id=Xwcm2gALAAE35SQKgoHIcTE4FoZU&seamless_login_enabled=1', $headers10);
if (strpos($data[1], 'false')) {
	echo "[1] Belum Terdaftarkan Username : $tersedia\n";
} else {
	echo "[1] Sudah Terdaftarkan Email Tersebut\n";
}

$headers2 = array();
$headers2[] = 'Host: i.instagram.com';
$headers2[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0';
$headers2[] = 'Accept: */*';
$headers2[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers2[] = 'X-CSRFToken: '.$csrf.'';
$headers2[] = 'X-IG-WWW-Claim: 0';
$headers2[] = 'Content-Type: application/x-www-form-urlencoded';
$headers2[] = 'Origin: https://www.instagram.com';
$headers2[] = 'Connection: close';
$headers2[] = 'Referer: https://www.instagram.com/';
$headers2[] = 'Cookie: rur='.$rur.'; csrftoken='.$csrf.'; mid='.$mid.'; ig_did=EA93A123-CB93-4AEC-8793-98A66201BFA8';

$sendmail = curl('https://i.instagram.com/api/v1/accounts/send_verify_email/', 'device_id=Xwcm2gALAAE35SQKgoHIcTE4FoZU&email='.$datacurl.'@haikak.my.id', $headers2);
if (strpos($sendmail[1], 'Periksa Email Anda')) {
	echo "[2] Information : Periksa Email Anda $datacurl@haikak.my.id\n";
} elseif (strpos($sendmail[1], 'Harap tunggu beberapa menit sebelum mencoba lagi.')) {
	echo "[2] Information : Harap tunggu beberapa menit sebelum mencoba lagi.\n";
}
echo "[4] Sedang Getting Code Tunggu 30 detik\n";
sleep(30);
echo "[5] Sedang Verifikasi\n";
$toket = curl('http://haikak.my.id/user.php?user='.$datacurl.'%40haikak.my.id', null, null);
$phpssid = ($toket[2]['PHPSESSID']);
$headers3 = array();
$headers3[] = 'Host: haikak.my.id';
$headers3[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0';
$headers3[] = 'Accept: */*';
$headers3[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers3[] = 'X-Requested-With: XMLHttpRequest';
$headers3[] = 'Connection: close';
$headers3[] = 'Referer: http://haikak.my.id/';
$headers3[] = 'Cookie: PHPSESSID='.$phpssid.'; tmail-emails=a%3A1%3A%7Bi%3A0%3Bs%3A19%3A%22'.$datacurl.'%40haikak.my.id%22%3B';

$getmail = curl('http://haikak.my.id/mail.php', null, $headers3);
$code = get_between($getmail[1], 'title">', ' is');
$checkotp = curl('https://i.instagram.com/api/v1/accounts/check_confirmation_code/', 'code='.$code.'&device_id=Xwcm2gALAAE35SQKgoHIcTE4FoZU&email='.$nama1.''.$hasil_1.'@haikak.my.id', $headers2);
echo "[6] Kode OTP : $code\n";
if (strpos($checkotp[1], 'Kode tersebut tidak valid. Anda dapat meminta kode yang baru.')) {
	echo "[7] Kode tersebut tidak valid. Anda dapat meminta kode yang baru.\n";
} else {
	echo "[7] Kode Tersebut Valid. Register Success\n";
}
$signupcode = get_between($checkotp[1], 'code": "', '"');

$headers4 = array();
$headers4[] = 'Host: www.instagram.com';
$headers4[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0';
$headers4[] = 'Accept: */*';
$headers4[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
$headers4[] = 'X-CSRFToken: '.$csrf.'';
$headers4[] = 'X-IG-WWW-Claim: 0';
$headers4[] = 'Content-Type: application/x-www-form-urlencoded';
$headers4[] = 'X-Requested-With: XMLHttpRequest';
$headers4[] = 'Origin: https://www.instagram.com';
$headers4[] = 'Connection: close';
$headers4[] = 'Referer: https://www.instagram.com/';
$headers4[] = 'Cookie: rur='.$rur.'; csrftoken='.$csrf.'; mid='.$mid.'; ig_did=EA93A123-CB93-4AEC-8793-98A66201BFA8';

$last = curl('https://www.instagram.com/accounts/web_create_ajax/', 'email='.$datacurl.'%40haikak.my.id&enc_password=%23PWD_INSTAGRAM_BROWSER%3A10%3A1594308718%3AAfpQACqAYkorR0doZjyZqzzdYiCM0E6vgZMvY8%2BBPLTyFD9STVnqOCxN6ljHm%2FGjssxn%2B77X3r%2BzSo5WGDUPrPFcsL%2FXw%2F8W2fwyiS1K9NYnaXsoxJrYbgVPwV5PD4wvy0bGeRlKyWXcRw%2FKKg%3D%3D&username='.$tersedia.'&first_name='.$nama1.'+'.$nama2.'&month=7&day=9&year=1996&client_id=Xwcm2gALAAE35SQKgoHIcTE4FoZU&seamless_login_enabled=1&tos_version=row&force_sign_up_code='.$signupcode.'', $headers4);
if (strpos($checkotp[1], '"status": "ok"')) {
	echo "[8] Sukses Register Silakan Login";
	fwrite(fopen("akuninstagram.txt", "a"), "$tersedia|Alfarz123 Email : datacurl@haikak.my.id\n");
} else {
	echo "[8] Gagal Register";
}
echo "\n";
echo "\n";
echo "\n";
}
function get_between($string, $start, $end) 
    {
        $string = " ".$string;
        $ini = strpos($string,$start);
        if ($ini == 0) return "";
        $ini += strlen($start);
        $len = strpos($string,$end,$ini) - $ini;
        return substr($string,$ini,$len);
    }

function nama()
	{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$ex = curl_exec($ch);
	// $rand = json_decode($rnd_get, true);
	preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
	return $name[2][mt_rand(0, 14) ];
	}
function acak($panjang)
{
    $karakter= '1234567890';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($karakter)-1);
  $string .= $karakter{$pos};
    }
    return $string;
}

function curl($url,$post,$headers)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	if ($headers !== null) curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	if ($post !== null) curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	$result = curl_exec($ch);
	$header = substr($result, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
	$body = substr($result, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
	preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
	$cookies = array()
;	foreach($matches[1] as $item) {
	  parse_str($item, $cookie);
	  $cookies = array_merge($cookies, $cookie);
	}
	return array (
	$header,
	$body,
	$cookies
	);
}