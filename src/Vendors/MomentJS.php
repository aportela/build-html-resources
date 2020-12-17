<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class MomentJS extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://momentjs.com/",
            "LAST_VERSION" => "2.29.1",
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
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.js",
                        "INTEGRITY_HASH" => "sha512-z8IfZLl5ZASsWvr1syw5rkpo2HKBexjwzYDaUkIfoWo0aEqL/MgGKniDouh5DmsD9YrisbM+pihyCKIHL9VucQ=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js",
                        "INTEGRITY_HASH" => "sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
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
