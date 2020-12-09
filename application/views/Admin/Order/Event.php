<div class="col-md-6"><h3>Event</h3></div>
<div class="col-md-6"><button id="bEditEvent" class="bEditEvent btn btn-primary pull-right" onclick="editForm('Event');">Edit Event</button></div>
<div id="fEditEvent" class="fEditEvent col-md-12" style="display:none;">
    <form action="" method="">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Judul event</td>
                    <td><input type="text" id="jEvent" name="jEvent" class="form-control"></td>
                </tr>
                <tr>
                    <td>Pembuka</td>
                    <td><textarea class="form-control" name="Pembuka" id="Pembuka"></textarea></td>
                </tr>
                <tr>
                    <td>Coundown</td>
                    <td><input type="text" id="Coundown" name="Coundown" class="form-control"></td>
                </tr>
                <tr>
                    <td>Note 1</td>
                    <td><input type="text" id="Note1" name="Note1" class="form-control"></td>
                </tr>
                <tr>
                    <td>Note 2</td>
                    <td><input type="text" id="Note2" name="Note2" class="form-control"></td>
                </tr>
                <tr>
                    <td>Penutup</td>
                    <td><textarea class="form-control" name="Penutup" id="Penutup"></textarea></td>
                </tr>
                <tr>
                    <td>Link Sound</td>
                    <td><input type="text" id="LinkSound" name="LinkSound" class="form-control"></td>
                </tr>
                <tr>
                    <td>Judul Live</td>
                    <td><input type="text" id="jLive" name="jLive" class="form-control"></td>
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
                <td>Event</td>
            </tr>
            <tr>
                <td>Pembuka</td>
                <td>Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri Resepsi Pernikahan putra-putri kami</td>
            </tr>
            <tr>
                <td>Coundown</td>
                <td>december 20,2020 10:00:00</td>
            </tr>
            <tr>
                <td>Note 1</td>
                <td></td>
            </tr>
            <tr>
                <td>Note 2</td>
                <td></td>
            </tr>
            <tr>
                <td>Penutup</td>
                <td>Merupakan suatu kehormatan dan kebahagiaan#bagi kami apabila Bapak/Ibu/Saudara(i)#berkenan untuk hadir dan memberikan do'a restu#kepada kedua mempelai.</td>
            </tr>
            <tr>
                <td>Link Sound</td>
                <td></td>
            </tr>
            <tr>
                <td>Judul Live</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6"><h3>Tanggal dan alamat Akad</h3></div>
<div class="col-md-6"><button id="bEditAkad" class="bEditAkad btn btn-primary pull-right" onclick="editForm('Akad');">Edit Akad</button></div>
<div id="fEditAkad" class="fEditAkad col-md-12" style="display:none;">
    <form action="" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Titel</td>
                    <td><input type="text" id="Titel" name="Titel" class="form-control"></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" id="tanggalAkad" name="tanggalAkad" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td><input type="time" id="jamAkad" name="jamAkad" class="form-control"></td>
                </tr>
                <tr>
                    <td>Keterangan Waktu</td>
                    <td><input type="text" id="keteranganWaktu" name="keteranganWaktu" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea class="form-control" name="alamatAkad" id="alamatAkad"></textarea></td>
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
                <td>Akad</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>Minggu, 20 Desember 2020</td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>december 20,2020 10:00:00</td>
            </tr>
            <tr>
                <td>Keterangan Waktu</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Perumnas Talang Kelapa Blok. IV RT. 22 RW. 07 No. 287 Kel/Kec Alang-alang Lebar KM. 10#Kota Palembang></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6"><h3>Tanggal dan alamat Resepsi</h3></div>
<div class="col-md-6"><button id="bEditResepsi" class="bEditResepsi btn btn-primary pull-right" onclick="editForm('Resepsi');">Edit Resepsi</button></div>
<div id="fEditResepsi" class="fEditResepsi col-md-12" style="display:none;">
    <form action="" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Titel</td>
                    <td><input type="text" id="TitelResepsi" name="TitelResepsi" class="form-control"></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" id="tanggalResepsi" name="tanggalResepsi" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td><input type="time" id="jamResepsi" name="jamResepsi" class="form-control"></td>
                </tr>
                <tr>
                    <td>Keterangan Waktu</td>
                    <td><input type="text" id="keteranganWaktuResepsi" name="keteranganWaktuResepsi" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea class="form-control" name="alamatResepsi" id="alamatResepsi"></textarea></td>
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
                <td>Resepsi</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>Minggu, 20 Desember 2020</td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>december 20,2020 10:00:00</td>
            </tr>
            <tr>
                <td>Keterangan Waktu</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Perumnas Talang Kelapa Blok. IV RT. 22 RW. 07 No. 287 Kel/Kec Alang-alang Lebar KM. 10#Kota Palembang></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6"><h3>Map</h3></div>
<div class="col-md-6"><button id="bEditMap" class="bEditMap btn btn-primary pull-right" onclick="editForm('Map');">Edit Map</button></div>
<div id="fEditMap" class="fEditMap col-md-12" style="display:none;">
    <form action="" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Link ifreme</td>
                    <td><input type="text" id="linkIframe" name="linkIframe" class="form-control"></td>
                </tr>
                <tr>
                    <td>Link Map</td>
                    <td><input type="text" id="linkMap" name="linkMap" class="form-control"></td>
                </tr>
                <tr>
                    <td>Tombol Map</td>
                    <td><input type="text" id="tombolMap" name="tombolMap" class="form-control"></td>
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
                <td></td>
            </tr>
            <tr>
                <td>Link Map</td>
                <td>https://goo.gl/maps/8YeKETv5NC4Pzq4s9</td>
            </tr>
            <tr>
                <td>Tombol Map</td>
                <td>Open Map</td>
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