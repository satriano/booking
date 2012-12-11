<?php
/**
 * Description of Email
 *
 * @author edwardsj
 */
class Email {
    
    public $to;
    public $subject;
    public $headers;
    public $message;
    
    public function __construct($to, $subject, $headers, $message)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->headers = $headers;
        $this->message = $message;
    }
    
    public function sendMail()
    {
    }
}

?>
