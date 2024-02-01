<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <title>OtopilotSolar</title>
    <?php echo $__env->make('admin.component.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('admin.component.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('admin.component.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /mnt/cbaa8a44-147a-4ce3-a95c-72c7dc2b7daa/DoDoSoftec/OtopilotDashboard/resources/views/admin/layout/master.blade.php ENDPATH**/ ?>