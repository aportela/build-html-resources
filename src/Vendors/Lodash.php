<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class Lodash extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://lodash.com/",
            "LAST_VERSION" => "3.4.9",
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
                    "NORMAL" => array (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.js",
                        "INTEGRITY_HASH" => "sha512-HBD0cOZJYcymSn0H0CnN3VBhQLdiH8imucm16ZQ792TT2n48u6nmX+T7hZTCwmzIrgMt76x4rHhR7KkZqhIGxA=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js",
                        "INTEGRITY_HASH" => "sha512-90vH1Z83AJY9DmlWa8WkjkV79yfS2n2Oxhsi2dZbIv0nC4E6m5AbH8Nh156kkM7JePmqD6tcZsfad1ueoaovww=="
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
