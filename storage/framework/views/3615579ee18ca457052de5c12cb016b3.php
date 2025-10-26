<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <main class="main">
        <?php if (isset($component)) { $__componentOriginal167764ff1c4e1c56c4f5bb97d140fe39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal167764ff1c4e1c56c4f5bb97d140fe39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pages.contact','data' => ['user' => $user,'sosmeds' => $sosmeds]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pages.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'sosmeds' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sosmeds)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal167764ff1c4e1c56c4f5bb97d140fe39)): ?>
<?php $attributes = $__attributesOriginal167764ff1c4e1c56c4f5bb97d140fe39; ?>
<?php unset($__attributesOriginal167764ff1c4e1c56c4f5bb97d140fe39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal167764ff1c4e1c56c4f5bb97d140fe39)): ?>
<?php $component = $__componentOriginal167764ff1c4e1c56c4f5bb97d140fe39; ?>
<?php unset($__componentOriginal167764ff1c4e1c56c4f5bb97d140fe39); ?>
<?php endif; ?>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH D:\project resume\resume\resources\views/contact.blade.php ENDPATH**/ ?>