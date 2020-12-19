<?php

class OrderModel extends CI_Model
{
	function getMaster(){
		return $this->db->get('master_pengantin')->result();
    }

    function insertData(){
        $linkName   = $this->input->post('linkName');
        $template   = $this->input->post('category');

        $Data = array(
            'Nama'          => $linkName,
            'Template'      => $template,
            'DateCreated'   => datetime('datetime'),
            'IsActive'      => 1
        );
        $this->db->insert('master_pengantin',$Data);
    }
    
    //////// Agama ////////////////////////
    function getAgama($id){
        $data = getDataByIdPengantin('data_agama',$id);
        if (empty($data)){
            $data = array(
                'Couple1'       => null,
                'Couple2'       => null,
                'Couple3'       => null,
                'Quote1'        => null,
                'Quote2'        => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertAgama(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('agama');
        $length = strlen($dataInput[0]);
        if ($length > 5){
            $this->session->set_flashdata('failed', 'Gagal Menyimpan Data Agama');
        } else {
            $DataAgama = getDataByIdPengantin('data_agama',$id);
            if (empty($DataAgama)){
                $Data = array(
                    'IdPengantin'   => $id,
                    'Couple1'       => $dataInput[0],
                    'Couple2'       => $dataInput[1],
                    'Couple3'       => $dataInput[2],
                    'Quote1'        => $dataInput[3],
                    'Quote2'        => $dataInput[4],
                    'DateCreated'   => datetime('datetime')
                );
                $db = $this->db->insert('data_agama',$Data);
            } else {
                $Data = array(
                    'Couple1'       => $dataInput[0],
                    'Couple2'       => $dataInput[1],
                    'Couple3'       => $dataInput[2],
                    'Quote1'        => $dataInput[3],
                    'Quote2'        => $dataInput[4],
                    'LastUpdate'    => datetime('datetime')
                );
                $db = $this->db->where('IdPengantin', $id)->update('data_agama', $Data);
            }
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data Agama');
        }
    }
    //////// End Agama ////////////////////////

    //////// Home ////////////////////////
    function getHome($id){
        $data = getDataByIdPengantin('data_home',$id);
        if (empty($data)){
            $data = array(
                'Foto_Ogthumbnail'   => null,
                'Foto_Favicon'       => null,
                'Foto_Openerimg'     => null,
                'Judul_Home'         => null,
                'Official'           => null,
                'Nama_Panggilan_1'   => null,
                'Nama_Panggilan_2'   => null,
                'Link_Tombol_Home'   => null,
                'Tanggal_Home'       => null,
                'Alamat_Home'        => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertHome(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('home');

        $DataHome = getDataByIdPengantin('data_home',$id);;
        if (empty($DataHome)){
            $Data = array(
                'IdPengantin'   => $id,
                'Foto_Ogthumbnail'   => $dataInput[0],
                'Foto_Favicon'       => $dataInput[1],
                'Foto_Openerimg'     => $dataInput[2],
                'Judul_Home'         => $dataInput[3],
                'Official'           => $dataInput[4],
                'Nama_Panggilan_1'   => $dataInput[5],
                'Nama_Panggilan_2'   => $dataInput[6],
                'Link_Tombol_Home'   => $dataInput[7],
                'Tanggal_Home'       => $dataInput[8],
                'Alamat_Home'        => $dataInput[9],
                'DateCreated'   => datetime('datetime')
            );
            $this->db->insert('data_home',$Data);
        } else {
            $Data = array(
                'Foto_Ogthumbnail'   => $dataInput[0],
                'Foto_Favicon'       => $dataInput[1],
                'Foto_Openerimg'     => $dataInput[2],
                'Judul_Home'         => $dataInput[3],
                'Official'           => $dataInput[4],
                'Nama_Panggilan_1'   => $dataInput[5],
                'Nama_Panggilan_2'   => $dataInput[6],
                'Link_Tombol_Home'   => $dataInput[7],
                'Tanggal_Home'       => $dataInput[8],
                'Alamat_Home'        => $dataInput[9],
                'LastUpdate'    => datetime('datetime')
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_home', $Data);
        }
    }
    //////// End Home ////////////////////////

    //////// Couple ////////////////////////
    function getCouple($id){
        $data = getDataByIdPengantin('data_couple',$id);
        if (empty($data)){
            $data = array(
                'Foto1'     => null,
                'Nama1'     => null,
                'Gelar1'    => null,
                'Status1'   => null,
                'Ortu1'     => null,
                'Foto2'     => null,
                'Nama2'     => null,
                'Gelar2'    => null,
                'Status2'   => null,
                'Ortu2'     => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertCouple(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('couple');

        $DataCouple = getDataByIdPengantin('data_couple',$id);;
        if (empty($DataCouple)){
            $Data = array(
                'IdPengantin'   => $id,
                'DateCreated'   => datetime('datetime'),
                'Foto1'     => $dataInput[0],
                'Nama1'     => $dataInput[1],
                'Gelar1'    => $dataInput[2],
                'Status1'   => $dataInput[3],
                'Ortu1'     => $dataInput[4],
                'Foto2'     => $dataInput[5],
                'Nama2'     => $dataInput[6],
                'Gelar2'    => $dataInput[7],
                'Status2'   => $dataInput[8],
                'Ortu2'     => $dataInput[9]
            );
            $this->db->insert('data_couple',$Data);
        } else {
            $Data = array(
                'LastUpdate'    => datetime('datetime'),
                'Foto1'     => $dataInput[0],
                'Nama1'     => $dataInput[1],
                'Gelar1'    => $dataInput[2],
                'Status1'   => $dataInput[3],
                'Ortu1'     => $dataInput[4],
                'Foto2'     => $dataInput[5],
                'Nama2'     => $dataInput[6],
                'Gelar2'    => $dataInput[7],
                'Status2'   => $dataInput[8],
                'Ortu2'     => $dataInput[9]
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_couple', $Data);
        }
    }
    //////// End Couple ////////////////////////

    //////// Event ////////////////////////
    function getEvent($id){
        $data = getDataByIdPengantin('data_event',$id);
        if (empty($data)){
            $data = array(
                'Judul'     => null,
                'Pembuka'   => null,
                'Countdown' => null,
                'Note1'     => null,
                'Note2'     => null,
                'Penutup'   => null,
                'LinkSound' => null,
                'JudulLive' => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertEvent(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('event');

        $DataEvent = getDataByIdPengantin('data_event',$id);;
        if (empty($DataEvent)){
            $Data = array(
                'IdPengantin'   => $id,
                'DateCreated'   => datetime('datetime'),
                'Judul'         => $dataInput[0],
                'Pembuka'       => $dataInput[1],
                'Countdown'     => $dataInput[2],
                'Note1'         => $dataInput[3],
                'Note2'         => $dataInput[4],
                'Penutup'       => $dataInput[5],
                'LinkSound'     => $dataInput[6],
                'JudulLive'     => $dataInput[7]
            );
            $this->db->insert('data_event',$Data);
        } else {
            $Data = array(
                'LastUpdate'    => datetime('datetime'),
                'Judul'         => $dataInput[0],
                'Pembuka'       => $dataInput[1],
                'Countdown'     => $dataInput[2],
                'Note1'         => $dataInput[3],
                'Note2'         => $dataInput[4],
                'Penutup'       => $dataInput[5],
                'LinkSound'     => $dataInput[6],
                'JudulLive'     => $dataInput[7]
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_event', $Data);
        }
    }
    //////// End Event ////////////////////////

    //////// Akad ////////////////////////
    function getAkad($id){
        $data = getDataByIdPengantin('data_akad',$id);
        if (empty($data)){
            $data = array(
                'Title'             => null,
                'Tanggal'           => null,
                'Jam'               => null,
                'KeteranganWaktu'   => null,
                'Alamat'            => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertAkad(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('akad');

        $DataAkad = getDataByIdPengantin('data_akad',$id);;
        if (empty($DataAkad)){
            $Data = array(
                'IdPengantin'   => $id,
                'DateCreated'   => datetime('datetime'),
                'Title'         => $dataInput[0],
                'Tanggal'       => $dataInput[1],
                'Jam'               => $dataInput[2],
                'KeteranganWaktu'   => $dataInput[3],
                'Alamat'            => $dataInput[4]
            );
            $this->db->insert('data_akad',$Data);
        } else {
            $Data = array(
                'LastUpdate'    => datetime('datetime'),
                'Title'         => $dataInput[0],
                'Tanggal'       => $dataInput[1],
                'Jam'               => $dataInput[2],
                'KeteranganWaktu'   => $dataInput[3],
                'Alamat'            => $dataInput[4]
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_akad', $Data);
        }
    }
    //////// End Akad ////////////////////////

    //////// Resepsi ////////////////////////
    function getResepsi($id){
        $data = getDataByIdPengantin('data_resepsi',$id);
        if (empty($data)){
            $data = array(
                'Title'             => null,
                'Tanggal'           => null,
                'Jam'               => null,
                'KeteranganWaktu'   => null,
                'Alamat'            => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertResepsi(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('resepsi');

        $DataResepsi = getDataByIdPengantin('data_resepsi',$id);;
        if (empty($DataResepsi)){
            $Data = array(
                'IdPengantin'   => $id,
                'DateCreated'   => datetime('datetime'),
                'Title'         => $dataInput[0],
                'Tanggal'       => $dataInput[1],
                'Jam'               => $dataInput[2],
                'KeteranganWaktu'   => $dataInput[3],
                'Alamat'            => $dataInput[4]
            );
            $this->db->insert('data_resepsi',$Data);
        } else {
            $Data = array(
                'LastUpdate'    => datetime('datetime'),
                'Title'         => $dataInput[0],
                'Tanggal'       => $dataInput[1],
                'Jam'               => $dataInput[2],
                'KeteranganWaktu'   => $dataInput[3],
                'Alamat'            => $dataInput[4]
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_resepsi', $Data);
        }
    }
    //////// End Resepsi ////////////////////////

    //////// Map ////////////////////////
    function getMap($id){
        $data = getDataByIdPengantin('data_map',$id);
        if (empty($data)){
            $data = array(
                'LinkIframe'    => null,
                'LinkMap'       => null,
                'Tombol'        => null,
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertMap(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('map');

        $DataMap = getDataByIdPengantin('data_map',$id);;
        if (empty($DataResepsi)){
            $Data = array(
                'IdPengantin'   => $id,
                'DateCreated'   => datetime('datetime'),
                'LinkIframe'    => $dataInput[0],
                'LinkMap'       => $dataInput[1],
                'Tombol'        => $dataInput[2]
            );
            $this->db->insert('data_map',$Data);
        } else {
            $Data = array(
                'LastUpdate'    => datetime('datetime'),
                'LinkIframe'    => $dataInput[0],
                'LinkMap'       => $dataInput[1],
                'Tombol'        => $dataInput[2]
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_map', $Data);
        }
    }
    //////// End Map ////////////////////////

    //////// Gallery ////////////////////////
    function getGallery($id){
        $data = getDataByIdPengantin('data_gallery',$id);
        if (empty($data)){
            $data = array(
                'Judul'         => null,
                'TextGaleri'    => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertGallery(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('gallery');

        $DataGallery = getDataByIdPengantin('data_gallery',$id);;
        if (empty($DataGallery)){
            $Data = array(
                'IdPengantin'   => $id,
                'DateCreated'   => datetime('datetime'),
                'Judul'         => $dataInput[0],
                'TextGaleri'    => $dataInput[1]
            );
            $this->db->insert('data_gallery',$Data);
        } else {
            $Data = array(
                'LastUpdate'    => datetime('datetime'),
                'Judul'         => $dataInput[0],
                'TextGaleri'    => $dataInput[1]
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_gallery', $Data);
        }
    }
    //////// End Gallery ////////////////////////

    //////// Quote ////////////////////////
    function getQuote($id){
        $data = getDataByIdPengantin('data_quote',$id);
        if (empty($data)){
            $data = array(
                'Judul'         => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertQuote(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('quote');

        $DataQuote = getDataByIdPengantin('data_quote',$id);;
        if (empty($DataQuote)){
            $Data = array(
                'IdPengantin'   => $id,
                'DateCreated'   => datetime('datetime'),
                'Judul'         => $dataInput[0]
            );
            $this->db->insert('data_quote',$Data);
        } else {
            $Data = array(
                'LastUpdate'    => datetime('datetime'),
                'Judul'         => $dataInput[0]
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_quote', $Data);
        }
    }
    //////// End Quote ////////////////////////

    //////// Story ////////////////////////
    function getStory($id){
        $data = getDataByIdPengantin('data_story',$id);
        if (empty($data)){
            $data = array(
                'Kecil'         => null,
                'Keterangan'    => null,
                'Story'         => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertStory(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('story');

        $DataStory = getDataByIdPengantin('data_story',$id);;
        if (empty($DataStory)){
            $Data = array(
                'IdPengantin'   => $id,
                'DateCreated'   => datetime('datetime'),
                'Kecil'         => $dataInput[0],
                'Keterangan'    => $dataInput[1],
                'Story'         => $dataInput[2]
            );
            $this->db->insert('data_story',$Data);
        } else {
            $Data = array(
                'LastUpdate'    => datetime('datetime'),
                'Kecil'         => $dataInput[0],
                'Keterangan'    => $dataInput[1],
                'Story'         => $dataInput[2]
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_story', $Data);
        }
    }
    //////// End Story ////////////////////////

    //////// Bahasa ////////////////////////
    function getBahasa($id){
        $data = getDataByIdPengantin('data_bahasa',$id);
        if (empty($data)){
            $data = array(
                'Popup1'        => null,
                'Popup2'        => null,
                'TombolPopup'   => null,
                'Home1'         => null,
                'Home2'         => null,
                'Event1'        => null,
                'Event2'        => null,
                'Dan'           => null,
                'KataPembuka'   => null,
                'TagLine'       => null,
                'UcapanSelamat' => null,
                'Nama'          => null,
                'IsiNama'       => null,
                'Ucapan'        => null,
                'IsiPesan'      => null,
                'TombolKirim'   => null,
                'MenuQuote'     => null
            );
            $data = (object)$data;
        }
        return $data;
    }

    function insertBahasa(){
        $id = $this->uri->segment('4');
        $dataInput = $this->input->post('bahasa');

        $DataBahasa = getDataByIdPengantin('data_bahasa',$id);;
        if (empty($DataBahasa)){
            $Data = array(
                'IdPengantin'   => $id,
                'DateCreated'   => datetime('datetime'),
                'Popup1'        => $dataInput[0],
                'Popup2'        => $dataInput[1],
                'TombolPopup'   => $dataInput[2],
                'Home1'         => $dataInput[3],
                'Home2'         => $dataInput[4],
                'Event1'        => $dataInput[5],
                'Event2'        => $dataInput[6],
                'Dan'           => $dataInput[7],
                'KataPembuka'   => $dataInput[8],
                'TagLine'       => $dataInput[9],
                'UcapanSelamat' => $dataInput[10],
                'Nama'          => $dataInput[11],
                'IsiNama'       => $dataInput[12],
                'Ucapan'        => $dataInput[13],
                'IsiPesan'      => $dataInput[14],
                'TombolKirim'   => $dataInput[15],
                'MenuQuote'     => $dataInput[16]
            );
            $this->db->insert('data_bahasa',$Data);
        } else {
            $Data = array(
                'LastUpdate'    => datetime('datetime'),
                'Popup1'        => $dataInput[0],
                'Popup2'        => $dataInput[1],
                'TombolPopup'   => $dataInput[2],
                'Home1'         => $dataInput[3],
                'Home2'         => $dataInput[4],
                'Event1'        => $dataInput[5],
                'Event2'        => $dataInput[6],
                'Dan'           => $dataInput[7],
                'KataPembuka'   => $dataInput[8],
                'TagLine'       => $dataInput[9],
                'UcapanSelamat' => $dataInput[10],
                'Nama'          => $dataInput[11],
                'IsiNama'       => $dataInput[12],
                'Ucapan'        => $dataInput[13],
                'IsiPesan'      => $dataInput[14],
                'TombolKirim'   => $dataInput[15],
                'MenuQuote'     => $dataInput[16]
            );
            $this->db->where('IdPengantin', $id);
            $this->db->update('data_bahasa', $Data);
        }
    }
    //////// End Bahasa ////////////////////////
}