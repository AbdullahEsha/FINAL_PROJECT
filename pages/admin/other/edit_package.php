<?php
    session_start();
    if(isset($_SESSION['username'])){
        $name = $_SESSION['username'];
        $id = "";
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <script src="../../../assets/js/dashboard_script.js" ></script> -->
    <script src="../../../assets/js/admin/package_script.js" ></script>

    <link rel="stylesheet" href="../../../assets/css/package_style.css">
    <link rel="stylesheet" href="../../../assets/css/adminHome.css">
    <link rel="stylesheet" href="../../../assets/css/bookRooms_style.css">
    <link rel="stylesheet" href="../../../assets/css/employeeList.css">
    <link rel="stylesheet" href="../../../assets/css/foodMenu_style.css">

    <title>Package Edit</title>
</head>
<body onload="editButtonClick(<?=$id;?>)">
    <section class="left-sidebar">
        <div class="dashboard_controller">
            <?php
                include "../include/left_menu.php";
            ?>
        </div>
        <div class="main">
            <div class="rmv-pad scrollable-area">
                <div class="content-area scrollbar title-header-main">
                    <div class="header-row title-header">
                        <div class="textarea">
                            <h4>MANAGE PACKAGE</h4>
                            <p>All Informations are shown bellow.</p>
                        </div>
                        <div class="content-holder">
                            <div class="search-area">
                                <form action="" method="POST" class="form_search">
                                    <p>Search By : </p>
                                    <select name="searchBy" id="searchBy" class="searchBox">
                                        <option value="#"></option>
                                        <option value="Customer">Customer</option>
                                        <option value="Employee">Employee</option>
                                        <option value="Food Item">Food Item</option>
                                    </select>
                                    <div class="search">
                                        <input type="search" name="search_box" id="search_box" class="searchBox" onkeyup="search_data()" >
                                        <input type="submit" value="Search" id="" class="btn_search btn" onclick="showSearchData()">
                                        <div class="search_result" id="search_result">

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <span class="border-span"></span>
                            <div class="profile-settings dropdown">
                                <a class="dropbtn" href="#" id="dropMenu" onclick="dropMenuAction()"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php 
                                    if(isset($name)){
                                        echo $name;
                                    }   
                                ?>
                                </a>
                                <div class="dropdown-content" id="dropContent" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../../../common_pages/profile_details.php">Profile Details</a>
                                    <a class="dropdown-item" href="../../../common_pages/change_password.php">Change Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../../../common_php/logout.php" id="logout">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contentHolder">
                        <div class="form_areaHolder">
                            <form id="form_insert" method="POST" onsubmit="return saveChanges(this)" enctype="multipart/form-data">
                                <div class="form_fieldHolder">
                                    <div class="filed_holder">
                                        <div class="form_update">
                                            <label for="name" class="title">Name</label>
                                            <input type="text" name="nameEdit" id="nameEdit" class="form_field ftp">
                                        </div>
                                        <div class="form_update">
                                            <label for="add_type" class="title">Type</label>
                                            <select name="add_type" id="edit_type" class="form_field ftp">
                                                <option value="None"></option>
                                                <option value="Birthday">Birthday</option>
                                                <option value="Wedding">Wedding</option>
                                                <option value="Dinner">Dinner</option>
                                            </select>
                                        </div>
                                        <div class="form_update">
                                            <label for="price" class="title">Price</label>
                                            <input type="text" name="price_edit" id="price_edit" class="form_field ftp"> 
                                        </div>
                                        <div class="form_update">
                                            <label for="facility_edit" class="title">Facility</label>
                                            <div class="ingrad_check">
                                                <div class="part_ing">
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="25-50 Persons">25-50 Persons
                                                    </label>
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="50-100 Persons">50-100 Persons
                                                    </label>
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="100-150 Persons">100-150 Persons
                                                    </label>
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="150-250 Persons">150-250 Persons
                                                    </label>
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="250-350 Persons">250-350 Persons
                                                    </label>
                                                </div>
                                                <div class="part_ing">
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="Dinner Menu">Dinner Menu
                                                    </label>
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="Launch Menu">Launch Menu
                                                    </label>
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="Stage Decoration">Stage Decoration
                                                    </label>
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="Free Wifi">Free Wifi
                                                    </label>
                                                    <label for="" class="check_label">
                                                        <input type="checkbox" name="facility_edit" value="Roof Top">Roof Top
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_update">
                                            <label for="available" class="title">Availability</label>
                                            <select name="available" id="available" class="form_field ftp">
                                                <option value="1"></option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profileImage_holder">
                                        <h5 id="tit">Package Image</h5>
                                        <img src="" id="package_image" alt="Item Image">
                                        <input type="file" name="package_imageUpload"  accept="image/*" id="package_imageUpload" class="form_field file_ftp" onchange="changeImage()">
                                    </div>
                                </div>
                                <div class="form_update btn_holderArea">
                                    <input type="hidden" name="id" id="id" value="">
                                    <a href="../../../pages/admin/other/package_details.php" class="btn btn-info">Back</a>
                                    <input type="submit" value="Save Changes" name="confirm" class="btn save_btn" >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</body>
</html>
<?php
    }
    else{
        header('location: ../other/login.php');
    }
?>