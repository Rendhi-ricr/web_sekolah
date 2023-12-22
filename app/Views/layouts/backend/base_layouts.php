<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> &mdash; Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.8/r-2.5.0/sb-1.6.0/sp-2.2.0/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/admin_style.css') ?>">
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar -->
        <?= $this->include('layouts/backend/includes/sidebar') ?>

        <!-- Navbar -->
        <?= $this->include('layouts/backend/includes/navvbar') ?>

        <!-- Page Content -->
        <?= $this->renderSection('content') ?>

        <!-- footer -->
        <?= $this->include('layouts/backend/includes/footer') ?>

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.8/r-2.5.0/sb-1.6.0/sp-2.2.0/datatables.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {});

            $(document).on('show.bs.collapse', '.collapse', function() {
                console.log('Clicked!');
                $('.show').collapse('hide')
            })

            $('.table').DataTable()
        });
    </script>

</body>

</html>