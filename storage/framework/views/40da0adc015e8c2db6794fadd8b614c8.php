<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container my-5">

        
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i> <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="text-center mb-5">
            <h1 class="fw-bold">Contact Us</h1>
            <p class="text-muted">We are here to discuss business inquiries and work together to achieve your goals.</p>
        </div>

        <div class="row">
            
            <div class="col-lg-5 mb-4">
                <div class="card border-0 shadow-sm bg-primary text-white h-100">
                    <div class="card-body p-5">
                        <h3 class="mb-4">Get In Touch</h3>

                        <div class="mb-4">
                            <h5><i class="fas fa-map-marker-alt me-2"></i> Address</h5>
                            <p>Plot no. 10, Street no. N5<br>RIE-5956, Rawat<br>Islamabad, Pakistan</p>
                        </div>

                        <div class="mb-4">
                            <h5><i class="fas fa-phone me-2"></i> Phone</h5>
                            <p>+92 305-5408278</p>
                        </div>

                        <div class="mb-4">
                            <h5><i class="fas fa-envelope me-2"></i> Email</h5>
                            <p>ssindustriespharma@gmail.com</p>
                        </div>

                        <div class="mt-4">
                            <small>Chairperson: Dr. Jabeen Amin</small>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm p-5">
                    <h3 class="mb-4 text-primary">Send us a Message</h3>

                    
                    <form action="<?php echo e(route('contact.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?> 

                        <div class="row g-3">

                            
                            <div class="col-md-6">
                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                <input type="text"
                                       name="name"
                                       class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       placeholder="Ali Hamza"
                                       value="<?php echo e(old('name')); ?>"
                                       required>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger small mt-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text"
                                       name="phone"
                                       class="form-control"
                                       placeholder="+92..."
                                       value="<?php echo e(old('phone')); ?>">
                            </div>

                            
                            <div class="col-12">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email"
                                       name="email"
                                       class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       placeholder="name@example.com"
                                       value="<?php echo e(old('email')); ?>"
                                       required>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger small mt-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            
                            <div class="col-12">
                                <label class="form-label">Message <span class="text-danger">*</span></label>
                                <textarea name="message"
                                          class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                          rows="5"
                                          placeholder="How can we help you?"
                                          required><?php echo e(old('message')); ?></textarea>
                                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger small mt-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5 py-2">Send Message</button>
                            </div>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ss-industries/resources/views/contact.blade.php ENDPATH**/ ?>