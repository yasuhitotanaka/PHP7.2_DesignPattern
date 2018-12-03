<?php
require_once('./singleton/Singleton.class.php');

// $insstance_firstを生成
$instance_first = Singleton::getInstance();
sleep(1);
// $insstance_secondを生成（Singletonなら、insstance_firstと同じものになるはず）
$instance_second = Singleton::getInstance();

echo '<hr>';

// $insstance_firstと$insstance_secondのIDが同じか確認
echo '$insstance_first ID: ' . $instance_first->getID() . '<br>';
echo '$insstance_second ID: ' . $instance_second->getID()  . '<br>';
echo 'IDは同じ？ ' . ($instance_first->getID() === $instance_second->getID() ? 'はい！' : 'いいえ');
echo '<hr>';

// $insstance_firstと$insstance_secondのインスタンスが同じか確認
echo '２つのインスタンスは同じもの？ ' . ($instance_first === $instance_second ? 'はい！' : 'いいえ');
echo '<hr>';

// 複製できるかどうかを確認
$instance_clone_check = clone $instance_first;

?>