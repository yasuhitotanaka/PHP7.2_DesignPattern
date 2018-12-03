<?php

class Singleton {
    private $id;

    // １つのみしか存在できないインスタンスを保持
    private static $instance;

    private function __construct() {
        $this->id = password_hash(date('r'), PASSWORD_BCRYPT);
    }

    /**
     * インスタンスがすでに存在する場合は、存在しているインスタンスを返す
     * インスタンスが存在しない場合は、インスタンスを生成して返す
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();
            echo "A Singleton instance was created!";
        }
        return self::$instance;
    }

    public function getID() {
        return $this->id;
    }

    /**
     * インスタンスの複製をした場合、Exceptionするようにしている
     */
    public final function __clone() {
        throw new RunTimeException ('Clone is not allowed against ' . get_class($this));
    }
}

?>