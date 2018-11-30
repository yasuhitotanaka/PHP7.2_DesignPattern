<?php
class ShowText {

    private $text;

    public function __construct($text) {
        if (is_null($text)) {
            throw new Exception('Please input text!');
        }
        $this->text = $text;
    }

    // $textをPlaneで表示
    public function showPlainText() {
        echo $this->text . '<br>';
    }

    // $textをpassword_hashで暗号化したものを表示
    public function showCryptedText() {
        echo password_hash($this->text, PASSWORD_BCRYPT) . '<br>';
    }

    // $textをmd5で暗号化したものを表示
    public function showMD5Text() {
        echo md5($this->text);
    }
}
?>