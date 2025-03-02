<div class="h-full w-full ">




<?php if(session()->has('message')): ?>
        <div class="alert alert-success bg-blue-100 fw-bold text-center justify-center ">
             <strong>  <?php echo e(session('message')); ?>  </strong>
        </div>
    <?php endif; ?>


    <div class="w-full bg-gray-100 rounded-lg pl-2 pr-2 pt-1 pb-1 ">
                <!-- message container -->
                <div>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.quick-actions', [])->html();
} elseif ($_instance->childHasBeenRendered('l3688164067-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3688164067-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3688164067-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3688164067-0');
} else {
    $response = \Livewire\Livewire::mount('dashboard.quick-actions', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3688164067-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.management', [])->html();
} elseif ($_instance->childHasBeenRendered('l3688164067-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3688164067-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3688164067-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3688164067-1');
} else {
    $response = \Livewire\Livewire::mount('dashboard.management', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3688164067-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            </div>
        </div>








</div>
<?php /**PATH /var/www/html/Notivication_2/resources/views/livewire/dashboard/dashboard.blade.php ENDPATH**/ ?>