<?php require 'login_handler.php'?>
<?php require 'register_handler.php'?>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="sweetalert2.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    <?php if (isset($_SESSION['error'])) { ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?php echo $_SESSION['error']; ?>'
        });
        <?php unset($_SESSION['error']); ?>
    <?php } ?>
    
    <?php if (isset($_SESSION['success'])) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '<?php echo $_SESSION['success']; ?>'
        });
        <?php unset($_SESSION['success']); ?>
    <?php } ?>
});
        </script>
    

    