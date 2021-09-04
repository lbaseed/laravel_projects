
<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('View All Cases')); ?></div>
                            <div class="card-body">
                            
                                <?php if(count($cases)>0): ?>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Division</th>
                                            </tr>
                                        </thead>
                                        <tbody>    
                                          
                                        <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                            <tr>
                                                <td><?php echo e($loop->index + 1); ?></td>
                                                <td><a href="/case/<?php echo e($case->id); ?>"><b><?php echo e($case->case_id); ?></b></a></td> 
                                                <td><?php echo e($case->case_name); ?></td>
                                                <td><?php echo e($case->case_subject); ?></td>
                                                <td><?php echo e($case->division); ?></td>
                                            </tr>
                                        

                                          
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Division</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <?php else: ?>
                                    
                                <?php endif; ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>   
</main>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\laravel_projects\nicn_cms\resources\views/viewCases.blade.php ENDPATH**/ ?>