<?php $__env->startSection('content'); ?>
    <section class="dashboard-section body-collapse transactions recipients">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="head-area">
                    <div class="row">
                        <div class="col">
                            <h4>Team Members</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="transactions-main">
                            <div class="filters-item d-flex justify-content-lg-between">
                                <div class="single-item search-area">
                                    <form action="#" class="flex-fill">
                                        <div class="form-group d-flex align-items-center">
                                            <img src="<?php echo e(asset('assets/images/icon/search.png')); ?>" alt="icon">
                                            <input type="text" placeholder="Type to search...">
                                        </div>
                                    </form>
                                </div>
                                <div class="right-area w-100 d-flex align-items-center">
                                    <div class="single-item">
                                        <select>
                                            <option value="1">Sort by: A-Z</option>
                                            <option value="2">Sort by: A-Z</option>
                                            <option value="3">Sort by: A-Z</option>
                                        </select>
                                    </div>
                                    <div class="single-item">
                                        <select>
                                            <option>Show Record</option>
                                            <option value="1">10</option>
                                            <option value="2">25</option>
                                            <option value="3">50</option>
                                            <option value="4">100</option>
                                        </select>
                                    </div>
                                    <div class="single-item">
                                        <button data-bs-toggle="modal" data-bs-target="#recipientsMod">
                                            <i class="icon-e-plus"></i>
                                            Add Member
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="top-items">
                                <h6>Team Members List</h6>
                                <div class="export-area">
                                    <ul class="d-flex align-items-center">
                                        <li><a href="javascript:void(0)"><img
                                                    src="<?php echo e(asset('assets/images/icon/printer.png')); ?>"
                                                    alt="icon">Print</a></li>
                                        <li><a href="javascript:void(0)"><img
                                                    src="<?php echo e(asset('assets/images/icon/excel.png')); ?>"
                                                    alt="icon">Excel</a></li>
                                        <li><a href="javascript:void(0)"><img
                                                    src="<?php echo e(asset('assets/images/icon/pdf.png')); ?>" alt="icon">PDF</a>
                                        </li>
                                        <li><a href="javascript:void(0)"><img
                                                    src="<?php echo e(asset('assets/images/icon/csv.png')); ?>" alt="icon">CSV</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i = 0; $i < 5; $i++): ?>
                                        <tr>
                                            <th scope="row">
                                                <p>James Potter</p>
                                            </th>
                                            <td>
                                                <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endfor; ?>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation" class="d-flex justify-content-center mt-40">
                                <ul class="pagination justify-content-center align-items-center mb-40">
                                    <li class="page-item">
                                        <a class="page-link previous" href="javascript:void(0)" aria-label="Previous">
                                            <i class="fa-solid fa-angles-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link previous" href="javascript:void(0)" aria-label="Previous">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                    <li class="page-item"><a class="page-link active" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">...</a></li>
                                    <li class="page-item">
                                        <a class="page-link next" href="javascript:void(0)" aria-label="Next">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link next" href="javascript:void(0)" aria-label="Next">
                                            <i class="fa-solid fa-angles-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/cbaa8a44-147a-4ce3-a95c-72c7dc2b7daa/DoDoSoftec/OtopilotDashboard/resources/views/admin/team-members.blade.php ENDPATH**/ ?>