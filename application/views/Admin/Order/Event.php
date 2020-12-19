<div class="col-md-6"><h3>Event</h3></div>
<div class="col-md-6"><button id="bEditEvent" class="bEditEvent btn btn-primary pull-right" onclick="editForm('Event');">Edit Event</button></div>
<div id="fEditEvent" class="fEditEvent col-md-12" style="display:none;">
    <form action="<?= base_url('Admin/Order/insertEvent/'.$this->uri->segment('4')) ?>" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Judul event</td>
                    <td><input type="text" value="<?= $Event->Judul ?>" id="jEvent" name="event[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Pembuka</td>
                    <td><textarea class="form-control" name="event[]" id="Pembuka"><?= $Event->Pembuka ?></textarea></td>
                </tr>
                <tr>
                    <td>Coundown</td>
                    <td><input type="text" value="<?= $Event->Countdown ?>" id="Coundown" name="event[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Note 1</td>
                    <td><input type="text" value="<?= $Event->Note1 ?>" id="Note1" name="event[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Note 2</td>
                    <td><input type="text" value="<?= $Event->Note2 ?>" id="Note2" name="event[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Penutup</td>
                    <td><textarea class="form-control" name="event[]" id="Penutup"><?= $Event->Penutup ?></textarea></td>
                </tr>
                <tr>
                    <td>Link Sound</td>
                    <td><input type="text" value="<?= $Event->LinkSound ?>" id="LinkSound" name="event[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Judul Live</td>
                    <td><input type="text" value="<?= $Event->JudulLive ?>" id="jLive" name="event[]" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanEvent" class="simpanEvent btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div id="fBatalEvent" class="fBatalEvent col-md-12">
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <td>Judul event</td>
                <td><?= $Event->Judul ?></td>
            </tr>
            <tr>
                <td>Pembuka</td>
                <td><?= $Event->Pembuka ?></td>
            </tr>
            <tr>
                <td>Countdown</td>
                <td><?= $Event->Countdown ?></td>
            </tr>
            <tr>
                <td>Note 1</td>
                <td><?= $Event->Note1 ?></td>
            </tr>
            <tr>
                <td>Note 2</td>
                <td><?= $Event->Note2 ?></td>
            </tr>
            <tr>
                <td>Penutup</td>
                <td><?= $Event->Penutup ?></td>
            </tr>
            <tr>
                <td>Link Sound</td>
                <td><?= $Event->LinkSound ?></td>
            </tr>
            <tr>
                <td>Judul Live</td>
                <td><?= $Event->JudulLive ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6"><h3>Tanggal dan alamat Akad</h3></div>
