<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryController
 *
 * @author Dusan
 */

class CategoryController extends UserController{
    public function view($id){
        $specs = SpecificationModel::getSpecsByCategory($id);
        $specsView = array();
        $category = CategoryModel::getById($id);
        if($category == null){
            Misc::redirect("");
        }
        foreach($specs as $spec){
            $name = $spec->name;
            $values = SpecificationModel::getSpecificationsBySpecIdAndCategoryId($spec->specification_id, $id);
            array_push($specsView, [
                'name' => $name,
                'values' => $values
            ]);
        }
        $devices = DeviceModel::getByCategoryId($id);
        $this->set("devices", $devices);
        $this->set("category_name", $category);
        $this->set("specs", $specsView);
    }
}
