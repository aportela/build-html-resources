<?php

    namespace aportela\BuildHTMLResources\Vendors;

    interface InterfaceVendor
    {
        public function hasStyles(): bool;

        public function hasScripts(): bool;

        public function getStyleURLs(bool $minimized = true): array;

        public function getStyleTags(bool $minimized = true, bool $withIntegrityHash = false): array;

        public function getScriptURLs(bool $minimized = true): array;

        public function getScriptTags(bool $minimized = true, bool $withIntegrityHash = false): array;
    }

?>
