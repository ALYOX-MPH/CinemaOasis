<?php

namespace Modules\HumanResources;

use Core\Module;

class HumanResources extends Module
{

    public function __construct($params)
    {
        parent::__construct($params);
        $this->db->initConnection();
    }

    public function index()
    {
        // Db query (Only active employees)
        $Employees = $this->db->query("SELECT * FROM ds_employees WHERE deleted = 0");

        $this->data["AllEmployees"] = $Employees;

        // Db query (Only Deleted employees)
        $DeletedEmployees = $this->db->query("SELECT * FROM ds_employees WHERE deleted = 1");

        $this->data["DeletedEmployees"] = $DeletedEmployees;

        // view

        $this->data["Employee_Modal"]= $this->component("Employee_Modal");
        $this->data["Employee_Table"]= $this->component("Employee_Table");


        $this->view('View_Employees');


    }

    public function SetEmployee()
    {
    
        $params = [
            'Type' => $_POST['Type'],
            'Name' => $_POST['Name'],
            'Phone' => $_POST['Phone'],
            'Persona_Identification_Number' => $_POST['Persona_Identification_Number'],
            'Id_Departament' => $_POST['Id_Departament'],
            'Work_Start_Date' => $_POST['Work_Start_Date'],
            'Medic_Condition' => $_POST['Medic_Condition'],
            'Province' => $_POST['Province'],
            'Birth_Date' => $_POST['Birth_Date'],
            'schedule_Employee' => $_POST['schedule_Employee'],
            'Salary' => $_POST['Salary'],

        ];

        $this->db->insert('ds_employees',$this->getPostData($params));
            
        $this->db->close();
        
        $this->redirect('/HumanResources?msg=Empleado creado exitosamente');

    }

    public function deleteEmployee()
    {
        $id = $_POST['id'];

        $this->db->update('ds_employees', ['deleted' => 1], ['id' => $id]);
        
        $this->db->close();
        
        $this->redirect('/HumanResources?msg=Empleado eliminado exitosamente');
    }

    public function restoreEmployee()
{
    $id = $_POST['id'];

    $this->db->update('ds_employees', ['deleted' => 0], ['id' => $id]);
    
    $this->db->close();
    
    $this->redirect('/HumanResources?msg=Empleado restaurado exitosamente');
}

public function restoreMultipleEmployees()
{
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        foreach ($_POST['ids'] as $id) {
            $this->db->update('ds_employees', ['deleted' => 0], ['id' => $id]);
        }
    }

    $this->db->close();
    $this->redirect('/HumanResources?msg=Empleados restaurados');
}

public function deleteMultipleEmployees()
{
    if (!empty($_POST['ids'])) {
        foreach ($_POST['ids'] as $id) {
            $this->db->update('ds_employees', ['deleted' => 1], ['id' => $id]);
        }
    }

    $this->db->close();
    $this->redirect('/HumanResources?msg=Empleados suspendidos correctamente');
}

}












