<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class PureCSS extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://purecss.io/",
            "LAST_VERSION" => "2.0.3",
            "HAS_STYLES" => true,
            "HAS_SCRIPTS" => false,
            "CSS_RESOURCES" => array
            (
                array
                (
                    "NORMAL" => array
                     (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/pure/2.0.3/pure.css",
                        "INTEGRITY_HASH" => "sha512-4paHesMlVJiaj83CXnxgme1vA+t8rvsx3HMV0amf1rLDfXZwaK0yAZV7kjlP7pcYaxhoqBXTCQZLZpoKiXVhhQ=="
                    ),
                    "MINIMIZED" => array
                    (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/pure/2.0.3/pure.min.css",
                        "INTEGRITY_HASH" => "sha512-RqjxP4aUZEJrIaAVo9KEuvTX4kgzdDGsyblYT2IEnbuSkrCgifPogySvKS1+RysvetK80N4XwvmLIl+ShToIpw=="
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
