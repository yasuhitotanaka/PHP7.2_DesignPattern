<?php

abstract class Abstractdisplay {
    private $data;

    public function __construct($data) {
        if (!is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    /**
     * templateメソッドに該当
     */
    public function display() {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    public function getData() {
        return $this->data;
    }

    /**
     * 以下の3つのabstructクラスをサブクラスで実装
     */
    protected abstract function displayHeader();
    protected abstract function displayBody();
    protected abstract function displayFooter();
}
?>