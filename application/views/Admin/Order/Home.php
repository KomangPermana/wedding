<div class="col-md-6"><h3>Home</h3></div>
<div class="col-md-6"><button id="bEditHome" class="bEditHome btn btn-primary pull-right" onclick="editForm('Home');">Edit Home</button></div>
<div id="fEditHome" class="fEditHome col-md-12" style="display:none;">
    <form action="<?= base_url('Admin/Order/insertHome/'.$this->uri->segment('4')) ?>" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Foto Ogthumbnail</td>
                    <td>
                        <input type="file" value="<?= $Home->Foto_Ogthumbnail ?>" id="fOgthumbnail" name="home[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Foto Favicon</td>
                    <td>
                        <input type="file" value="<?= $Home->Foto_Favicon ?>" id="fFavicon" name="home[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Foto Openerimg</td>
                    <td>
                        <input type="file" value="<?= $Home->Foto_Openerimg ?>" id="fOpenerimg" name="home[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Judul home</td>
                    <td>
                        <input type="text" value="<?= $Home->Judul_Home ?>" id="jHome" name="home[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Official</td>
                    <td>
                        <input type="text" value="<?= $Home->Official ?>" id="Official" name="home[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Nama panggilan 1</td>
                    <td>
                        <input type="text" value="<?= $Home->Nama_Panggilan_1 ?>" id="panggilan1" name="home[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Nama panggilan 2</td>
                    <td>
                        <input type="text" value="<?= $Home->Nama_Panggilan_2 ?>" id="panggilan2" name="home[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Link tombol home</td>
                    <td>
                        <input type="text" value="<?= $Home->Link_Tombol_Home ?>" id="linkHome" name="home[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal home</td>
                    <td>
                        <input type="date" value="<?= $Home->Tanggal_Home ?>" id="tanggalHome" name="home[]" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Alamat home</td>
                    <td>
                        <textarea class="form-control" name="home[]" id="alamatHome"><?= $Home->Alamat_Home ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanHome" class="simpanHome btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div id="fBatalHome" class="fBatalHome col-md-12">
<table class="table table-striped table-hover">
    <tbody>
        <tr>
            <td>Foto Ogthumbnail</td>
            <td><?= $Home->Foto_Ogthumbnail ?></td>
        </tr>
        <tr>
            <td>Foto Favicon</td>
            <td><?= $Home->Foto_Favicon ?></td>
        </tr>
        <tr>
            <td>Foto Openerimg</td>
            <td><?= $Home->Foto_Openerimg ?></td>
        </tr>
        <tr>
            <td>Judul home</td>
            <td><?= $Home->Judul_Home ?></td>
        </tr>
        <tr>
            <td>Official</td>
            <td><?= $Home->Official ?></td>
        </tr>
        <tr>
            <td>Nama panggilan 1</td>
            <td><?= $Home->Nama_Panggilan_1 ?></td>
        </tr>
        <tr>
            <td>Nama panggilan 2</td>
            <td><?= $Home->Nama_Panggilan_2 ?></td>
        </tr>
        <tr>
            <td>Link tombol home</td>
            <td><?= $Home->Link_Tombol_Home ?></td>
        </tr>
        <tr>
            <td>Tanggal home</td>
            <td><?= $Home->Tanggal_Home ?></td>
        </tr>
        <tr>
            <td>Alamat home</td>
            <td><?= $Home->Alamat_Home ?></td>
        </tr>
    </tbody>
</table>
</div>