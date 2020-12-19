<div class="col-md-6"><h3>Bahasa</h3></div>
<div class="col-md-6"><button id="bEditBahasa" class="bEditBahasa btn btn-primary pull-right" onclick="editForm('Bahasa');">Edit Bahasa</button></div>
<div id="fEditBahasa" class="fEditBahasa col-md-12" style="display:none;">
    <form action="<?= base_url('Admin/Order/insertBahasa/'.$this->uri->segment('4')) ?>" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Popup 1</td>
                    <td><input type="text" value="<?= $Bahasa->Popup1 ?>" id="popup1" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Popup 2</td>
                    <td><input type="text" value="<?= $Bahasa->Popup2 ?>" id="popup2" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Tombol pop up </td>
                    <td><input type="text" value="<?= $Bahasa->TombolPopup ?>" id="tombolPopup" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Home 1</td>
                    <td><input type="text" value="<?= $Bahasa->Home1 ?>" id="home1" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Home 2</td>
                    <td><input type="text" value="<?= $Bahasa->Home2 ?>" id="home2" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Event 1</td>
                    <td><input type="text" value="<?= $Bahasa->Event1 ?>" id="event1" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Event 2</td>
                    <td><input type="text" value="<?= $Bahasa->Event2 ?>" id="event2" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Dan</td>
                    <td><input type="text" value="<?= $Bahasa->Dan ?>" id="dan" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Kata Pembuka</td>
                    <td><input type="text" value="<?= $Bahasa->KataPembuka ?>" id="kataPembuka" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Tagline</td>
                    <td><input type="text" value="<?= $Bahasa->TagLine ?>" id="tagline" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Ucapan Selamat</td>
                    <td><input type="text" value="<?= $Bahasa->UcapanSelamat ?>" id="ucapanSelamat" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" value="<?= $Bahasa->Nama ?>" id="nama" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Isi Nama</td>
                    <td><input type="text" value="<?= $Bahasa->IsiNama ?>" id="isiNama" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Ucapan</td>
                    <td><input type="text" value="<?= $Bahasa->Ucapan ?>" id="ucapan" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Isi Pesan</td>
                    <td><input type="text" value="<?= $Bahasa->IsiPesan ?>" id="isiPesan" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Tombol kirim pesan</td>
                    <td><input type="text" value="<?= $Bahasa->TombolKirim ?>" id="tombolKirimPesan" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Menu quote</td>
                    <td><input type="text" value="<?= $Bahasa->MenuQuote ?>" id="menuQuote" name="bahasa[]" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanBahasa" class="simpanBahasa btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div id="fBatalBahasa" class="fBatalBahasa col-md-12">
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <td>Popup 1</td>
                <td><?= $Bahasa->Popup1 ?></td>
            </tr>
            <tr>
                <td>Popup 2</td>
                <td><?= $Bahasa->Popup2 ?></td>
            </tr>
            <tr>
                <td>Tombol pop up </td>
                <td><?= $Bahasa->TombolPopup ?></td>
            </tr>
            <tr>
                <td>Home 1</td>
                <td><?= $Bahasa->Home1 ?></td>
            </tr>
            <tr>
                <td>Home 2</td>
                <td><?= $Bahasa->Home2 ?></td>
            </tr>
            <tr>
                <td>Event 1</td>
                <td><?= $Bahasa->Event1 ?></td>
            </tr>
            <tr>
                <td>Event 2</td>
                <td><?= $Bahasa->Event2 ?></td>
            </tr>
            <tr>
                <td>Dan</td>
                <td><?= $Bahasa->Dan ?></td>
            </tr>
            <tr>
                <td>Kata Pembuka</td>
                <td><?= $Bahasa->KataPembuka ?></td>
            </tr>
            <tr>
                <td>Tagline</td>
                <td><?= $Bahasa->TagLine ?></td>
            </tr>
            <tr>
                <td>Ucapan Selamat</td>
                <td><?= $Bahasa->UcapanSelamat ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?= $Bahasa->Nama ?></td>
            </tr>
            <tr>
                <td>Isi Nama</td>
                <td><?= $Bahasa->IsiNama ?></td>
            </tr>
            <tr>
                <td>Ucapan</td>
                <td><?= $Bahasa->Ucapan ?></td>
            </tr>
            <tr>
                <td>Isi Pesan</td>
                <td><?= $Bahasa->IsiPesan ?></td>
            </tr>
            <tr>
                <td>Tombol kirim pesan</td>
                <td><?= $Bahasa->TombolKirim ?></td>
            </tr>
            <tr>
                <td>Menu quote</td>
                <td><?= $Bahasa->MenuQuote ?></td>
            </tr>
        </tbody>
    </table>
</div>