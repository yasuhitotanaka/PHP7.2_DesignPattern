<?php
require_once('./concrete/NonOrderedListDisplay.class.php');
require_once('./concrete/OrderedListDisplay.class.php');

$data = array('マンガン',
            'ハネマン',
            'バイマン',
            'サンバイマン');

$display_non_ordered = new NonOrderedListDisplay($data);
$display_ordered = new OrderedListDisplay($data);

$display_non_ordered->display();
echo '<hr>';
$display_ordered->display();

?>