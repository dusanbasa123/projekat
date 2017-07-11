<?php
    class ProductController extends UserController {
        /*
        function index() {
            $proizvodi = ProductModel::getAll();
            $this->set('products', $proizvodi);
        }
        */
        function view($id) {
            $proizvod = DeviceModel::getById($id);
            $slika = PictureModel::getByDeviceId($id);
            $spec = DeviceModel::getSpecifications($id);
            $this->set('device', $proizvod);
            $this->set("pic", $slika);
            $this->set("spec", $spec);
        }
    }
