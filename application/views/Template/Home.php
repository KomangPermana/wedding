<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/template/1/img/icon.png" />
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/template/1/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Template 2</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- css disini bosssss -->
    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url()?>assets/template/1/bootstrap4/css/bootstrap.min.css" rel="stylesheet" />

    <!-- js disini bossssss -->
    <!--   Core JS Files   -->
    <script src="<?=base_url()?>assets/template/1/jquery/jquery-3-5-1.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/template/1/bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
    
    <style>
        .cover{
            display:none;
        }
        .cover1{
            display:block;
        }
        body{
            background: url('<?=base_url()?>assets/template/1/img/template2/background.jpg');
        }
        .image-top{
            margin:-50px 0px;
        }
        .image-innertop{
            margin-top:-60px;
            width: 65%;
        }
        .image-innerbottom{
            margin-bottom:-60px;
            width: 65%;
        }

        .img-circle{
            border-radius:50%;
            border:solid 5px #b8a377;
            width: 200px;
            height: 200px;
            margin-top: 25px;
        }
        .image-kiri{
            height: 90%;
            position: absolute;
            left: -100px;
            top: 40px;
            width: auto;
        }
        .image-kanan{
            height: 90%;
            position: absolute;
            right: -100px;
            top: 40px;
            width: auto;
        }

        .content{
            border-radius:30px;
            padding:50px 150px;
            color:#FFFFFF;
            border:solid 3px #b8a377;
        }
        .cover{
            padding:90px 160px;
            position: relative;
        }
        .corner-right{
            position: absolute;
            right: 0px;
            top: 0px;
            width: 35%;
        }
        .corner-left{
            position: absolute;
            left: 0px;
            bottom: 0;
            width: 35%;
        }
        .parent{
            /* background: url('assets/img/template2/background.jpg'); */
        }
        div.sticky {
            position: fixed;
            width: 100%;
            height: auto;
            bottom: 0px;
            background: #b8a377;
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;
        } 
        .menu-bottom{
            width: 20%;
            padding-top:15px;
            /* display: inline-block; */
            float: left;
            text-align: center;
            cursor: pointer;
        }
        .menu-bottom:hover{
            opacity:0.5;
            background: #a58a51;
        }
        
        .menu-bottom img{
            width:10%;
            height: auto;
        }

        .box1{
            background: #b8a377;
            border-radius: 10px;
            padding: 10px;
        }
        .waktu{
            padding: 5px;
            background-color: #b8a377;
            border-radius: 5px;
            width: fit-content;
            display: inline-block;
        }

        .form-control {
            border-radius: 15px;
        }
        .card-body {
            padding: 3px;
            color: black;
            text-align: left;
        }
        .div-komentar{
            border-top: 1px solid #FFFFFF;
        }
        /* For mobile phones: */
        @media only screen and (max-width: 768px) {
            .cover{
                padding:30px;
            }
            .content{
                padding:20px;
            }
            .col-xs-3{
                width: 20%;
            }
            .col-xs-6{
                width: 60%;
            }
            .image-kiri{
                height: 100%;
                width: 175px;
                top: -15px;
            }
            .image-kanan{
                height: 100%;
                width: 175px;
                top: -15px;
            }
            .image-innertop{
                margin-top:0px;
                width: 80%;
            }
            .image-innerbottom{
                margin-bottom:0px;
                width: 80%;
            }
            .menu-bottom img{
                width:50%;
                height: auto;
            }
        }
    </style>

</head>

