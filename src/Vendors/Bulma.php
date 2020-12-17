<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class Bulma extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://bulma.io/",
            "LAST_VERSION" => "0.9.1",
            "HAS_STYLES" => true,
            "HAS_SCRIPTS" => false,
            "CSS_RESOURCES" => array
            (
                array
                (
                    "NORMAL" => array
                     (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.css",
                        "INTEGRITY_HASH" => "sha512-6eqPOYQmUqGh2hFSAKha1dbQlMq1OaxityCVG80dkvGmmLdsAdrAUkgBKDV4fpAT/xOUdkB6uupudSbCwyoJPQ=="
                    ),
                    "MINIMIZED" => array
                    (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css",
                        "INTEGRITY_HASH" => "sha512-ZRv40llEogRmoWgZwnsqke3HNzJ0kiI0+pcMgiz2bxO6Ew1DVBtWjVn0qjrXdT3+u+pSN36gLgmJiiQ3cQtyzA=="
                    )
                )
            ),
            "JS_RESOURCES" => array
            (
                array
                (
                    "NORMAL" => array
                    (
                        "URL" => null,
                        "INTEGRITY_HASH" => null
                    ),
                    "MINIMIZED" => array
                    (
                        "URL" => null,
                        "INTEGRITY_HASH" => null,
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
