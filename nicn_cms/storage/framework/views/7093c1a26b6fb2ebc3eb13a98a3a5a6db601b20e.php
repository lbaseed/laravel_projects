
<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Update Case Information')); ?></div>
                            <div class="card-body">
                                
                                <form method="POST" action="/case/<?php echo e($case->id); ?>/edit">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <?php if(session('success')): ?>
                                        <div class="alert alert-success">
                                            <?php echo e(session('success')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <?php if(session('error')): ?>
                                        <div class="alert alert-danger">
                                            <?php echo e(session('error')); ?>

                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="form-group row">
                                        <label for="division" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Division')); ?></label>
                            
                                        <div class="col-md-6">
                                            <select id="division" type="text" class="form-control <?php $__errorArgs = ['division'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="division" disabled value="<?php echo e($case->division); ?>" required>
                                                <option value="<?php echo e($case->division); ?>"><?php echo e($case->division); ?></option>
                                                <option value="BAU">BAU</option>
                                                <option value="GMB">GMB</option>
                                                <option value="YLA">YLA</option>
                                            </select>
                            
                                            <?php $__errorArgs = ['division'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="case_id" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case ID')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="case_id" type="text" class="form-control <?php $__errorArgs = ['case_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="case_id" disabled value="<?php echo e($case->case_id); ?>" required autocomplete="off" autofocus />
                            
                                            <?php $__errorArgs = ['case_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="case_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Parties Involved')); ?></label>
                            
                                        <div class="col-md-6">
                                            <textarea id="case_name" type="case_name" class="form-control <?php $__errorArgs = ['case_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" disabled name="case_name" value="<?php echo e($case->case_name); ?>" required autocomplete="off"><?php echo e($case->case_name); ?></textarea>
                            
                                            <?php $__errorArgs = ['case_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="case_subject" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Subject')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="case_subject" type="case_subject" class="form-control <?php $__errorArgs = ['case_subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="case_subject" disabled value="<?php echo e($case->case_subject); ?>" required autocomplete="off">
                            
                                            <?php $__errorArgs = ['case_subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="claimant" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Claimant')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="claimant" type="text" class="form-control <?php $__errorArgs = ['claimant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="claimant" disabled value="<?php echo e($case->claimant); ?>" required autocomplete="off">
                            
                                            <?php $__errorArgs = ['claimant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="defendant" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Defendant')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="defendant" type="text" class="form-control <?php $__errorArgs = ['defendant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="defendant" disabled value="<?php echo e($case->defendant); ?>" required autocomplete="off" >
                            
                                            <?php $__errorArgs = ['defendant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="filing_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Filing Date')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="filing_date" type="text" class="form-control <?php $__errorArgs = ['filing_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="filing_date" disabled value="<?php echo e($case->filing_date); ?>" required autocomplete="off">
                            
                                            <?php $__errorArgs = ['filing_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="assignment_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Assignment Date')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="assignment_date" type="text" class="form-control datePicker <?php $__errorArgs = ['assignment_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="assignment_date" value="<?php echo e($case->assignment_date); ?>" required autocomplete="off">
                            
                                            <?php $__errorArgs = ['assignment_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="adjournment" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Adjournment')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="adjournment" type="text" class="form-control <?php $__errorArgs = ['adjournment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="current_stage" value="<?php echo e($case->current_stage); ?>" required autocomplete="off" placeholder="for hearing">
                            
                                            <?php $__errorArgs = ['adjournment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="adjournment_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Case Adjournment Date')); ?></label>
                            
                                        <div class="col-md-6">
                                            <input id="adjournment_date" type="text" class="form-control datePicker <?php $__errorArgs = ['adjournment_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="hearing_date"  value="<?php echo e($case->hearing_date); ?>" required autocomplete="off">
                            
                                            <?php $__errorArgs = ['adjournment_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="comments" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Adjournment Comments')); ?></label>
                            
                                        <div class="col-md-6">
                                            <textarea id="comments" type="comments" class="form-control <?php $__errorArgs = ['comments'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="comments" value="<?php echo e($case->comments); ?>" required autocomplete="off" placeholder="for hearing comments"><?php echo e($case->comments); ?></textarea>
                            
                                            <?php $__errorArgs = ['comments'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-outline-primary">
                                                <?php echo e(__('Update Case')); ?>

                                            </button>

                                            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-secondary ml-5">
                                                <?php echo e(__('Back')); ?>

                                            </a>
                                        </div>
                                        
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>   
</main>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lbase\Documents\GitHub\laravel_projects\nicn_cms\resources\views/editCase.blade.php ENDPATH**/ ?>