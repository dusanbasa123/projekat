<?php
    abstract class Controller {
        private $podaci = [];

        protected function set($name, $value) {
            if (preg_match('|^[A-z0-9_]+$|', $name)) {
                $this->podaci[$name] = $value;
            }
        }

        public function getData() {
            return $this->podaci;
        }
        
        function index() {
            
        }
        
        public function __pre() {
            $categories = CategoryModel::getAll();
            $this->set("kategorije", $categories);
        }
        
    }