<body>
    <div class="cover cover1">
        <div class="row content">
            <div class="col-md-8 offset-md-2 text-center">
                <img class="img-responsive" width="100%" src="<?=base_url()?>assets/template/1/img/template2/ornamen1-top.png" />
                <br/><br/>
                PLEASE JOIN US FOR
                <br/>
                THE MARRIAGE OF
                <br/>
                <br/>
                <?= $Home->Nama_Panggilan_1 ?>
                <br/>
                DAN
                <br/>
                <?= $Home->Nama_Panggilan_2 ?>
                <br/>
                <br/>
                <button class="btn btn-warning">SAVE THE DATE</button>
                <br/><br/>
                <?= $Home->Tanggal_Home ?>
                <br/>
                <?= $Home->Alamat_Home ?>
                <img class="img-responsive" width="100%" src="<?=base_url()?>assets/template/1/img/template2/ornament2-botton.png" />
            </div>
        </div>
    </div>
    <div class="cover cover2">
        <div class="row content">
            <img class="corner-right" src="<?=base_url()?>assets/template/1/img/template4/ornamen-border-top-kanan.png" />
            <img class="corner-left" src="<?=base_url()?>assets/template/1/img/template4/ornamen-border-botton-kiri.png" />
            <div class="col-md-12 text-center">
                <br/>
                <?= $Agama->Couple1 ?>
                <br/>
                <?= $Agama->Couple2 ?>
                <br/>
                <?= $Agama->Couple3 ?>
                <br/><br/>
            </div>
            <div class="col-md-6 text-center">
                <img class="img-circle" width="20%" src="<?=base_url()?>assets/template/1/img/template2/circle.jpg" />
                <br/>
                <?= $Couple->Nama1." ".$Couple->Gelar1 ?>
                <br/>
                Putra dari <?= $Couple->Ortu1 ?>
            </div>
            <div class="col-md-6 text-center">
                <img class="img-circle" width="20%" src="<?=base_url()?>assets/template/1/img/template2/circle.jpg" />
                <br/>
                <?= $Couple->Nama2." ".$Couple->Gelar2 ?>
                <br/>
                Putra dari <?= $Couple->Ortu2 ?>
                <br/><br/><br/>
            </div>
            
        </div>
    </div>

    <div class="cover cover3">
        <div class="row content">
            <img class="corner-right" src="<?=base_url()?>assets/template/1/img/template4/ornamen-border-top-kanan.png" />
            <img class="corner-left" src="<?=base_url()?>assets/template/1/img/template4/ornamen-border-botton-kiri.png" />
            <div class="col-md-12 text-center">
                <br/>
                <?= $Event->Judul ?>
                <br/>
                <?= $Event->Pembuka ?>
                <br/>
                <img class="img-responsive" width="20%" src="<?=base_url()?>assets/template/1/img/template4/icon2-akad.png" />
                <br/>
                <?= $Akad->Title ?>
                <br/><br/>
                <div class="container box1 text-left">
                    <p><img class="img-responsive" width="5%" src="<?=base_url()?>assets/template/1/img/template4/icon-date.png" /> <?= $Akad->Tanggal ?></p>
                    <p><img class="img-responsive" width="5%" src="<?=base_url()?>assets/template/1/img/template4/icon-time.png" /> PUKUL <?= $Akad->Jam ?> S/D SELESAI</p>
                    <p><img class="img-responsive" width="5%" src="<?=base_url()?>assets/template/1/img/template4/icon-address.png" /> <?= $Akad->Alamat ?> </p>
                </div>
                <br/>
                <img class="img-responsive" width="20%" src="<?=base_url()?>assets/template/1/img/template4/icon1-resepsi.png" />
                <br/>
                <?= $Resepsi->Title ?>
                <br/><br/>
                <div class="container box1 text-left">
                    <p><img class="img-responsive" width="5%" src="<?=base_url()?>assets/template/1/img/template4/icon-date.png" /> <?= $Resepsi->Tanggal ?></p>
                    <p><img class="img-responsive" width="5%" src="<?=base_url()?>assets/template/1/img/template4/icon-time.png" /> PUKUL <?= $Resepsi->Jam ?> S/D SELESAI</p>
                    <p><img class="img-responsive" width="5%" src="<?=base_url()?>assets/template/1/img/template4/icon-address.png" /> <?= $Resepsi->Alamat ?> </p>
                </div>
                <br/>
                WAKTU MENUJU ACARA
                <br/><br/>
                <div id="timer">
                    <div class="waktu" id="hari">

                    </div>
                    <div class="waktu" id="jam"></div>
                    <div class="waktu" id="menit"></div>
                    <div class="waktu" id="detik"></div>
                </div>
                <br/>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="125" id="gmap_canvas" src="<?= $Map->LinkIframe ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:125px;width:100%;}</style><a href="https://google-map-generator.com">google-map-generator.com</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:125px;width:100%;}</style></div></div>
                
                <br/>
                <button class="btn btn-warning"><?= $Map->Tombol ?></button>
                
            </div>
            
        </div>
    </div>

    <div class="cover cover4">
        <div class="row content">
            <div class="col-md-8 offset-md-2 text-center">
                <?= $Gallery->Judul ?>
            </div>
        </div>
    </div>
    
    <div class="cover cover5">
        <div class="row content">
            <div class="col-md-8 offset-md-2 text-center">
                <br/>
                UCAPAN SELAMAT & DOA UNTUK
                <br/>
                ROMEO & JULIET
                <br/>
                    <br/>
                    <div class="form-group">
                        <input type="text" class="form-control" id="namaComment" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="pesanComment" rows="3"></textarea>
                    </div>
                    
                    <button type="submit" onclick="addField()" id="kirimComment" class="btn btn-warning btn-block btn-round form-control">KIRIM</button>
                
                <br/>
                <div class="div-komentar" id="kolomComment">
                    <br/>
                </div>
                
            </div>
        </div>
    </div>
    
    
    <div class="parent">
        <br/><br/><br/><br/>
        <div class="sticky">
            <span class="menu-bottom menu1">
                <img class="img-responsive" src="<?=base_url()?>assets/template/1/img/template2/icon---05.png" />
                <p>HOME</p>
            </span>    
            <span class="menu-bottom menu2">
                <img class="img-responsive" src="<?=base_url()?>assets/template/1/img/template2/icon---06.png" />
                <p>COUPLE</p>
            </span>    
            <span class="menu-bottom menu3">
                <img class="img-responsive" src="<?=base_url()?>assets/template/1/img/template2/icon---07.png" />
                <p>EVENT</p>
            </span>    
            <span class="menu-bottom menu4">
                <img class="img-responsive" src="<?=base_url()?>assets/template/1/img/template2/icon---09.png" />
                <p>GALLERY</p>
            </span>    
            <span class="menu-bottom menu5">
                <img class="img-responsive" src="<?=base_url()?>assets/template/1/img/template2/icon---10.png" />
                <p>STORY</p>
            </span>    
        </div>
    </div>

    

