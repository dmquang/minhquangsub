<?php
	$url = 'https://thesieure.com/chargingws/v2';
	$partner_id = '6675774561';
	$partner_key = '2c0397b55643ba059e11a4445f42e1f8';
	
	
function creatSign($partner_key, $params) {
        $data = array();
        $data['request_id'] = $params['request_id'];
        $data['code'] = $params['code'];
        $data['partner_id'] = $params['partner_id'];
        $data['serial'] = $params['serial'];
        $data['telco'] = $params['telco'];
        $data['command'] = $params['command'];
        ksort($data);
        $sign = $partner_key;
        foreach ($data as $item) {
            $sign .= $item;
        }

        return md5($sign);
    }
?>