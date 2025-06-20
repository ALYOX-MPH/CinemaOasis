<?php

namespace Modules\ProductServices;

use Core\Module;

class ProductServices extends Module
{

    public function __construct($params)
    {
        parent::__construct($params);

        $this->db->initConnection();
    }

    public function index()
    {
        // Db query
        $Services = $this->db->query("SELECT * FROM ds_productservices");



        // View

      
        // --Services Data
        $this->data["Services"]= $Services;

        // -- Modal component
        $this->data["ProductServices_ModalForm"] = $this->component("ProductServices_ModalForm");

        // -- Table Component
        $this->data["ProductServices_table"] = $this->component('ProductServices_table');



        $this->view('View_ProductServices');
    }

    function AddProductService()
    {
        $params=[
            "ServiceDescription" => $_POST["ServiceDescription"],
            "Department" => $_POST["Department"],
            "BasePrice" => $_POST["BasePrice"],
            "Impuesto" => $_POST["Impuesto"],
            "TotalPrice" => $_POST["TotalPrice"],
        ];

        $QueryResult= $this->db->insert("ds_productservices",$this->getPostData($params));

        if($QueryResult && $QueryResult > 0){
            $this->db->close();
            $this->redirect('/ProductServices?msg=Servicio creado exitosamente');
        }
        else{
            $this->db->close();
            $this->redirect('/ProductServices?msg=Error al crear el servicio');
        }
    }
}
