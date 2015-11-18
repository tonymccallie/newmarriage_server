<?php
App::uses('AbstractTransport', 'Network/Email');

class AwsTransport extends AbstractTransport {

	//MCL Config
	var $domain_priv ="-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEA4mWVqx1JxVulNujefeHzLzKMykSjZ2Y+Zzv7Kbixn1WlRW9N
XzTBDJ/zEFToEkhc59+i56rZteqgjDA1P5VvYUcFYtxTyIt+heUElhn1J7KszPK/
vkyvFrudsNKLAEBkrfT5QbHfZi4I5I/0LFbhIeg3uC31L2nYkC9nve8PHhph3q+P
Cd9K4SGvg+fv6OHsGZuU/mKZzu4R+ZYnLQPs1hl42l8yt4LZWoVRUGAckL84hQs7
PeFUNch+Bce+6gXKzA7EtT+vkGp3yN9G2yqDyWAdgchvrC11CKxbkv0IDLz1gAkC
V7JXMAB/xt3w9B2l9AplauiPg/2RpSQEnK6kGwIDAQABAoIBACOIahs3N5LgNWgO
2IzNX8uylWJRr4vVAkpVobAEquwlFxF0zKH6t6nxmMahbOMhtGM4OGs/53ej4Zrf
Hhxiqd6MtQ21IvlA25TMQxID9PRMGM758po9kuVwgOl1whdCBAtBfbWP4044P3EQ
HvSulhsqRUSFAgx1AmZu6ktnL+o7Uje7S9hXRSBS49ACin2OPq96/mbSAtxaI34s
rcYvsYAUVN9KzuEs8IbNtUqECJpE4FadD1xcv81poa28ikfZcTvkBTys4kVDXo0E
LeCglR3BlTd0XvJBStk2lhIa7LoUixErZPU8FYpxE5YR5EYk9HkDfCJPD/sbMZpO
uO/ewuECgYEA9Tw/6mkVuKQAVAyn95MQc9fGoUdCJr0SCmTUtB1I3KyrdrZFH0QK
CBV1BLOJqhKaQwFmFsyWWzqJV2GuIrjBZtgrDB+Q9iiG5KVsoiqofoqXVi4WWUMz
Fg4EY7UTQJyWA/9Ti3GBAa2z+lT3o6zOEg4fW96i6B5nB8N2UR8WoAkCgYEA7FWk
qlyEJXzLPaCa8ug9+e524KfVyvdBB5+Ayov8YKfqbPh0turKW83LKFHw5oOVPU3z
inLiCjM1ndJJfp2WZR049b4ZEqa3OobiBUkPpAYFlMcv6YvECZmbMYpdFxrnQDTW
kAVG6uy0ml9L1k/kPpUIU7hLXvfNRmWta9j9pAMCgYAzZjVfRDcxQ+5tr1llIoXI
Qel31B+hTu+BDjEmrxyeY/JsJzfFndUcbKLiIV8xLkT21kw3axn4dQRkNCzzShX/
ID+lgtg3P7dGJQXn11kJbLLbdT1p6BPFA5sX6tPmLuuiWtl/2IJZf7bBOR3OSGHI
lv0rnDY4wGaH0gfyaLmtQQKBgQDBfXzLXeNzLbDYS92QckQLlAkP9Vk8SyKasyQm
sGV4XQG5JdGo0KHMd7iU0kGA+Mn+3ws9lsEpyLNk+v3hA/RV5I714yVz97qb2ELE
QQTlLWj0XgAEHcHqejBtZvLAL+6Uyq3ATBG71QAoQ007sT0VX77pjEFpB0ixEh3h
5k4DMQKBgH8UwGvA+VVkbdFwgpf1acfPK3xyK3+czVn+s6GFn0FYWGm00dfgy9kg
l0tRVZSVHwXHbF5+f2JA6+O5WUblpaP36bmFrChq/ma+yg+I0P2bIPqfYE1ngp5j
hqNHaRgIHmhecsbY0xe3p7KIOA4fAvE9ytcdDV6anHFolQaQbILD
-----END RSA PRIVATE KEY-----" ;
	var $domain_d='thehideawayexperience.com' ;
	var $domain_s='app' ;

/*
	//MCLIFE.IT config
	var $domain_priv ="-----BEGIN RSA PRIVATE KEY-----
MIIBOgIBAAJBALoCQhcveReJ1wh8CbzedLGH/4m41htSRj1pRqo4HAc7P4HTYBQn
Qq2lXQi74fNz8TlHY0j6R7a9dtKrqoWA1qkCAwEAAQJACxSXW0o4rG5JoPfCnL2j
te+kCVA5cOc1x/K9guZUxRloSDyCeTblvv+yP9a84QX2GFwRq51IAAupT2/QFwJB
AQIhAPM8lEBxiA4h29H9dTgBOpkV9tEjWAIizRRI/+4e9TFXAiEAw8Turv9ia8QW
DSxCrq7j5NaVKLmjFX2qhogF/xnNN/8CIQC4gb5vd+9d0P8/NgUh24TItSmJkUbk
L+PivFEvHtqddwIgDHisN+u/Clx4hyhNqzErBXYCFJEW6ZSS23Uo5KJxJ2MCIACr
SmgWAiPs0HVoXscGfi/XItB4dL7FMgF7VNHeKK0D
-----END RSA PRIVATE KEY-----";
	var $domain_d='mclife.it' ;
	var $domain_s='mcl' ;
*/

/*
	//GREYBACK CONFIG
	var $domain_priv = "-----BEGIN RSA PRIVATE KEY-----
MIIBOQIBAAJBALgMCL/fyGgfAWIrnI4eT0L+Gt+DURMjm3WKB+qqZe/AjgssMy5l
l98TEOnJZiC9vQI4FFYxlMhLt45+kkgsfvECAwEAAQJAYIj3YeT4Eh0JNbvYTvb4
7hOodspDET3hAcLXqi+cbib2yFrWVblzx8sBWCWNGKHg2QcYmu5NzcN/7rWCgG88
AQIhAN//UaFxCt8XVWHXthz9Bdq6WfhYM+kJsZwTid1n9b4xAiEA0leJKlwhvxQs
hUZ/WeyfoculxBlnrWW3bfUQxhRW3MECIF1x2dALpIlk5o2mu6ZkN6kDzLy5rw4s
qRd/XygqUm5BAiBHMypTFGy36XRIiNyC6/39Hpo2DwNxRoUYy2OqKSheAQIgK+77
DKkOBVOKWksBgVF0GJ8SuNMPPy+WRa9OhcrEUX8=
-----END RSA PRIVATE KEY-----" ;
	var $domain_d='greyback.net' ;
	var $domain_s='steeple' ;
*/

    public function send(CakeEmail $email) {
    	$headers = $email->getHeaders(array('from', 'sender', 'replyTo', 'readReceipt', 'returnPath', 'to', 'cc', 'subject'));
    	$subject = $headers['Subject'];
		$headers = $this->_headersToString($headers);
		$body = implode("\r\n", $email->message()); 

		App::import('Vendor','DKIM',array('file' => 'dkim'.DS.'class.mailDomainSigner.php'));
		$mds = &new mailDomainSigner($this->domain_priv,$this->domain_d,$this->domain_s);
		
		//$body = quoted_printable_encode($body);

		$body = $mds->sign(
			$headers."\r\n\r\n".$body,
			"Subject:Content-Type:MIME-Version:Content-Transfer-Encoding:Received:To:From",
			true,
			true,
			false
		);
		//die(debug($body));
        App::import('Vendor','AWS',array('file' => 'aws'.DS.'sdk.class.php'));
		$Ses = new AmazonSES();
		$response = $Ses->send_raw_email(array('Data' => base64_encode($body)));
		if($response->status == 200) {
			return true;
		} else {
			die(debug($response));
		}
    }

}