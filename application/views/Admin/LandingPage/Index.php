<h4 class="page-title"><?= $Title ?></h4>
<div class="row">
    <div class="col-md-3">&nbsp;</div>
    <div class="col-md-6">
        <div class="card card-stats card-primary">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Kode Promo</p>
                            <h4 id="tPromo" class="card-title">NKH120978KM</h4>
                            <h4 id="uPromo" style="display:none;" class="card-title">
                                <input type="text" name="promo" class="form-control" value="NKH120978KM">
                            </h4>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="icon-big text-center">
                            <div id="bDefault">
                                <button type="button" id="EditPromo" class="btn btn-success" onclick="ubahPromo('Edit');"><i class="la la-pencil-square"></i> Ubah</button>
                                <button type="button" id="NonactivePromo" class="btn btn-danger"><i class="la la-eye-slash"></i> Nonaktif</button>
                            </div>
                            <div id="bEdit" style="display:none;">
                                <button type="button" id="SavePromo" class="btn btn-success"><i class="la la-check-square"></i> Simpan</button>
                                <button type="button" id="BatalPromo" class="btn btn-danger" onclick="ubahPromo('Batal');"><i class="la la-times"></i> Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">&nbsp;</div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Desain Undangan</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Desain</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mobile</td>
                            <td><img src="<?= base_url() ?>assets/user/images/portfolio/portfolio1.jpg" alt="" width="100"></td>
                            <td>
                                <a href="<?= base_url('Admin/LandingPage') ?>">
                                    <button class="btn btn-success"><i class="la la-pencil"></i>&nbsp;Edit</button>
                                </a>
                                <a href="<?= base_url('Admin/LandingPage') ?>">
                                    <button class="btn btn-danger"><i class="la la-trash"></i>&nbsp;Delete</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Web</td>
                            <td><img src="<?= base_url() ?>assets/user/images/portfolio/portfolio2.jpg" alt="" width="100"></td>
                            <td>
                                <a href="<?= base_url('Admin/LandingPage') ?>">
                                    <button class="btn btn-success"><i class="la la-pencil"></i>&nbsp;Edit</button>
                                </a>
                                <a href="<?= base_url('Admin/LandingPage') ?>">
                                    <button class="btn btn-danger"><i class="la la-trash"></i>&nbsp;Delete</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function ubahPromo(type){
    var tpromo = document.getElementById("tPromo");
    var upromo = document.getElementById("uPromo");
    var bdefault = document.getElementById("bDefault");
    var bedit = document.getElementById("bEdit");
    if (type == 'Edit') {
        upromo.style.display = 'block';
        tpromo.style.display = 'none';
        bdefault.style.display = 'none';
        bedit.style.display = 'block';
    } else {
        upromo.style.display = 'none';
        tpromo.style.display = 'block';
        bdefault.style.display = 'block';
        bedit.style.display = 'none';
    }
}
</script>