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
} elseif ($_instance->childHasBeenRendered('l526543165-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l526543165-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l526543165-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l526543165-0');
} else {
    $response = \Livewire\Livewire::mount('dashboard.quick-actions', []);
    $html = $response->html();
    $_instance->logRenderedChild('l526543165-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.management', [])->html();
} elseif ($_instance->childHasBeenRendered('l526543165-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l526543165-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l526543165-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l526543165-1');
} else {
    $response = \Livewire\Livewire::mount('dashboard.management', []);
    $html = $response->html();
    $_instance->logRenderedChild('l526543165-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            </div>
        </div>








</div>
<?php /**PATH C:\Apache24\htdocs\notification\resources\views/livewire/dashboard/dashboard.blade.php ENDPATH**/ ?>