<script>

$(".menu1").on('click', function() {
   $(".cover2, .cover3, .cover4, .cover5").hide();
   $(".cover1").show();
});
$(".menu2").on('click', function() {
   $(".cover1, .cover3, .cover4, .cover5").hide();
   $(".cover2").show();
});
$(".menu3").on('click', function() {
   $(".cover2, .cover1, .cover4, .cover5").hide();
   $(".cover3").show();
});
$(".menu4").on('click', function() {
   $(".cover2, .cover3, .cover1, .cover5").hide();
   $(".cover4").show();
});
$(".menu5").on('click', function() {
   $(".cover2, .cover3, .cover4, .cover1").hide();
   $(".cover5").show();
});


// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2023 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
//   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";
  document.getElementById("hari").innerHTML = days + "<br/> HARI";
  document.getElementById("jam").innerHTML = hours + "<br/> JAM";
  document.getElementById("menit").innerHTML = minutes + "<br/> MENIT";
  document.getElementById("detik").innerHTML = seconds + "<br/> DETIK";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);


function addField() {
    var name = document.getElementById("namaComment").value;
    var pesan = document.getElementById("pesanComment").value;

    document.getElementById("kolomComment").innerHTML = document.getElementById("kolomComment").innerHTML +
        "<br/>" +
        "<div class='card'>" +
            "<div class='card-body'>" +
                name + "<br>" + pesan
            "</div>" +
        "</div>" +
        "<br/>";
    
    document.getElementById("namaComment").value = null;
    document.getElementById("pesanComment").value = null;
}
</script>

</body>
</html>
