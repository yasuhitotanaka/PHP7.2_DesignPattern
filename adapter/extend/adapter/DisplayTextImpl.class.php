<?php
require_once('./adaptee/DisplayText.class.php');
require_once('./target/ShowText.class.php');

class DisplayTextImpl extends ShowText implements DisplayText {

    public function __construct($text) {
        // ShowTextのコンストラクタを呼び出し
        parent::__construct($text);
    }

    public function display() {
        // ShowTextのshowPlainText関数を呼び出し
        parent::showPlainText();
        // ShowTextのshowCryptedText関数を呼び出し
        parent::showCryptedText();
        // ShowTextのshowMD5Text関数を呼び出し
        parent::showMD5Text();
    }
}
?>