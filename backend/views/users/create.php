<?php
require_once 'views/layouts/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php
        require_once 'views/layouts/error.php';
        ?>
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        require_once 'views/layouts/error.php';
        ?>
        <h1>Thêm mới thành viên</h1>
        <form action="" method="post">

        </form>
    </section>
    <!-- /.content -->
</div>

<?php
require_once 'views/layouts/footer.php';
?>
