<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class TailwindCSS extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://tailwindcss.com/",
            "LAST_VERSION" => "2.0.2",
            "HAS_STYLES" => true,
            "HAS_SCRIPTS" => false,
            "CSS_RESOURCES" => array
            (
                array
                (
                    "NORMAL" => array
                     (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.css",
                        "INTEGRITY_HASH" => "sha512-CnGOdr9J+PIA2ORABU36QTdxnDROUaiAfrRZ/t4qchNIGtOIR2oThs86YByDeQbxE8qSxubIul/9+3/YtbJzPw=="
                    ),
                    "MINIMIZED" => array
                    (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css",
                        "INTEGRITY_HASH" => "sha512-+WF6UMXHki/uCy0vATJzyA9EmAcohIQuwpNz0qEO+5UeE5ibPejMRdFuARSrl1trs3skqie0rY/gNiolfaef5w=="
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
