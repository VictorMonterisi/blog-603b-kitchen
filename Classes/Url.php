<?php 

    namespace Classes;
    
    class Url {
        private $canonical;
        private $principal;


        public function setCanonicalUrl() {
            if ($_SERVER['HTTPS'] === 'on') {

                $this->canonical = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

            } else if ($_SERVER['HTTP_HOST'] === 'localhost') {

                $this->canonical = "http://localhost{$_SERVER['REQUEST_URI']}";
                
            } else {
                
                $this->canonical = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

            }
            return $this->canonical;
        }

        public function setUrl() {
            if ($_SERVER['HTTPS'] === 'on') {

                $this->principal = "https://603bkitchen.lovestoblog.com/";
        
            } else if ($_SERVER['HTTP_HOST'] === 'localhost') {

                $this->principal = "http://localhost/blog-603b-kitchen/";
                
            } else {

                $this->principal = "http://603bkitchen.lovestoblog.com/";

            }
            return $this->principal;
        }
    }