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



    public function POST_FILE( $method, $data ){
        // For backward compatibility,
        // convert @ prefixed file names to CurlFile class
        // since @ prefix is deprecated as of PHP 5.6
        if(is_array($postfields) == true)
        {
            // Check each post field
            foreach($postfields as $key => $value)
            {
                // Convert values for keys starting with '@' prefix
                if(strpos($value, '@') === 0)
                {
                    // Get the file name
                    $filename = ltrim($value, '@');
                    // Convert the value to the new class
                    $postfields[$key] = new CURLFile($filename);
                }
            }
        }
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);







        curl_setopt($this->curl, CURLOPT_URL, self::API_URL.$method );
        curl_setopt($this->curl, CURLOPT_VERBOSE, true);
        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);

        return $this->Execute();
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