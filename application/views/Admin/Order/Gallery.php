<div class="col-md-6"><h3>Galeri</h3></div>
<div class="col-md-6"><button id="bEditGaleri" class="bEditGaleri btn btn-primary pull-right" onclick="editForm('Galeri');">Edit Galeri</button></div>
<div id="fEditGaleri" class="fEditGaleri col-md-12" style="display:none;">
    <form action="<?= base_url('Admin/Order/insertGallery/'.$this->uri->segment('4')) ?>" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Judul Galeri</td>
                    <td><input type="text" value="<?= $Gallery->Judul ?>" id="jGaleri" name="gallery[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Text Galeri</td>
                    <td><input type="text" value="<?= $Gallery->TextGaleri ?>" id="tGaleri" name="gallery[]" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanGaleri" class="simpanGaleri btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div id="fBatalGaleri" class="fBatalGaleri col-md-12">
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <td>Judul Galeri</td>
                <td><?= $Gallery->Judul ?></td>
            </tr>
            <tr>
                <td>Text Galeri</td>
                <td><?= $Gallery->TextGaleri ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6">
    <input type="file" name="galery" class="form-control">
    <button class="btn btn-primary">Upload</button>
    <button class="btn btn-danger">Hapus</button>
</div>
<div class="col-md-6">
    <input type="file" name="galery" class="form-control">
    <button class="btn btn-primary">Upload</button>
    <button class="btn btn-danger">Hapus</button>
</div>