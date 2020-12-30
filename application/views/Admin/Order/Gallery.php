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
<div class="col-md-4">
    <form action="<?= base_url('Admin/Order/insertFotoGallery/'.$this->uri->segment('4').'/1') ?>" method="POST" enctype="multipart/form-data">
        <center>
        <?php if($FotoGallery->Foto1){ ?>
            <img id="prevImage1" width="150" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$FotoGallery->Foto1 ?>">
        <?php } else { ?>
            <img id="prevImage1" src="<?= base_url() ?>assets/admin/img/logo.PNG" width="150">
        <?php } ?>
        <input type="file" name="galery1" id="galery1" class="galery form-control" onchange="previewImage('1')">
        <input type="hidden" value="<?= $FotoGallery->Foto1 ?>" id="fgalery1" name="fgalery1">
        </center>
        <br>
        <div class="col-md-4 pull-left">
            <button class="btn btn-primary">
                <a style="color:white;" href="<?= base_url('assets/admin/pasangan/'.$this->uri->segment('4').'/'.$FotoGallery->Foto1) ?>" download><i class="la la-download"></i></a>
            </button>
        </div>
        <div class="col-md-8 pull-right">
            <input type="submit" name="upload" class="btn btn-success" value="Upload">
            <button class="btn btn-danger">Hapus</button>
        </div>
    </form>
</div>
<div class="col-md-4">
    <form action="<?= base_url('Admin/Order/insertFotoGallery/'.$this->uri->segment('4').'/2') ?>" method="POST" enctype="multipart/form-data">
        <center>
        <?php if($FotoGallery->Foto2){ ?>
            <img id="prevImage2" width="150" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$FotoGallery->Foto2 ?>">
        <?php } else { ?>
            <img id="prevImage2" src="<?= base_url() ?>assets/admin/img/logo.PNG" width="150">
        <?php } ?>
        <input type="file" name="galery2" id="galery2" class="galery form-control" onchange="previewImage('2')">
        <input type="hidden" value="<?= $FotoGallery->Foto2 ?>" id="fgalery2" name="fgalery2">
        </center>
        <br>
        <div class="col-md-4 pull-left">
            <button class="btn btn-primary">
                <a style="color:white;" href="<?= base_url('assets/admin/pasangan/'.$this->uri->segment('4').'/'.$FotoGallery->Foto2) ?>" download><i class="la la-download"></i></a>
            </button>
        </div>
        <div class="col-md-8 pull-right">
            <input type="submit" name="upload" class="btn btn-success" value="Upload">
            <button class="btn btn-danger">Hapus</button>
        </div>
    </form>
</div>
<div class="col-md-4">
    <form action="<?= base_url('Admin/Order/insertFotoGallery/'.$this->uri->segment('4').'/3') ?>" method="POST" enctype="multipart/form-data">
        <center>
        <?php if($FotoGallery->Foto3){ ?>
            <img id="prevImage3" width="150" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$FotoGallery->Foto3 ?>">
        <?php } else { ?>
            <img id="prevImage3" src="<?= base_url() ?>assets/admin/img/logo.PNG" width="150">
        <?php } ?>
        <input type="file" name="galery3" id="galery3" class="galery form-control" onchange="previewImage('3')">
        <input type="hidden" value="<?= $FotoGallery->Foto3 ?>" id="fgalery3" name="fgalery3">
        </center>
        <br>
        <div class="col-md-4 pull-left">
            <button class="btn btn-primary">
                <a style="color:white;" href="<?= base_url('assets/admin/pasangan/'.$this->uri->segment('4').'/'.$FotoGallery->Foto3) ?>" download><i class="la la-download"></i></a>
            </button>
        </div>
        <div class="col-md-8 pull-right">
            <input type="submit" name="upload" class="btn btn-success" value="Upload">
            <button class="btn btn-danger">Hapus</button>
        </div>
    </form>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-4">
    <form action="<?= base_url('Admin/Order/insertFotoGallery/'.$this->uri->segment('4').'/4') ?>" method="POST" enctype="multipart/form-data">
        <center>
        <?php if($FotoGallery->Foto4){ ?>
            <img id="prevImage4" width="150" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$FotoGallery->Foto4 ?>">
        <?php } else { ?>
            <img id="prevImage4" src="<?= base_url() ?>assets/admin/img/logo.PNG" width="150">
        <?php } ?>
        <input type="file" name="galery4" id="galery4" class="galery form-control" onchange="previewImage('4')">
        <input type="hidden" value="<?= $FotoGallery->Foto4 ?>" id="fgalery4" name="fgalery4">
        </center>
        <br>
        <div class="col-md-4 pull-left">
            <button class="btn btn-primary">
                <a style="color:white;" href="<?= base_url('assets/admin/pasangan/'.$this->uri->segment('4').'/'.$FotoGallery->Foto4) ?>" download><i class="la la-download"></i></a>
            </button>
        </div>
        <div class="col-md-8 pull-right">
            <input type="submit" name="upload" class="btn btn-success" value="Upload">
            <button class="btn btn-danger">Hapus</button>
        </div>
    </form>
