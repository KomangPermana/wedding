<script src="<?=base_url()?>assets/admin/js/core/jquery.3.2.1.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/core/popper.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/core/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/plugin/chartist/chartist.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/plugin/chart-circle/circles.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/ready.min.js"></script>
<script src="<?=base_url()?>assets/admin/js/demo.js"></script>
<script>
<?php if ($this->session->flashdata('success')) {?>
$.notify({
    title: 'Success',
    message: 'Berhasil Menyimpan Data Agama',
},{
    type: 'success',
    placement: {
        from: "bottom",
        align: "right"
    },
    time: 1000,
});
<?php } else if ($this->session->flashdata('failed')) {?>
    $.notify({
    title: 'Danger',
    message: 'Gagal Menyimpan Data Agama',
},{
    type: 'danger',
    placement: {
        from: "bottom",
        align: "right"
    },
    time: 1000,
});
<?php } ?>
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    $('#dtPemesan').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            { extend: 'copy', className: 'btn btn-primary btn-sm' },
            { 
                extend: 'print', 
                className: 'btn btn-primary btn-sm',
                messageTop: 'Data Pemesanan' 
            },
            { extend: 'excel', className: 'btn btn-primary btn-sm' },
            { extend: 'pdf', className: 'btn btn-primary btn-sm' }
            //'copyHtml5','print','excelHtml5','pdfHtml5'
        ]
    } );

    $('#dtLandingPage').DataTable( {} );
} );
</script>
