<!DOCTYPE html>
<html>
<head> 
    <link rel="stylesheet" href="/assets/tampilan.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="<?=base_url('assets/image/lgo.jpg')?>" type="image/gif">

</head>
<body style="background:#e2dcc5">
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark fixed-top">
            <a class = "navbar-brand" href="<?php echo base_url('') ?>"><img src="<?php echo base_url('assets/image/ia-logo.svg') ?>" style="height:20px; margin-top: -10px; margin-left: 130px" alt="internet archive"></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button type="button" class="btn btn-dark nav-link" style="border-style: solid; border-width: 1px; border-color: white; color: white; margin-right: 130px">Donate ❤</button>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar-expand-sm" style="margin-top:80px; margin-bottom:15px">
            <a class = "navbar-brand" href="<?php echo base_url('') ?>"><img src="<?php echo base_url('assets/image/openlibrary.svg') ?>" style="height:40px;" alt="openlibrary"></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <span style="cursor:pointer" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Browse
                    </span>
                    <div style="background-color: #e2dcc5" class="dropdown-menu">
                        <a class="dropdown-item" href="#">Science</a>
                        <a class="dropdown-item" href="#">Biographies</a>
                        <a class="dropdown-item" href="#">Textbooks</a>
                        <a class="dropdown-item" href="#">Sci-Fi</a>
                        <a class="dropdown-item" href="#">Romance</a>
                        <a class="dropdown-item" href="#">Fantasy</a>
                        <a class="dropdown-item" href="#">More Subjects</a>
                        <a class="dropdown-item" href="#">Reading List</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <span style="cursor:pointer" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        My Books
                    </span>
                    <div style="background-color: #e2dcc5" class="dropdown-menu">
                        <a class="dropdown-item" href="#">My Loans</a>
                        <a class="dropdown-item" href="#">My Reading Log</a>
                        <a class="dropdown-item" href="#">My Lists</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <span style="cursor:pointer" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        More
                    </span>
                    <div class="dropdown-menu" style="background-color: #e2dcc5">
                        <?php
                    if (($this->session->userdata('email'))!=null){
                        echo "
                        <a class='dropdown-item' href=".base_url('index.php/Cbook/buku/').">Add a Book</a>
                        ";
                    }else{
                        echo "
                        <a class='dropdown-item' href=".base_url('index.php/Cbook/logPage/').">Add a Book</a>
                        ";
                        }
                        ?>
                        <a class="dropdown-item" href="#">Random Book</a>
                        <a class="dropdown-item" href="<?php echo base_url('index.php/Cbook/advance') ?>">Advanced Search</a>
                        <a class="dropdown-item" href="#">Recent Community Edits</a>
                        <a class="dropdown-item" href="#">Developer Center</a>
                        <a class="dropdown-item" href="#">Help & Support</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">All</span>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Title</a>
                        <a class="dropdown-item" href="#">Author</a>
                        <a class="dropdown-item" href="#">Text</a>
                        <a class="dropdown-item" href="#">Subject</a>
                        <a class="dropdown-item" href="#">List</a>
                        <a class="dropdown-item" href="#">Advance</a>
                    </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                </div>    
            </form>
            <ul class="navbar-nav ml-auto">
                <?php
            if (($this->session->userdata('email'))==null){
                echo "
                    <li class='nav-item active'>
                        <a class='nav-link' href=".base_url('index.php/Cbook/logPage/').">Login</a>
                    </li>
                    <li class='nav-item'>
                        <a href=".base_url('index.php/Cbook/sigPage/')."><button type='button' class='btn btn-primary nav-link'>Sign Up</button></a>
                    </li>

                ";
                
            }else{
                echo "
                <li class='nav-item dropdown'>
                    <span <imstyle='cursor:pointer' class='nav-link dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'><img src = ".base_url('assets/image/log.jpg').">
                    </span>
                <div class='dropdown-menu'>
                    <a class = 'dropdown-item' href='#'>My Loans</a>
                    <div class='dropdown-divider'></div>
                    <a class = 'dropdown-item' href='#'>My List</a>
                    <div class='dropdown-divider'></div>
                    <a class = 'dropdown-item' href=''>My Profile</a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='#'>Setting</a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href=".base_url('index.php/user/logOut').">Log Out</a>
                </div>
                </li>
                ";
            }
            ?>
            </ul>
        </nav>
        <div class="card" style="margin-bottom:60px">
            <div align="center" class="card-header" style="height:45px; background-color: #1e4d99; color: white">
                    <span style="font-weight: bold">
                            New Feature:
                    </span>
                    <span>
                            You can now embed Open Library books on your website!
                    </span>
                    <button type="button" class="btn btn-primary" style="height:35px; margin-top:-10px">
                        Learn More
                    </button>
            </div>