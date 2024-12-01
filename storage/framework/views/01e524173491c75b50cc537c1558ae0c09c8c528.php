<div>

    <?php switch($this->menu_id):
        case ('0'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.dashboard', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-0');
} else {
    $response = \Livewire\Livewire::mount('dashboard.dashboard', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
        <?php case ('1'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('branches.branches', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-1');
} else {
    $response = \Livewire\Livewire::mount('branches.branches', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
        <?php case ('2'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('clients.clients', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-2');
} else {
    $response = \Livewire\Livewire::mount('clients.clients', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
        <?php case ('3'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('shares.shares', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-3');
} else {
    $response = \Livewire\Livewire::mount('shares.shares', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
          <?php break; ?>
          <?php case ('4'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('approvals.approvals-processor', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-4');
} else {
    $response = \Livewire\Livewire::mount('approvals.approvals-processor', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
          <?php case ('5'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('offers.offers', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-5')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-5');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-5');
} else {
    $response = \Livewire\Livewire::mount('offers.offers', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
          <?php break; ?>
         <?php case ('6'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('reports.reports', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-6')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-6');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-6');
} else {
    $response = \Livewire\Livewire::mount('reports.reports', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
          <?php break; ?>
          <?php case ('7'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('subscribers.subscribers', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-7')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-7');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-7');
} else {
    $response = \Livewire\Livewire::mount('subscribers.subscribers', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php break; ?>
          <?php case ('8'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('approvals.approvals-processor', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-8')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-8');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-8');
} else {
    $response = \Livewire\Livewire::mount('approvals.approvals-processor', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
          <?php case ('9'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users.users', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-9')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-9');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-9');
} else {
    $response = \Livewire\Livewire::mount('users.users', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
            <?php case ('10'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cm.cm', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-10')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-10');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-10');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-10');
} else {
    $response = \Livewire\Livewire::mount('cm.cm', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-10', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
            <?php case ('11'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('commodities.commodities', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-11')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-11');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-11');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-11');
} else {
    $response = \Livewire\Livewire::mount('commodities.commodities', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-11', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
            <?php case ('12'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('sys-settings.settings', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-12')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-12');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-12');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-12');
} else {
    $response = \Livewire\Livewire::mount('sys-settings.settings', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-12', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
            <?php case ('13'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('reports.reports', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-13')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-13');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-13');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-13');
} else {
    $response = \Livewire\Livewire::mount('reports.reports', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-13', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>

            <?php case ('14'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('branches.branches', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-14')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-14');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-14');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-14');
} else {
    $response = \Livewire\Livewire::mount('branches.branches', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-14', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>

        <?php case ('15'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('services.services', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-15')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-15');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-15');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-15');
} else {
    $response = \Livewire\Livewire::mount('services.services', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-15', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>

            <?php case ('16'): ?>
            <div class="p-4">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('expenses.expense', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-16')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-16');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-16');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-16');
} else {
    $response = \Livewire\Livewire::mount('expenses.expense', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-16', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            </div>
             <?php break; ?>

        <?php case ('17'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notification.notifications', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-17')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-17');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-17');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-17');
} else {
    $response = \Livewire\Livewire::mount('notification.notifications', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-17', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>



           <?php case ('18'): ?>
              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('teller-management.teller', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-18')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-18');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-18');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-18');
} else {
    $response = \Livewire\Livewire::mount('teller-management.teller', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-18', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php break; ?>

        <?php case ('17'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('budget-management.budget', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-19')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-19');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-19');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-19');
} else {
    $response = \Livewire\Livewire::mount('budget-management.budget', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-19', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php break; ?>

           <?php case ('19'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile-setting.profile', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-20')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-20');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-20');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-20');
} else {
    $response = \Livewire\Livewire::mount('profile-setting.profile', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-20', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php break; ?>
        <?php default: ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.dashboard', [])->html();
} elseif ($_instance->childHasBeenRendered('l2129777902-21')) {
    $componentId = $_instance->getRenderedChildComponentId('l2129777902-21');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2129777902-21');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2129777902-21');
} else {
    $response = \Livewire\Livewire::mount('dashboard.dashboard', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2129777902-21', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endswitch; ?>
</div>

<?php /**PATH C:\Apache24\htdocs\notification\resources\views/livewire/system.blade.php ENDPATH**/ ?>