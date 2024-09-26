<?php $base_url = 'http://'.$_SERVER['HTTP_HOST'].'/admin_api_titosburger'; ?>

<button
    data-mdb-collapse-init
    class="navbar-toggler"
    type="button"
    data-mdb-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation"
>
    <i class="fas fa-bars"></i>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand mt-2 mt-lg-0" href="<?=$base_url?>">
      <h1>Titos Burger</h1>
    </a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link" href="<?=$base_url?>/products/">Products</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=$base_url?>/categories/">Categories</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=$base_url?>/status/">Status</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=$base_url?>/users/">Users</a>
    </li>
    </ul>
</div>
<div class="d-flex align-items-center">
    <div class="dropdown">
        <a
            data-mdb-dropdown-init
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            aria-expanded="false"
        >
            Hi, user!
        </a>
        <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
        >
        <li>
            <a class="dropdown-item" href="#">My profile</a>
        </li>
        <li>
            <a class="dropdown-item" href="#">Settings</a>
        </li>
        <li>
            <a class="dropdown-item" href="#">Logout</a>
        </li>
        </ul>
    </div>
</div>