<h4 class="page-title"><?= $Title ?></h4>
<div class="row">
    <div class="col-md-4">
        <div class="card card-stats card-primary">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Kode Promo</p>
                            <h4 id="tPromo" class="card-title"><?= $Promo->Data ?></h4>
                            <h4 id="uPromo" style="display:none;" class="card-title">
                                <input type="text" name="Promo" id="Promo" class="Promo form-control" value="<?= $Promo->Data ?>">
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-6 pull-right">
                        <div class="icon-big text-center">
                            <div id="PromoDefault">
                                <button type="button" id="EditPromo" class="btn btn-success" onclick="ubah('Promo','Edit');"><i class="la la-pencil-square"></i></button>
                                <button type="button" id="NonactivePromo" class="btn btn-danger" onclick="input('Promo','Nonactive');"><i class="la la-eye-slash"></i></button>
                            </div>
                            <div id="PromoEdit" style="display:none;">
                                <button type="submit" id="SavePromo" class="btn btn-success" onclick="input('Promo','Save');"><i class="la la-check-square"></i></button>
                                <button type="button" id="BatalPromo" class="btn btn-danger" onclick="ubah('Promo','Batal');"><i class="la la-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-stats card-warning">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Phone Number</p>
                            <h4 id="tPhone" class="card-title"><?= $Phone->Data ?></h4>
                            <h4 id="uPhone" style="display:none;" class="card-title">
                                <input type="text" name="Phone" id="Phone" class="Phone form-control" value="<?= $Phone->Data ?>">
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-6 pull-right">
                        <div class="icon-big text-center">
                            <div id="PhoneDefault">
                                <button type="button" id="EditPhone" class="btn btn-success" onclick="ubah('Phone','Edit');"><i class="la la-pencil-square"></i></button>
                                <button type="button" id="NonactivePhone" class="btn btn-danger" onclick="input('Phone','Nonactive');"><i class="la la-eye-slash"></i></button>
                            </div>
                            <div id="PhoneEdit" style="display:none;">
                                <button type="submit" id="SavePhone" class="btn btn-success" onclick="input('Phone','Save');"><i class="la la-check-square"></i></button>
                                <button type="button" id="BatalPhone" class="btn btn-danger" onclick="ubah('Phone','Batal');"><i class="la la-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-stats card-warning">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="numbers">
                            <p class="card-category">Contact Email</p>
                            <h4 id="tEmail" class="card-title"><?= $Email->Data ?></h4>
                            <h4 id="uEmail" style="display:none;" class="card-title">
                                <input type="text" name="Email" id="Email" class="Email form-control" value="<?= $Email->Data ?>">
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-6 pull-right">
                        <div class="icon-big text-center">
                            <div id="EmailDefault">
                                <button type="button" id="EditEmail" class="btn btn-success" onclick="ubah('Email','Edit');"><i class="la la-pencil-square"></i></button>
                                <button type="button" id="NonactiveEmail" class="btn btn-danger" onclick="input('Email','Nonactive');"><i class="la la-eye-slash"></i></button>
                            </div>
                            <div id="EmailEdit" style="display:none;">
                                <button type="submit" id="SaveEmail" class="btn btn-success" onclick="input('Email','Save');"><i class="la la-check-square"></i></button>
                                <button type="button" id="BatalEmail" class="btn btn-danger" onclick="ubah('Email','Batal');"><i class="la la-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Desain Undangan</h4>
            </div>
            <div class="card-body">
                <table id="dtLandingPage" style="width:100%" class="table table-striped display">
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
function ubah(table,type){
    var text = document.getElementById("t"+table);
    var inputText = document.getElementById("u"+table);
    var bdefault = document.getElementById(table+"Default");
    var bedit = document.getElementById(table+"Edit");
    if (type == 'Edit') {
        inputText.style.display = 'block';
        text.style.display = 'none';
        bdefault.style.display = 'none';
        bedit.style.display = 'block';
    } else {
        inputText.style.display = 'none';
        text.style.display = 'block';
        bdefault.style.display = 'block';
        bedit.style.display = 'none';
    }
}

function input(table,type){
    var dString = table.toLowerCase();
    var inputText = $("#"+table).val();
    var dataString = 'data='+inputText+'&type='+type+'&table='+table;
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Admin/LandingPage/insertData'); ?>",
        data: dataString,
        cache: false,
        success: function(response){
            var _dt = JSON.parse(response);
            console.log(_dt);
            document.getElementById(table).value = _dt['Data'];
            document.getElementById('t'+table).innerHTML = _dt['Data'];
            ubah(table,'Batal');
        }
    });
}
</script>