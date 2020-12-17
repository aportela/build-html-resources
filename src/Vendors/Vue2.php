<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class Vue2 extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://vuejs.org/",
            "LAST_VERSION" => "2.6.12",
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
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.js",
                        "INTEGRITY_HASH" => "sha512-YXLGLsQBiwHPHLCAA9npZWhADUsHECjkZ71D1uzT2Hpop82/eLnmFb6b0jo8pK4T0Au0g2FETrRJNblF/46ZzQ=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js",
                        "INTEGRITY_HASH" => "sha512-BKbSR+cfyxLdMAsE0naLReFSLg8/pjbgfxHh/k/kUC82Hy7r6HtR5hLhobaln2gcTvzkyyehrdREdjpsQwy2Jw=="
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
