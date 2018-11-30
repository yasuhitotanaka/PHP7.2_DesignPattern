<?php
require_once('./abstruct/AbstractDisplay.class.php');

/**
 * Concreate Classクラスに相当
 */
class OrderedListDisplay extends AbstractDisplay {

    protected function displayHeader() {
        echo '<ol>';
    }

    protected function displayBody() {
        foreach($this->getData() as $yaku) {
            echo '<li>役 ' . $yaku . '</li>';
        }
    }

    protected function displayFooter() {
        echo '</ol>';
    }
}

?>