<h4 class="page-title"><?= $Title ?></h4>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pengantin Pria</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="pNama" required>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">
                            <label class="form-label">Nama Panggilan</label>
                            <input type="text" class="form-control" name="pPanggilan" required>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Bapak</label>
                            <input type="text" class="form-control" name="pBapak" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" name="pIbu" required>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pengantin Wanita</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="wNama" required>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">
                            <label class="form-label">Nama Panggilan</label>
                            <input type="text" class="form-control" name="wPanggilan" required>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Bapak</label>
                            <input type="text" class="form-control" name="wBapak" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" name="wIbu" required>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pelaksanaan Akad</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Hari</label>
                            <select name="aHari" id="aHari" class="form-control">
                                <option value="">Pilih Hari..</option>
                                <option value="1">Senin</option>
                                <option value="2">Selasa</option>
                                <option value="3">Rabu</option>
                                <option value="4">Kamis</option>
                                <option value="5">Jumat</option>
                                <option value="6">Sabtu</option>
                                <option value="7">Minggu</option>
                            </select>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="aTanggal" id="aTanggal">
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">
                            <label class="form-label">Jam</label>
                            <input type="time" class="form-control" name="aJam">
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">
                            <label class="form-label">Lokasi</label>
                            <textarea class="form-control" name="aLokasi" id="aLokasi"></textarea>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pelaksanaan Resepsi</h4>
                    <label class="form-check-label">
                        <input class="form-check-input task-select" id="sAkad" type="checkbox" onclick="akad()">
                        <span class="form-check-sign"></span>
                        Sama Dengan AKAD
                    </label>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Hari</label>
                            <select name="rHari" id="rHari" class="form-control">
                                <option value="">Pilih Hari..</option>
                                <option value="1">Senin</option>
                                <option value="2">Selasa</option>
                                <option value="3">Rabu</option>
                                <option value="4">Kamis</option>
                                <option value="5">Jumat</option>
                                <option value="6">Sabtu</option>
                                <option value="7">Minggu</option>
                            </select>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="rTanggal" id="rTanggal">
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-6">
                            <label class="form-label">Jam Mulai</label>
                            <input type="time" class="form-control" name="rJamMulai">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jam Selesai</label>
                            <input type="time" class="form-control" name="rJamSelesai">
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">
                            <label class="form-label">Lokasi</label>
                            <textarea class="form-control" name="rLokasi" id="rLokasi"></textarea>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gallery Pre-Wedding</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <input type="file" name="galery" class="form-control">
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kata Pengantar</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <textarea class="form-control" name="KataPengantar"></textarea>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary pull-right" name="simpan" value="Simpan">
        </div>
    </div>
</form>

<script>
function akad(){
    var checkBox = document.getElementById("sAkad");
    var hari = document.getElementById("aHari").value;
    var tanggal = document.getElementById("aTanggal").value;
    var lokasi = document.getElementById("aLokasi").value;

    if (checkBox.checked == true){
        document.getElementById("rHari").value = hari;
        document.getElementById("rTanggal").value = tanggal;
        document.getElementById("rLokasi").value = lokasi;    
    } else {
        document.getElementById("rHari").value = "";
        document.getElementById("rTanggal").value = "";
        document.getElementById("rLokasi").value = "";
    }
    
}
</script>