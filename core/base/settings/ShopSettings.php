<?php

namespace core\base\settings;

class ShopSettings
{
    static private $_instance;

    private $baseSettings;

    private $templateArr = [
        'text' => ['price', 'short'],
        'textarea' => ['goods_content']
    ];

    private function __construct() {}

    private function __clone() {}

    static public function get($property) {
        return self::instance()->$property;
    }

    static public function instance() {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }

        self::$_instance = new self();
        self::$_instance->baseSettings = Settings::instance();
        $baseProperties = self::$_instance->baseSettings->clueProperties(get_class());

        return self::$_instance;
    }

    protected function setProperty($properties) {
        if ($properties) {
            foreach ($properties as $name => $property) {
                $this->$name = $property;
            }
        }
    }
}