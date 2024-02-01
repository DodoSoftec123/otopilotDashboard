<?php $__env->startSection('content'); ?>
<section class="dashboard-section body-collapse pay step step-2 step-3 receive-3">
    <div class="overlay pt-120">
        <div class="container-fruid">
            <div class="main-content">
                <div class="head-area d-flex align-items-center justify-content-between">
                    <h4>My Documents</h4>
                    <div class="icon-area">
                        <img src="<?php echo e(asset('assets/images/icon/support-icon.png')); ?>" alt="icon">
                    </div>
                </div>
                <div class="choose-recipient mb-4">
                    <div class="attach-documents">
                        <div class="top-area">
                            <h6>Upload Files</h6>
                            <div class="file-upload">
                                <div class="right-area">
                                    <label class="file">
                                        <input type="file">
                                        <span class="file-custom"></span>
                                        <span class="file-custom2"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-details mb-4">
                    <div class="top-area">
                        <h6>Payment Details</h6>
                        <div class="right">
                            <a href="javascript:void(0)">
                                <i class="fa fa-refresh"></i>
                                Refresh
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table table-hover w-100">
                                    <tr>
                                        <th scope="col">Full Name</th>
                                        <th scope="col" class="text-end">Action</th>
                                    </tr>
                                    <?php for($i = 0; $i < 5; $i++): ?>
                                    <tr>
                                        <th scope="row">
                                            <p>James Potter</p>
                                        </th>
                                        <td class="text-end">
                                            <p>Jul 24</p>
                                        </td>
                                    </tr>
                                    <?php endfor; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area mt-40">
                    <a href="javascript:void(0)">Preview</a>
                    <a href="payment-submitted.html" class="active">Request Payment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/cbaa8a44-147a-4ce3-a95c-72c7dc2b7daa/DoDoSoftec/OtopilotDashboard/resources/views/admin/my-documents.blade.php ENDPATH**/ ?>