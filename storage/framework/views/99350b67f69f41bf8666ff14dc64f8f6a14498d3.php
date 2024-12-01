<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>NOTIFICATIONS CENTER</title>

        <?php echo \Livewire\Livewire::styles(); ?>



        <link rel="stylesheet" href="<?php echo e(asset('assets/css/colors.css')); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/daterangepicker.css')); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/app-117a17d7.css')); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/flowbite.min.css')); ?>" type="text/css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <script src="https://cdn.tailwindcss.com"></script>


        <style>

            body{
                background-image: url(<?php echo e(asset('/mkulima.png')); ?>);
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 1;
            }



        </style>
    </head>
    <body class="font-inter bg-white opacity-0.07 antialiased text-slate-600 h-screen ">


        <div class="  flex w-full  h-full  " style="height: 100%">

                <div class="w-3/4">

                </div>
                <div class="w-1/4 bg-white shadow-md shadow-lg bg-opacity-50 h-full flex items-center justify-center">

                    <div class="text-center ">

                        <div class="">

                            <div class="">

                                <!-- Content -->
                                <div class="">




                                    <div class="text-center">
                                                      <img
                                                        class="mx-auto "
                                                        src="<?php echo e(asset('/absa.png')); ?>"
                                                        height="200" width="200"
                                                        alt="logo" />

                                                        <div class="h-8"></div>

                                                      <h4 class="mb-2 pb-1 text-xl font-semibold flex text-center items-center justify-center">
                                                        NOTIFICATION CENTER
                                                      </h4>
                                        <h4 class="mb-12 pb-1 text-sm text-orange-500 font-semibold flex text-center items-center justify-center">
                                            INTERNAL PORTAL
                                        </h4>
                                    </div>




                                </div>
                            </div>
                        </div>

                        <div class="w-full">
                            <div class="relative mr-6 top-5 left-0 right-0 bottom-0 justify-end items-end rounded-lg" >



                                <div id="xx" class="max-w-sm rounded overflow-hidden  transition-transform transform  hover:scale-105    max-w-sm px-4 py-8 bg-white-900 self-center  " style="margin: 0 auto; width: 400px">

                                    <?php echo e($slot); ?>

                                </div>




                            </div>

                        </div>
                    </div>

                </div>

        </div>


        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\Apache24\htdocs\notification\resources\views/layouts/authentication.blade.php ENDPATH**/ ?>