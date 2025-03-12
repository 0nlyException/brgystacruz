<html>
<head>
    <style>
        
    </style>
</head>
<body>
    <?php if(isset($_SESSION['message'])) : ?>
        <div class="alert-container">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'];  ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
</body>
</html>
