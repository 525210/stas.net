<?php

class Db

{

    public $user;
    public $password;
    public $db;
    public $host;
    public $dsn;
    public $conn;

    public function __construct()
    {
        $this->user = 'stas';
        $this->password = '0544525210';
        $this->db = 'stas.org.il';
        $this->host = 'localhost';
        $this->dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        $this->conn = new PDO($this->dsn, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public function sendMsgWhatsapp($number)
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v14.0/104779262434090/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{ "messaging_product": "whatsapp", "to": ' . $number . ', "type": "template", "template": { "name": "test_test", "language": { "code": "ru" } } }',
            //CURLOPT_POSTFIELDS => '{ "messaging_product": "whatsapp", "to": "972544525210", "type": "template", "template": { "name": "hello_world", "language": { "code": "en_US" } } }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer EAALFPEfIhswBAPLG6TG1SmSgx9NOfU0mSJLGb90VI9uBUdZBbYzY3flSFkoAnvdpGZCad2EZCuKl3ZACG3RvHvkICTInQfYXYO4tOywiWwfJwnyf9c5AsgUkUZAqZCzIVnsB9ukb6gAkGWppocWPTZAXQ62PjakUAcjVtIzUMrZAPC5VRqlEBnUuVWoj6DJUxl2lZAGualuZBIfgZDZD',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
//print_r(CURLOPT_POSTFIELDS);
        curl_close($curl);
        $response = json_decode($response);
//        echo $response;
        echo "<pre>";
        print_r($response);

    }
}