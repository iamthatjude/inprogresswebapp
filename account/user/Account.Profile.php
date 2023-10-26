<?php
/**
 * Account.Profile.php -- Profile Page
 */

require_once '../../classes/Database.class.php'; // Database Class
$db = new Database();

$menu = 'account'; // Current Menu-Page
$submenu = 'profile'; // Current Submenu-Page
$pageTitle = 'Account Settings - Profile'; // Page Title

include '../../system/config.sys.php'; // Configurations
include '../../system/constants.sys.php'; // Constants Defined
include 'layout/header.layout.php'; // Header

?>
    <!-- Any Other Javascript/CSS Inlcusion Here -->
    <style></style>
    <script></script>
    <!--// Any Other Javascript/CSS Inlcusion Here -->

</head>
<body class="nav-fixed">
    
    <?php
    include 'layout/topbar.layout.php'; // Topbar
    ?>

    <div id="layoutSidenav">

        <?php
        include 'layout/sidebar.layout.php'; // Sidebar
        ?>

        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                    <div class="container-xl px-4">
                        <div class="page-header-content">
                            <div class="row align-items-center justify-content-between pt-3">
                                <div class="col-auto mb-3">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="user"></i></div>
                                        <?= $pageTitle; ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                
                <!-- Main page content-->
                <div class="container-xl px-4 mt-4">
                    <!-- Account page navigation-->
                    <nav class="nav nav-borders">
                        <a class="nav-link <? if ($submenu=='profile') echo 'active ms-0'; ?>" href="<?= USER_PROFILE; ?>">Profile</a>
                        <a class="nav-link <? if ($submenu=='billing') echo 'active ms-0'; ?>" href="<?= USER_BILLING; ?>">Billing</a>
                        <a class="nav-link <? if ($submenu=='security') echo 'active ms-0'; ?>" href="<?= USER_SECURITY; ?>">Security</a>
                        <a class="nav-link <? if ($submenu=='notifications') echo 'active ms-0'; ?>" href="<?= USER_NOTIFICATIONS; ?>">Notifications</a>
                    </nav>
                    <hr class="mt-0 mb-4" />

                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Profile Picture</div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <img class="img-account-profile rounded-circle mb-2" src="<?= ASSETS_URL; ?>assets/img/illustrations/profiles/profile-1.png" alt="" />
                                    <!-- Profile picture help block-->
                                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                    <!-- Profile picture upload button-->
                                    <button class="btn btn-primary" type="button">Upload new image</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <form>
                                        <!-- Form Group (username)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username" />
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputFirstName">First name</label>
                                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie" />
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLastName">Last name</label>
                                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna" />
                                            </div>
                                        </div>
                                        <!-- Form Row        -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (occupation)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="occupation">Occupation</label>
                                                <input class="form-control" id="occupation" name="occupation" v-model="" type="text" placeholder="Enter your occupation" />
                                            </div>
                                            <!-- Form Group (address)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="address">Address</label>
                                                <input class="form-control" id="address" name="address" v-model="" type="text" placeholder="Enter your address" />
                                            </div>
                                        </div>
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="email">Email address</label>
                                            <input class="form-control" id="email" name="email" v-model="" type="email" placeholder="Enter your email address" />
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (phone number)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="phone">Phone number</label>
                                                <input class="form-control" id="phone" name="phone" v-model="" type="tel" placeholder="Enter your phone number" />
                                            </div>
                                            <!-- Form Group (birthday)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988" />
                                            </div>
                                        </div>
                                        <!-- Save changes button-->
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

    <?php
    include 'layout/footer.layout.php'; // Footer
    ?>

</body>
</html>

<?php
ob_end_flush();
?>
