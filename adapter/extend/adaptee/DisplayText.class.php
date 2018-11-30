<?php
interface DisplayText {
    /**
     * テキストをPlane, password_hashで暗号化したもの、MD5で暗号化したものの3つを表示する。
     */
    public function display();
}
?>