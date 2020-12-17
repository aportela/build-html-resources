<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class Underscore extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://underscorejs.org/",
            "LAST_VERSION" => "1.11.0",
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
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.11.0/underscore.js",
                        "INTEGRITY_HASH" => "sha512-vcCo/J00hSzFqkVZSEIcj1ynCyh0NBTP4W1rj1JdivrqqVrghon4lumw/g59jPq7XmALy2fT7HFvRc4X6xpgRw=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.11.0/underscore-min.js",
                        "INTEGRITY_HASH" => "sha512-wBiNJt1JXeA/ra9F8K2jyO4Bnxr0dRPsy7JaMqSlxqTjUGHe1Z+Fm5HMjCWqkIYvp/oCbdJEivZ5pLvAtK0csQ=="
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
