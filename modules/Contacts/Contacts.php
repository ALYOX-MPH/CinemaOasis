<?php

namespace Modules\Contacts;

use Core\Module;

class Contacts extends Module
{

    public function __construct($params)
    {
        parent::__construct($params);
         $this->db->initConnection();
    }

    public function index()
    {

        // All contacts
         $AllContacts = $this->db->query("SELECT * FROM ds_contacts");


        foreach ($AllContacts as $Contact) {
            $this->data['AllContacts'][] = $Contact;
            if ($Contact['Type'] == 'Cliente') {
                $this->data['OnlyClients'][] = $Contact;
            } else if ($Contact['Type'] == 'Proveedor') {
                $this->data['OnlySuppliers'][] = $Contact;
            }
        }
        $this->db->close();

        //$this->data['AllContacts'] = $AllContacts;

        /*// Only Clients
        $OnlyClients = $this->db->query("SELECT * FROM ds_contacts WHERE TYPE= 'cliente' ");

        $this->data['OnlyClients'] = $OnlyClients;

        // Only Suppliers
        $OnlySuppliers = $this->db->query("SELECT * FROM ds_contacts WHERE TYPE= 'proveedor' ");

        $this->data['OnlySuppliers'] = $OnlySuppliers;*/

        $this->data['contacts_table'] = $this->component('contacts_table');
        $this->data['new_contact'] = $this->component('new_contact');

        $this->view("View_Contacts");

    }

    public function Created_Simple_Contact()
    {

        // Para agregar los datos de las columnas extras
        $params = [
            'Type' => $_POST['Type'],
            'Persona_Identification_Number' => $_POST['Persona_Identification_Number'],
            'Name' => $_POST['Name'],
            'NickName' => $_POST['NickName'],
            'Province' => $_POST['Province'],
            'Address' => $_POST['Address'],
            'Email' => $_POST['Email'],
            'Phone' => $_POST['Phone']
        ];
        
        $params_avanced = [];


        //Aqui datos de form avanzado
        if(isset($_POST['avanced']) && $_POST['avanced'] == '1'){

            //AQUI LOS PARAMS AVANZADOS

            $params = array_merge($params,$params_avanced);

        }



        

         $this->db->insert("ds_contacts",$this->getPostData($params));

        $this->db->close();
        
        $this->redirect('/Contacts?msg=Contacto creado exitosamente');

    }
}
