<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="<?=base_url()?>assets/admin/img/profile.png">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        Hizrian
                        <span class="user-level">Administrator</span>
                        <!-- <span class="caret"></span> -->
                    </span>
                </a>
                <div class="clearfix"></div>

                <!-- <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item <?php if($getView == 'Dashboard'){ echo 'active';} ?>">
                <a href="<?= base_url('Admin/Home/'); ?>">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item <?php if($getView == 'Order'){ echo 'active';} ?>">
                <a href="<?= base_url('Admin/Order/'); ?>">
                    <i class="la la-keyboard-o"></i>
                    <p>Form Order</p>
                </a>
            </li>
        </ul>
    </div>
</div>