<?php

/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 10:25
 */
class REST{
    private $curl;

    const API_URL = 'localhost:3000/';

    public function __construct(){
        $this->curl = curl_init(self::API_URL);

        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
    }

    private function Execute(){
        curl_setopt($this->curl, CURLINFO_HEADER_OUT, 1);

        $return = curl_exec($this->curl);

        if ( $return === false )
            print_r(curl_error($this->curl));

        curl_close($this->curl);

        return json_decode($return);
    }

    public function AddOptions( $options ){
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $options);
    }

    public function POST( $method, $data ){
        $data = json_encode($data);

        curl_setopt($this->curl, CURLOPT_URL, self::API_URL.$method );

        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);

        return $this->Execute();
    }

    public function GET( $method ){
        curl_setopt($this->curl, CURLOPT_URL, self::API_URL.$method );

        curl_setopt($this->curl, CURLOPT_HTTPGET, 1);

        return $this->Execute();
    }
    public function DELETE( $method ) {
        curl_setopt($this->curl, CURLOPT_URL, self::API_URL.$method );

        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, "DELETE");

        return $this->Execute();
    }

    public function PUT( $method, $data ) {
        $data = json_encode($data);

        curl_setopt($this->curl, CURLOPT_URL, self::API_URL.$method );

        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);

        return $this->Execute();
    }
}