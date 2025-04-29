<?php if($errors->any()): ?>

    <script>
        <?php $__currentLoopData = $errors->getMessages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            var element = $(document).find('[name="<?php echo e($field); ?>"]').addClass('error-input');
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append('<label class="error"><?php echo e($error[0]); ?></label>')
            } else {
                $(element).after('<label class="error"><?php echo e($error[0]); ?></label>');
            }
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>

<?php endif; ?>

<?php if($message = Session::get('success')): ?>
    <script>
        iziToast.success({

            title: '<?php echo e($message); ?>',

            position: "topRight",

        });
    </script>
<?php endif; ?>

<?php if($message = Session::get('error')): ?>
    <script>
        iziToast.error({

            title: '<?php echo e($message); ?>',

            position: "topRight",

        });
    </script>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/layouts/flash.blade.php ENDPATH**/ ?>