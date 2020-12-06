<h4 class="page-title"><?= $Title ?></h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#Agama">Agama</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#Home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#Couple">Couple</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#Event">Event</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#Galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#Quote">Quote</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#Bahasa">Bahasa</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#Setting">Setting</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#Ucapan">Ucapan</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#Note">Note</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div id="Agama" role="tabpanel" class="tab-pane fade in active">
                        <?php include "Agama.php"; ?>
                    </div>
                    <div id="Home" role="tabpanel" class="tab-pane fade">
                        <?php include "Home.php"; ?>
                    </div>
                    <div id="Couple" role="tabpanel" class="tab-pane fade">
                        <?php include "Couple.php"; ?>
                    </div>
                    <div id="Event" role="tabpanel" class="tab-pane fade">
                        <?php include "Event.php"; ?>
                    </div>
                    <div id="Galeri" role="tabpanel" class="tab-pane fade">
                        <?php include "Gallery.php"; ?>
                    </div>
                    <div id="Quote" role="tabpanel" class="tab-pane fade">
                        <?php include "Quote.php"; ?>
                    </div>
                    <div id="Bahasa" role="tabpanel" class="tab-pane fade">
                        <?php include "Bahasa.php"; ?>
                    </div>
                    <div id="Setting" role="tabpanel" class="tab-pane fade">
                        <div class="col-md-12"><h3>Setting</h3></div>
                        <div class="col-md-12">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td>Link</td>
                                    <td>https://nikahankami.com/id/abdinahayurin/nama+tamu maaf</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Note 2</td>
                                    <td></td>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="aNote" name="Note2" checked>
                                            <label class="custom-control-label" for="aNote">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="nNote" name="Note2">
                                            <label class="custom-control-label" for="nNote">Non Aktif</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Note Story</td>
                                    <td></td>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="aNoteStory" name="NoteStory" checked>
                                            <label class="custom-control-label" for="aNoteStory">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="nNoteStory" name="NoteStory">
                                            <label class="custom-control-label" for="nNoteStory">Non Aktif</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Link acara</td>
                                    <td></td>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="aLink" name="Link" checked>
                                            <label class="custom-control-label" for="aLink">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="nLink" name="Link">
                                            <label class="custom-control-label" for="nLink">Non Aktif</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Qr</td>
                                    <td></td>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="aQR" name="QR" checked>
                                            <label class="custom-control-label" for="aQR">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="nQR" name="QR">
                                            <label class="custom-control-label" for="nQR">Non Aktif</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Map</td>
                                    <td></td>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="aMap" name="Map" checked>
                                            <label class="custom-control-label" for="aMap">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="nMap" name="Map">
                                            <label class="custom-control-label" for="nMap">Non Aktif</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Story</td>
                                    <td></td>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="aStory" name="Story" checked>
                                            <label class="custom-control-label" for="aStory">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="nStory" name="Story">
                                            <label class="custom-control-label" for="nStory">Non Aktif</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Quote</td>
                                    <td></td>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="aQuote" name="Quote" checked>
                                            <label class="custom-control-label" for="aQuote">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="nQuote" name="Quote">
                                            <label class="custom-control-label" for="nQuote">Non Aktif</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gallery</td>
                                    <td></td>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="aGallery" name="Gallery" checked>
                                            <label class="custom-control-label" for="aGallery">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="nGallery" name="Gallery">
                                            <label class="custom-control-label" for="nGallery">Non Aktif</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RSTV</td>
                                    <td></td>
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="aRstv" name="Rstv" checked>
                                            <label class="custom-control-label" for="aRstv">Aktif</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="nRstv" name="Rstv">
                                            <label class="custom-control-label" for="nRstv">Non Aktif</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Template</td>
                                    <td>Desain 2</td>
                                    <td>
                                        <select name="dTemplate" id="dTemplate" class="form-control">
                                            <option value="1">Desain 1</option>
                                            <option value="2">Desain 2</option>
                                            <option value="3">Desain 3</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12"><button class="btn btn-primary">Ubah Settingan</button></div>
                    </div>
                    <div id="Ucapan" role="tabpanel" class="tab-pane fade">
                        <div class="col-md-12"><h3>Ucapan</h3></div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12"><button class="btn btn-primary">Buat Password RSTV</button></div>
                    </div>
                    <div id="Note" role="tabpanel" class="tab-pane fade">
                        <div class="col-md-12"><h3>Note</h3></div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">
                            <textarea name="note" id="note" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12"><button class="btn btn-primary">Simpan</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function editForm(formTab){
    var x = document.getElementById("fEdit"+formTab);
    if (x.style.display === 'none') {
        document.getElementById("bEdit"+formTab).className  = "bEdit"+formTab+" btn btn-danger pull-right";
        document.getElementById("bEdit"+formTab).innerHTML = "Batal Edit "+formTab;
        x.style.display = 'block';
    } else {
        document.getElementById("bEdit"+formTab).className  = "bEdit"+formTab+" btn btn-primary pull-right";
        document.getElementById("bEdit"+formTab).innerHTML = "Edit "+formTab;
        x.style.display = 'none';
    }
}
</script>