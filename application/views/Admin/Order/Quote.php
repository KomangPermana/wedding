<div class="col-md-6"><h3>Quote</h3></div>
<div class="col-md-6"><button id="bEditQuote" class="bEditQuote btn btn-primary pull-right" onclick="editForm('Quote');">Edit Quote</button></div>
<div id="fEditQuote" class="fEditQuote col-md-12" style="display:none;">
    <form action="" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Judul Quote</td>
                    <td><input type="text" id="jQuote" name="jQuote" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanQuote" class="simpanQuote btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div class="col-md-12">
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <td>Judul Quote</td>
                <td>Story</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-6"><h3>Story Pasangan</h3></div>
<div class="col-md-6"><button id="bEditStory" class="bEditStory btn btn-primary pull-right" onclick="editForm('Story');">Edit Story</button></div>
<div id="fEditStory" class="fEditStory col-md-12" style="display:none;">
    <form action="" method="POST">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Kecil</td>
                    <td><input type="text" id="kecil" name="kecil" class="form-control"></td>
                </tr>
                <tr>
                    <td>Keterangan Story</td>
                    <td><input type="text" id="keteranganStory" name="keteranganStory" class="form-control"></td>
                </tr>
                <tr>
                    <td>Story</td>
                    <td><input type="text" id="story" name="story" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="simpanStory" class="simpanStory btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div class="col-md-12">
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <td>Kecil</td>
                <td></td>
            </tr>
            <tr>
                <td>Keterangan Story</td>
                <td></td>
            </tr>
            <tr>
                <td>Story</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12"><h3>Tambah Story</h3></div>
<div class="col-md-12">
    <label class="form-label">Kecil</label>
    <input type="text" name="kecil" class="form-control">
</div>
<div class="col-md-12">
    <label class="form-label">Keterangan Story</label>
    <input type="text" name="ketStory" class="form-control">
</div>
<div class="col-md-12">
    <label class="form-label">Story</label>
    <textarea class="form-control" name="story" id="story"></textarea>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">
    <button class="btn btn-primary">Simpan</button>
</div>