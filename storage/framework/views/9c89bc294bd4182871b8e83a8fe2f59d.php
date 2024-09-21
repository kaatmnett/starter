<!doctype html>
<html lang="en">

<?php echo $__env->make('theme.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <!-- Start Navbar Section -->
    <?php echo $__env->make('theme.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Navbar Section -->

    <!-- Start Hero Section -->
    <?php echo $__env->make('theme.partials.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Hero Section -->

    <!-- Start Different Content Section -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- End Different Content Section -->


    <!-- Start Footer Section -->
    <?php echo $__env->make('theme.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Start Footer Section -->

    <!-- Start Script Section -->
    <?php echo $__env->make('theme.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Start Script Section -->



</body>

</html>
<?php /**PATH /Users/yasic/programs/web/starter/resources/views/theme/master.blade.php ENDPATH**/ ?>