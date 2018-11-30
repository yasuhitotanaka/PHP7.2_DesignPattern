<?php
require_once('./adaptee/DisplayText.class.php');
require_once('./target/ShowText.class.php');

class DisplayTextImpl implements DisplayText {

    private $show_text;

    public function __construct($text) {
        // ShowTextのコンストラクタを呼び出し
        $this->show_text = new ShowText($text);
    }

    public function display() {
        // ShowTextのshowPlainText関数を呼び出し
        $this->show_text->showPlainText();
        // ShowTextのshowCryptedText関数を呼び出し
        $this->show_text->showCryptedText();
        // ShowTextのshowMD5Text関数を呼び出し
        $this->show_text->showMD5Text();
    }
}
?>