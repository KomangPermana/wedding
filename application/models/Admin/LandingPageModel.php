<?php

class LandingPageModel extends CI_Model
{
    function getPromo(){
        $this->db->select('Kode')
                    ->from('kode_promo')
                    ->where('IsActive',1);
        $promo = $this->db->get()->row();

        if (empty($promo)){
            return (object)array('Data' => 'XXXXXXXXX');
        } else {
            return (object)array('Data' => $promo->Kode);
        }
    }

    function getPhone(){
        $this->db->select('Phone')
                    ->from('phone_number')
                    ->where('IsActive',1);
        $phone = $this->db->get()->row();

        if (empty($phone)){
            return (object)array('Data' => '08XXXXXXX');
        } else {
            return (object)array('Data' => $phone->Phone);
        }
    }

    function getEmail(){
        $this->db->select('Email')
                    ->from('contact_email')
                    ->where('IsActive',1);
        $email = $this->db->get()->row();

        if (empty($email)){
            return (object)array('Data' => "XXXX @ XXXX");
        } else {
            return (object)array('Data' => $email->Email);
        }
    }

    function insertData($data,$type,$table){
        if ($table == "Promo"){
            $this->db->update('kode_promo', array('IsActive' => 0));
            if ($type == "Save"){
                $Data = array(
                    'Kode'          => $data,
                    'DateCreated'   => datetime('datetime'),
                    'IsActive'      => 1
                );
                $this->db->insert('kode_promo',$Data);
            }
        } else if ($table == "Phone") {
            $this->db->update('phone_number', array('IsActive' => 0));
            if ($type == "Save"){
                $Data = array(
                    'Phone'          => $data,
                    'DateCreated'   => datetime('datetime'),
                    'IsActive'      => 1
                );
                $this->db->insert('phone_number',$Data);
            }
        } else if ($table == "Email"){
            $this->db->update('contact_email', array('IsActive' => 0));
            if ($type == "Save"){
                $Data = array(
                    'Email'          => $data,
                    'DateCreated'   => datetime('datetime'),
                    'IsActive'      => 1
                );
                $this->db->insert('contact_email',$Data);
            }
        }
    }

}