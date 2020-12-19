<?php

class LandingPageModel extends CI_Model
{
    function getPromo(){
        $this->db->select('Kode')
                    ->from('kode_promo')
                    ->where('IsActive',1);
        $promo = $this->db->get()->row();

        if (empty($promo)){
            return (object)array('Kode' => 'XXXXXXXXX');
        } else {
            return (object)array('Kode' => $promo->Kode);
        }
    }

    function insertPromo(){
        $kode   = $this->input->post('promo');
        $type   = $this->input->post('type');
        $this->db->update('kode_promo', array('IsActive' => 0));

        if ($type == "Save"){
            $Data = array(
                'Kode'          => $kode,
                'DateCreated'   => datetime('datetime'),
                'IsActive'      => 1
            );
            $this->db->insert('kode_promo',$Data);
        }
    }

}