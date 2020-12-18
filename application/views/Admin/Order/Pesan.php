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
                                    <td><?= $d->Nama ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><?= $d->Template ?></td>
                                    <td>
                                        <a href="<?= base_url('Admin/Order/Edit/'.$d->Id) ?>">
                                            <button class="btn btn-success"><i class="la la-pencil"></i>&nbsp;Edit</button>
                                        </a>
                                        <a href="<?= base_url('Admin/Order') ?>">
                                            <button class="btn btn-danger"><i class="la la-trash"></i>&nbsp;Delete</button>
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