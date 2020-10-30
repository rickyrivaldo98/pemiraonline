<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">

        <a class="navbar-brand" href="<?php echo base_url() . 'page/index' ?>">PEMIRA ONLINE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url() . 'page/index' ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <?php if ($this->session->userdata('login') != true) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'page/login' ?>">Login</a>
                    </li>
                <?php else :?>
                <!-- ada masalah di sini rik -> horizontal bar jadi kebuka kalo aku kasih dropdown -->
                    <li class="nav-item">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link" href ="#"> <b>Selamat Datang <?= ($this->session->userdata('nama')) ?></b></a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" style="right: 300px;">
                            <!-- <a href="<?php echo base_url() . 'C_GantiPassword' ?>">
                                <button type="button" tabindex="0" class="dropdown-item">Ganti Password</button>
                            </a> -->
                            <div tabindex="-1" class="dropdown-divider"></div>
                                <a href="#" data-toggle="modal" data-target="#logoutModal">
                                    <button type="button" tabindex="0" class="dropdown-item" color="red">Logout</button>
                                </a>
                        </div>
                    </li>
                    
                <?php endif; ?> 
            </ul>
        </div>
    </div>
</nav>