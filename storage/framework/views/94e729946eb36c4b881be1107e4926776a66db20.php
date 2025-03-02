<header class="sticky top-0 bg-white border-b border-slate-200 z-10 rounded-b-3xl ml-4 mr-4 bg-custom">

    <div class="mx-auto flex justify-between p-4 w-full rounded-b-3xl bg-custom">
        <div class="text-lg font-semibold w-2/5 flex justify-start ">

            <a href="/" class="text-white my-auto">NOTIFICATIONS CENTER</a>
        </div>



        <div class="flex items-center space-x-3 w-3/5 justify-end">



            <div>
                <div class="relative inline-block text-left flex gap-2">

                    <div class="inline-flex justify-center items-center ">
                        <img class="w-8 h-8 rounded-full" src="<?php echo e(asset('images/avatar.png')); ?>" width="32" height="32" alt="<?php echo e(Auth::user()->name); ?>" />
                        <div class="flex items-center truncate mr-4">
                            <span class="truncate ml-2 text-sm text-white font-medium group-hover:text-slate-800"><?php echo e(Auth::user()->name); ?></span>
                        </div>

                        <form method="POST" action="<?php echo e(route('logoutx')); ?>" x-data >
                            <?php echo csrf_field(); ?>

                            <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center "
                               href="<?php echo e(route('logoutx')); ?>"
                               @click.prevent="$root.submit();"
                               @focus="open = true"
                               @focusout="open = false"
                            >
                                <button type="button" class="text-white bg-custom-accent hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full
                                    text-sm p-1.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                    <svg class="w-5 h-5" data-slot="icon" fill="none" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9"></path>
                                    </svg>

                                </button>
                            </a>
                        </form>


                    </div>





                </div>

            </div>


        </div>

    </div>



</header>
<?php /**PATH /var/www/html/Notivication_2/resources/views/components/app/header.blade.php ENDPATH**/ ?>