<div class="col-md-6"><h3>Agama</h3></div>
<div class="col-md-6"><button class="bEditAgama btn btn-primary pull-right" id="bEditAgama" onclick="editForm('Agama');">Edit Agama</button></div>
<div id="fEditAgama" class="fEditAgama col-md-12" style="display:none;">
    <form action="<?= base_url('Admin/Order/insertAgama/'.$this->uri->segment('4')) ?>" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Agama Couple 1</td>
                    <td>
                        <input type="text" id="aCouple1" name="agama[]" class="form-control" value="<?= $Agama->Couple1 ?>">
                    </td>
                </tr>
                <tr>
                    <td>Agama Couple 2</td>
                    <td>
                        <input type="text" id="aCouple2" name="agama[]" class="form-control" value="<?= $Agama->Couple2 ?>">
                    </td>
                </tr>
                <tr>
                    <td>Agama Couple 3</td>
                    <td>
                        <textarea id="aCouple3" name="agama[]" class="form-control"><?= $Agama->Couple3 ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Agama quote 1</td>
                    <td>
                        <textarea id="aQuote1" name="agama[]" class="form-control"><?= $Agama->Quote1 ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Agama quote 2</td>
                    <td>
                        <input type="text" id="aQuote2" name="agama[]" class="form-control" value="<?= $Agama->Quote2 ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanAgama" class="simpanAgama btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div id="fBatalAgama" class="fBatalAgama col-md-12">
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <td>Agama Couple 1</td>
                <td><?= $Agama->Couple1 ?></td>
            </tr>
            <tr>
                <td>Agama Couple 2</td>
                <td><?= $Agama->Couple2 ?></td>
            </tr>
            <tr>
                <td>Agama Couple 3</td>
                <td><?= $Agama->Couple3 ?></td>
            </tr>
            <tr>
                <td>Agama quote 1</td>
                <td><?= $Agama->Quote1 ?></td>
            </tr>
            <tr>
                <td>Agama quote 2</td>
                <td><?= $Agama->Quote2 ?></td>
            </tr>
        </tbody>
    </table>
</div>