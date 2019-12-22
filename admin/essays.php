<?php
include_once "includes/admin_header.php";
include_once "includes/admin_sidebar.php";
include_once "includes/admin_topbar.php";

if (!isAdmin($_SESSION['username'])) {
    redirect("index.php");
}
?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">View All Users</h1>

    <div class="row">
        <div class="col-md-12">
            <?php
            // Check source is available
            if (isset($_GET['source'])) {
                $source = $_GET['source'];
            } else {
                $source = "";
            }

            // Include page based condition technique
            switch ($source) {
                case 'add_user':
                    include "includes/add_essay.php";
                    break;
                case 'edit_user':
                    include "includes/edit_essay.php";
                    break;
                default:
                    include "includes/view_all_essays.php";
                    break;
            }
            ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include_once "includes/admin_footer.php"; ?>