<div class="col-md-6"><button id="bEditAkad" class="bEditAkad btn btn-primary pull-right" onclick="editForm('Akad');">Edit Akad</button></div>
<div id="fEditAkad" class="fEditAkad col-md-12" style="display:none;">
    <form action="<?= base_url('Admin/Order/insertAkad/'.$this->uri->segment('4')) ?>" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Titel</td>
                    <td><input type="text" value="<?= $Akad->Title ?>" id="Titel" name="akad[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" value="<?= $Akad->Tanggal ?>" id="tanggalAkad" name="akad[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td><input type="time" value="<?= $Akad->Jam ?>" id="jamAkad" name="akad[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Keterangan Waktu</td>
                    <td><input type="text" value="<?= $Akad->KeteranganWaktu ?>" id="keteranganWaktu" name="akad[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea class="form-control" name="akad[]" id="alamatAkad"><?= $Akad->Alamat ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanAkad" class="simpanAkad btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div id="fBatalAkad" class="fBatalAkad col-md-12">
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <td>Titel</td>
                <td><?= $Akad->Title ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><?= $Akad->Tanggal ?></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><?= $Akad->Jam ?></td>
            </tr>
            <tr>
                <td>Keterangan Waktu</td>
                <td><?= $Akad->KeteranganWaktu ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $Akad->Alamat ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6"><h3>Tanggal dan alamat Resepsi</h3></div>
<div class="col-md-6"><button id="bEditResepsi" class="bEditResepsi btn btn-primary pull-right" onclick="editForm('Resepsi');">Edit Resepsi</button></div>
<div id="fEditResepsi" class="fEditResepsi col-md-12" style="display:none;">
    <form action="<?= base_url('Admin/Order/insertResepsi/'.$this->uri->segment('4')) ?>" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Titel</td>
                    <td><input type="text" value="<?= $Resepsi->Title ?>" id="TitelResepsi" name="resepsi[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" value="<?= $Resepsi->Tanggal ?>" id="tanggalResepsi" name="resepsi[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td><input type="time" value="<?= $Resepsi->Jam ?>" id="jamResepsi" name="resepsi[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Keterangan Waktu</td>
                    <td><input type="text" value="<?= $Resepsi->KeteranganWaktu ?>" id="keteranganWaktuResepsi" name="resepsi[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea class="form-control" name="resepsi[]" id="alamatResepsi"><?= $Resepsi->Alamat ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanResepsi" class="simpanResepsi btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div id="fBatalResepsi" class="fBatalResepsi col-md-12">
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <td>Titel</td>
                <td><?= $Resepsi->Title ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><?= $Resepsi->Tanggal ?></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><?= $Resepsi->Jam ?></td>
            </tr>
            <tr>
                <td>Keterangan Waktu</td>
                <td><?= $Resepsi->KeteranganWaktu ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $Resepsi->Alamat ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6"><h3>Map</h3></div>
<div class="col-md-6"><button id="bEditMap" class="bEditMap btn btn-primary pull-right" onclick="editForm('Map');">Edit Map</button></div>
<div id="fEditMap" class="fEditMap col-md-12" style="display:none;">
    <form action="<?= base_url('Admin/Order/insertMap/'.$this->uri->segment('4')) ?>" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Link ifreme</td>
                    <td><input type="text" value="<?= $Map->LinkIframe ?>" id="linkIframe" name="map[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Link Map</td>
                    <td><input type="text" value="<?= $Map->LinkMap ?>" id="linkMap" name="map[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Tombol Map</td>
                    <td><input type="text" value="<?= $Map->Tombol ?>" id="tombolMap" name="map[]" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanMap" class="simpanMap btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div id="fBatalMap" class="fBatalMap col-md-12">
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <td>Link ifreme</td>
                <td><?= $Map->LinkIframe ?></td>
            </tr>
            <tr>
                <td>Link Map</td>
                <td><?= $Map->LinkMap ?></td>
            </tr>
            <tr>
                <td>Tombol Map</td>
                <td><?= $Map->Tombol ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12"><h3>Tambah Acara</h3></div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <label class="form-label">Judul Acara</label>
            <input type="text" class="form-control" name="jAcara">
        </div>
        <div class="col-md-6">
            <label class="form-label">Tanggal</label>
            <input type="text" class="form-control" name="Tanggal">
        </div>
        <div class="col-md-6">
            <label class="form-label">Keterangan Waktu</label>
            <input type="text" class="form-control" name="waktu">
        </div>
        <div class="col-md-6">
            <label class="form-label">Jam</label>
            <input type="text" class="form-control" name="jam">
        </div>
        <div class="col-md-12">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat"></textarea>
        </div>
        <div class="col-md-12">&nbsp;</div>
        <div class="col-md-12">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12"><h3>Tambah Link Acara</h3></div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <label class="form-label">Judul Live</label>
            <input type="text" class="form-control" name="jLive">
        </div>
        <div class="col-md-12">
            <label class="form-label">Link Live</label>
            <textarea class="form-control" name="lLive" id="lLive"></textarea>
        </div>
        <div class="col-md-12">&nbsp;</div>
        <div class="col-md-12">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12"><h3>Tambah Map</h3></div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <label class="form-label">Link iframe</label>
            <textarea class="form-control" name="lframe" id="lframe"></textarea>
        </div>
        <div class="col-md-12">
            <label class="form-label">Link Map</label>
            <textarea class="form-control" name="lmap" id="lmap"></textarea>
        </div>
        <div class="col-md-12">
            <label class="form-label">Tombol Map</label>
            <input type="text" class="form-control" name="tMap">
        </div>
        <div class="col-md-12">&nbsp;</div>
        <div class="col-md-12">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>