</div>
<div class="col-md-4">
    <form action="<?= base_url('Admin/Order/insertFotoGallery/'.$this->uri->segment('4').'/5') ?>" method="POST" enctype="multipart/form-data">
        <center>
        <?php if($FotoGallery->Foto5){ ?>
            <img id="prevImage5" width="150" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$FotoGallery->Foto5 ?>">
        <?php } else { ?>
            <img id="prevImage5" src="<?= base_url() ?>assets/admin/img/logo.PNG" width="150">
        <?php } ?>
        <input type="file" name="galery5" id="galery5" class="galery form-control" onchange="previewImage('5')">
        <input type="hidden" value="<?= $FotoGallery->Foto5 ?>" id="fgalery5" name="fgalery5">
        </center>
        <br>
        <div class="col-md-4 pull-left">
            <button class="btn btn-primary">
                <a style="color:white;" href="<?= base_url('assets/admin/pasangan/'.$this->uri->segment('4').'/'.$FotoGallery->Foto5) ?>" download><i class="la la-download"></i></a>
            </button>
        </div>
        <div class="col-md-8 pull-right">
            <input type="submit" name="upload" class="btn btn-success" value="Upload">
            <button class="btn btn-danger">Hapus</button>
        </div>
    </form>
</div>
<div class="col-md-4">
    <form action="<?= base_url('Admin/Order/insertFotoGallery/'.$this->uri->segment('4').'/6') ?>" method="POST" enctype="multipart/form-data">
        <center>
        <?php if($FotoGallery->Foto6){ ?>
            <img id="prevImage6" width="150" src="<?= base_url().'assets/admin/pasangan/'.$this->uri->segment(4).'/'.$FotoGallery->Foto6 ?>">
        <?php } else { ?>
            <img id="prevImage6" src="<?= base_url() ?>assets/admin/img/logo.PNG" width="150">
        <?php } ?>
        <input type="file" name="galery6" id="galery6" class="galery form-control" onchange="previewImage('6')">
        <input type="hidden" value="<?= $FotoGallery->Foto6 ?>" id="fgalery6" name="fgalery6">
        </center>
        <br>
        <div class="col-md-4 pull-left">
            <button class="btn btn-primary">
                <a style="color:white;" href="<?= base_url('assets/admin/pasangan/'.$this->uri->segment('4').'/'.$FotoGallery->Foto6) ?>" download><i class="la la-download"></i></a>
            </button>
        </div>
        <div class="col-md-8 pull-right">
            <input type="submit" name="upload" class="btn btn-success" value="Upload">
            <button class="btn btn-danger">Hapus</button>
        </div>
    </form>
</div>
<div class="col-md-12">&nbsp;</div>

<script>
function previewImage(id) {
    var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("galery"+id).files[0]);
 
    oFReader.onload = function(oFREvent) {
        document.getElementById("prevImage"+id).src = oFREvent.target.result;
    };
}
</script>