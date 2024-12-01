<?php if($enabled): ?>
    
    <?php if($service == 'osm' || $service == 'bing' || $service == 'mapquest'): ?>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin="" type="text/javascript"></script>
        
    <?php endif; ?>
    <script src="<?php echo e(asset(mix('js/index.js', 'vendor/maps'))); ?>" type="text/javascript"></script>
    <?php if($service == 'mapkit'): ?>
        <script src="https://cdn.apple-mapkit.com/mk/5.x.x/mapkit.js" type="text/javascript"></script>
    <?php endif; ?>
    <?php if($service == 'mapquest'): ?>
        <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest-core.js" type="text/javascript"></script>
    <?php endif; ?>
    <?php if($service == 'yandex'): ?>
        <?php if(!empty($key = config('vendor.maps.services.yandex.key'))): ?>
            <script src="https://enterprise.api-maps.yandex.ru/2.1/?lang=en_US&apikey=<?php echo e($key); ?>&onload=onYandexMapsReady" type="text/javascript" async defer></script>
        <?php else: ?>
            <script src="https://api-maps.yandex.ru/2.1/?lang=en_US&onload=onYandexMapsReady" type="text/javascript" async defer></script>
        <?php endif; ?>
    <?php endif; ?>
    <?php if($service == 'google'): ?>
        <script src="https://maps-api-ssl.google.com/maps/api/js?v=3&ie=UTF8&oe=UTF8&key=<?php echo e(config('vendor.maps.services.google.key')); ?>&language=<?php echo e(app()->getLocale()); ?>&callback=onGoogleMapsReady" type="text/javascript" async defer></script>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\Apache24\htdocs\notification\vendor\gonoware\laravel-maps\src/../resources/views/scripts.blade.php ENDPATH**/ ?>