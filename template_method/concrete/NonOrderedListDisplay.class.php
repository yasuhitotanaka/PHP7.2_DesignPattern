<?php
require_once('./abstruct/AbstractDisplay.class.php');

/**
 * Concreate Classクラスに相当
 */
class NonOrderedListDisplay extends AbstractDisplay {

    protected function displayHeader() {
        echo '<ul>';
    }

    protected function displayBody() {
        foreach($this->getData() as $yaku) {
            echo '<li>役 ' . $yaku . '</li>';
        }
    }

    protected function displayFooter() {
        echo '</ul>';
    }
}

?>