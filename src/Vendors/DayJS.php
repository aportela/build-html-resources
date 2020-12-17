<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class DayJS extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://day.js.org/",
            "LAST_VERSION" => "1.9.7",
            "HAS_STYLES" => false,
            "HAS_SCRIPTS" => true,
            "CSS_RESOURCES" => array(
                array(
                    "NORMAL" => array (
                        "URL" => null,
                        "INTEGRITY_HASH" => null
                    ),
                    "MINIMIZED" => array(
                        "URL" => null,
                        "INTEGRITY_HASH" => null
                    )
                )
            ),
            "JS_RESOURCES" => array(
                array(
                    // NORMAL VERSION DO NOT EXIST, USE MINIMIZED
                    "NORMAL" => array (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.9.7/dayjs.min.js",
                        "INTEGRITY_HASH" => "sha512-kZ+x2gdehn6OZMWZSp3Vt5R+v9hQTYEATQwaUfWquhxbvNVAy6IRtYs7asdyxKUTqG0I5ZqBqnzcBrpnHJCAGw=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.9.7/dayjs.min.js",
                        "INTEGRITY_HASH" => "sha512-kZ+x2gdehn6OZMWZSp3Vt5R+v9hQTYEATQwaUfWquhxbvNVAy6IRtYs7asdyxKUTqG0I5ZqBqnzcBrpnHJCAGw=="
                    )
                )
            )
        );

        public function __construct()
        {
            $this->setData(self::DATA);
        }
    }

?>
