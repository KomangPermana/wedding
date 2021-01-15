<?php
    function datetime($value){
        date_default_timezone_set("Asia/Jakarta");
	    if($value == 'datetime'){
	        return date("Y-m-d H:i:s");
        }
        else if($value == 'date'){
            return date("Y-m-d");
        }
        else if($value == 'time'){
            return date("H:i:s");
        }
    }

    function convert_date($date){
        $day    = date("d", strtotime($date));
        $month  = date("M", strtotime($date));
        $year   = date("Y", strtotime($date));
    
        return $day.' '.$month.' '.$year;
    }

    function inputDate($date){
        $day    = date("d", strtotime($date));
        $month  = date("m", strtotime($date));
        $year   = date("Y", strtotime($date));
    
        return $year.'-'.$month.'-'.$day;
    }

    function getDataByIdPengantin($table,$id){
        $CI =& get_instance();
		if ($table == "master_pengantin"){
            $data = array('Id' => $id);    
        } else {
            $data = array('IdPengantin' => $id);
        }
        return $CI->db->get_where($table,$data)->row();
    }

    function getDataByNamePengantin($table,$nama){
        $CI =& get_instance();
        $data = array('Nama' => $nama);    
        return $CI->db->get_where($table,$data)->row();
    }