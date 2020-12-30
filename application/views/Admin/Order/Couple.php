<div class="col-md-6"><h3>Couple</h3></div>
<div class="col-md-6"><button id="bEditCouple" class="bEditCouple btn btn-primary pull-right" onclick="editForm('Couple');">Edit Couple</button></div>
<div id="fEditCouple" class="fEditCouple col-md-12" style="display:none;">
    <form action="<?= base_url('Admin/Order/insertCouple/'.$this->uri->segment('4')) ?>" method="POST" enctype="multipart/form-data">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Foto mempelai 1</td>
                    <td>
                        <?php if($Couple->Foto1){ ?>
                            <img width="200" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$Couple->Foto1 ?>">
                        <?php } ?>
                        <input type="file" value="<?= $Couple->Foto1 ?>" id="fmempelai1" name="fmempelai1" class="form-control">
                        <input type="hidden" value="<?= $Couple->Foto1 ?>" id="fmempelai1" name="couple[]">
                    </td>
                </tr>
                <tr>
                    <td>Nama mempelai 1</td>
                    <td><input type="text" value="<?= $Couple->Nama1 ?>" id="nMempelai1" name="couple[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Gelar mempelai 1</td>
                    <td><input type="text" value="<?= $Couple->Gelar1 ?>" id="gMempelai1" name="couple[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Status 1</td>
                    <td><input type="text" value="<?= $Couple->Status1 ?>" id="sMempelai1" name="couple[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Orang tua mempelai 1</td>
                    <td><input type="text" value="<?= $Couple->Ortu1 ?>" id="otMempelai1" name="couple[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Foto mempelai 2</td>
                    <td>
                        <?php if($Couple->Foto2){ ?>
                            <img width="200" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$Couple->Foto2 ?>">
                        <?php } ?>
                        <input type="file" value="<?= $Couple->Foto2 ?>" id="fmempelai2" name="fmempelai2" class="form-control">
                        <input type="hidden" value="<?= $Couple->Foto2 ?>" id="fmempelai2" name="couple[]">
                    </td>
                </tr>
                <tr>
                    <td>Nama mempelai 2</td>
                    <td><input type="text" value="<?= $Couple->Nama2 ?>" id="nMempelai2" name="couple[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Gelar mempelai 2</td>
                    <td><input type="text" value="<?= $Couple->Gelar2 ?>" id="gMempelai2" name="couple[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Status 2</td>
                    <td><input type="text" value="<?= $Couple->Status2 ?>" id="sMempelai2" name="couple[]" class="form-control"></td>
                </tr>
                <tr>
                    <td>Orang tua mempelai 2</td>
                    <td><input type="text" value="<?= $Couple->Ortu2 ?>" id="otMempelai2" name="couple[]" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanCouple" class="simpanCouple btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div id="fBatalCouple" class="fBatalCouple col-md-12">
<table class="table table-striped table-hover">
    <tbody>
        <tr>
            <td>Foto mempelai 1</td>
            <td>
                <?php if($Couple->Foto1){ ?>
                    <img width="200" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$Couple->Foto1 ?>">
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Nama mempelai 1</td>
            <td><?= $Couple->Nama1 ?></td>
        </tr>
        <tr>
            <td>Gelar mempelai 1</td>
            <td><?= $Couple->Gelar1 ?></td>
        </tr>
        <tr>
            <td>Status 1</td>
            <td><?= $Couple->Status1 ?></td>
        </tr>
        <tr>
            <td>Orang tua mempelai 1</td>
            <td><?= $Couple->Ortu1 ?></td>
        </tr>
        <tr>
            <td>Foto mempelai 2</td>
            <td>
                <?php if($Couple->Foto2){ ?>
                    <img width="200" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$Couple->Foto2 ?>">
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Nama mempelai 2</td>
            <td><?= $Couple->Nama2 ?></td>
        </tr>
        <tr>
            <td>Gelar mempelai 2</td>
            <td><?= $Couple->Gelar2 ?></td>
        </tr>
        <tr>
            <td>Status 2</td>
            <td><?= $Couple->Status2 ?></td>
        </tr>
        <tr>
            <td>Orang tua mempelai 2</td>
            <td><?= $Couple->Ortu2 ?></td>
        </tr>
    </tbody>
</table>
</div>