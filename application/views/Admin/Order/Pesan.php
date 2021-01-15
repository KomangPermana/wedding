<h4 class="page-title"><?= $Title ?></h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="la la-plus-circle"></i>&nbsp;Tambah Data</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="dtPemesan" style="width:100%" class="table table-striped display">
                            <thead>
                                <tr>
                                    <th>Key Pasangan</th>
                                    <th>Pria</th>
                                    <th>Wanita</th>
                                    <th>Template</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($Data as $d){ ?>
                                <tr>
                                    <td>
                                        <span id="editNama<?= $d->Id ?>" class="label label-success" onclick="editNama(<?= $d->Id ?>);" data-toggle="modal" data-target="#editModal" data-id="<?= $d->Id ?>" data-nama="<?= $d->Nama ?>" data-template="<?= $d->Template ?>">
                                            <i class="la la-pencil-square"></i>
                                        </span>
                                        &nbsp;&nbsp;<?= $d->Nama ?>&nbsp;
                                        <?php if($d->Duplicated == 1){ ?>
                                            <span class="label label-info">duplicate</span>
                                        <?php } ?>
                                    </td>
                                    <td><?= $d->Pria ?></td>
                                    <td><?= $d->Wanita ?></td>
                                    <td><?= $d->Template ?></td>
                                    <td align="right">
                                        <a href="<?= base_url('Admin/Order/Edit/'.$d->Id) ?>">
                                            <button class="btn btn-success"><i class="la la-pencil"></i>&nbsp;Edit</button>
                                        </a>
                                        <a href="<?= base_url('Admin/Order/NonactiveLink/'.$d->Id) ?>">
                                            <button class="btn btn-danger"><i class="la la-eye-slash"></i>&nbsp;Nonactive</button>
                                        </a>
                                        <a href="<?= base_url('Admin/Order/Duplicate/'.$d->Id) ?>">
                                            <button class="btn btn-primary"><i class="la la-copy"></i>&nbsp;Duplicate</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <form action="<?= base_url('Admin/Order/insertLink') ?>" method="POST">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label>Link Pasangan</label>
                        <input type="text" class="form-control" name="linkName" placeholder="Link Pasangan">
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="col-md-12">
                        <label>Category Color</label>
                        <select name="category" class="form-control">
                            <option value="">Pilih...</option>
                            <option value="1">Desain 1</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
        <form action="<?= base_url('Admin/Order/updateLink') ?>" method="POST">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label>Link Pasangan</label>
                        <input type="text" class="form-control" id="eLinkNama" name="eLinkNama" placeholder="Link Pasangan">
                        <input type="hidden" id="eId" name="eId">
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="col-md-12">
                        <label>Category Color</label>
                        <select name="eCategory" id="eCategory" class="form-control">
                            <option value="">Pilih...</option>
                            <option value="1">Desain 1</option>
                            <option value="2">Desain 2</option>
                            <option value="3">Desain 3</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function editNama(idLink){
        var id = $("#editNama"+idLink).attr("data-id");
        var nama = $("#editNama"+idLink).attr("data-nama");
        var template = $("#editNama"+idLink).attr("data-template");

        document.getElementById('eId').value = id;
        document.getElementById('eLinkNama').value = nama;
        document.getElementById('eCategory').value = template;
    }
</script>