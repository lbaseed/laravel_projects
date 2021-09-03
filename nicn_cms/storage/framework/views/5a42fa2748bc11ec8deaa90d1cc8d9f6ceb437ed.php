
<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                            <div class="card-header"><?php echo e(__('Case Profile')); ?>

                                <a href="<?php echo e(url('/cases')); ?>" class="btn btn-outline-secondary ml-5 float-right">
                                    <?php echo e(__('Back')); ?>

                                </a>
                            </div>
                            <div class="card-body p-0">
                            
                                <?php if($case): ?>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        
                                        <tbody>    
                                       
                                            <tr>
                                                <td><b>Division</b></td> <td><?php echo e($case->division); ?></td>
                                            </tr><tr>
                                                <td><b>Case ID</b></td> <td><a href="/case/<?php echo e($case->id); ?>/edit"><b><?php echo e($case->case_id); ?></b></a></td>
                                            </tr><tr> 
                                                <td><b>Parties Involved</b></td> <td><?php echo e($case->case_name); ?></td>
                                            </tr><tr>
                                                <td><b>Case Subject Matter</b></td> <td><?php echo e($case->case_subject); ?></td>
                                            </tr><tr>
                                                <td><b>Claimant</b></td> <td><?php echo e($case->claimant); ?></td>
                                            </tr><tr>
                                                <td><b>Defendant</b></td> <td><?php echo e($case->defendant); ?></td>
                                            </tr><tr>
                                                <td><b>Filing Date</b></td> <td><?php echo e($case->filing_date); ?></td>
                                            </tr><tr>
                                                <td><b>Assignment Date</b></td> <td><?php echo e($case->assignment_date); ?></td>
                                            </tr><tr>
                                                <td><b>Current Stage</b></td> <td><?php echo e($case->current_stage); ?></td>
                                            </tr><tr>
                                                <td><b>Adjournment Date</b></td> <td><?php echo e($case->hearing_date); ?></td>
                                            </tr><tr>
                                                <td><b>Comments</b></td> <td><?php echo e($case->comments); ?></td>
                                            </tr>
                                        
                                        </tbody>
                                        
                                    </table>
                                </div>
                                
                                <?php else: ?>
                                <div class="alert alert-success">
                                    <?php echo e(__('No Record Found')); ?>

                                </div>
                                <?php endif; ?>

                            </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">    

                    <div class="card mt-3">
                            <div class="card-header"><?php echo e(__('Case life Cycle Activities')); ?></div>
                            <div class="card-body">

                                
                            </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>   
</main>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\laravel_projects\nicn_cms\resources\views/viewCase.blade.php ENDPATH**/ ?>