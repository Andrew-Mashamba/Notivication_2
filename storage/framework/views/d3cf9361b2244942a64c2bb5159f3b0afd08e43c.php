<div>

    <style>
        .app-color{
            color:#DD0035;
        }
        .app-bg-color{
            background: #DD0035;
        }
        .app-bg-hover{
            background: #DD0035;
        }
        .onhover :hover{
            text-decoration-color: whitesmoke;
        }
    </style>

    <div class="gradient-6">
        <!-- Sidebar backdrop (mobile only) -->
        <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200 "
            :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'"
            aria-hidden="true"
            x-cloak
        ></div>
        <!-- Sidebar -->
        <div
            id="sidebar"
            class=" flex flex-col absolute z-40 left-0 top-0 lg:static
            lg:left-auto lg:top-auto lg:translate-x-0 h-screen
            overflow-y-scroll lg:overflow-y-auto no-scrollbar
            w-74 lg:w-30 lg:sidebar-expanded:!w-74 2xl:!w-74
            shrink-0 bg-whitex p-4 transition-all duration-200 ease-in-out border-r-2 border-gray-100"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'"
            @click.outside="sidebarOpen = false"
            @keydown.escape.window="sidebarOpen = false"
            x-cloak="lg">
            <!-- Sidebar header -->
            <div class="flex justify-between items-center pr-3 sm:px-2 items-center pr-3 sm:px-2 ">
                <!-- Close button -->
                <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                    </svg>
                </button>
                <!-- Logo-->
                <a class="block w-full  flex items-center mb-4" href="<?php echo e(route('System')); ?>">
                    <img class="m-auto" src="<?php echo e(asset('/absa.png')); ?>"
                         height="20" width="200" alt="logo" />
                </a>


            </div>
            <hr class="mt-2 mb-2 border-b-1 border-red-400">
            <!-- Links -->
            <div class="space-y-8">
                <!-- Pages group -->
                <div>
                    <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                        <span class="lg:hidden lg:sidebar-expanded:block 2xl:block"></span>
                    </h3>
                    <ul class="mt-3">
                        <!-- Dashboard -->
                        <li id="reloadAll" class="px-3 py-2  onhover   rounded-3xl mb-2 <?php if($this->tab_id == 0): ?> app-bg-color text-white  hover:text-white <?php else: ?>  <?php endif; ?> cursor-pointer "  onmouseover="this.style.backgroundColor='#DD0035'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
                                <div wire:click="menuItemClicked(0)" wire:loading.attr="disabled"  class="flex items-center justify-between block text-slate-200 hover:text-white truncate transition duration-150">
                                    <div class="flex items-center">
                                        <div wire:loading wire:target="menuItemClicked(0)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 spin">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                            </svg>
                                        </div>
                                        <div wire:loading.remove wire:target="menuItemClicked(0)">
                                        <svg class="shrink-0 w-6 h-6 " viewBox="0 0 24 24">
                                            <path class="fill-current <?php if($this->tab_id == 0): ?> <?php echo e('text-white-200'); ?><?php else: ?><?php echo e('text-gray-100'); ?><?php endif; ?>" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                            <path class="fill-current <?php if($this->tab_id == 0): ?><?php echo e('text-red-800'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                            <path class="fill-current <?php if($this->tab_id == 0): ?><?php echo e('text-white-200'); ?><?php else: ?><?php echo e('text-gray-100'); ?><?php endif; ?>" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                        </svg>
                                        </div>
                                        <span class="text-sm hover:text-white  <?php if($this->tab_id == 0): ?> text-white font-bold  <?php else: ?>  text-red-800 font-semibold   <?php endif; ?>  ml-3 ">Dashboard</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    </div>
                                </div>
                        </li>

                        <?php $__currentLoopData = $this->menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item == 0 || $item == 5 || $item == 10 || $item == 11 || $item == 14 || $item == 16  ): ?>
                                <?php continue; ?>
                            <?php endif; ?>

                            <li  class="px-3 py-2 rounded-3xl mb-2 last:mb-0 <?php if($this->tab_id == $item): ?> app-bg-color text-white  hover:text-white <?php else: ?>  <?php endif; ?> cursor-pointer " onmouseover="this.style.backgroundColor='#bfdbfe'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';" >
                                <div wire:click="menuItemClicked(<?php echo e($item); ?>)" wire:loading.attr="disabled" class="flex items-center justify-between text-slate-200 hover:text-white truncate transition duration-150">
                                    <div class="flex items-center">
                                        <div wire:loading wire:target="menuItemClicked(<?php echo e($item); ?>)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 spin">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                            </svg>
                                        </div>

                                        <div wire:loading.remove wire:target="menuItemClicked(<?php echo e($item); ?>)" class="hover:text-white">



                                        <?php if($item == "1" ): ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#DD0035" stroke-width="2">
                                                    <path class="<?php if($this->tab_id == $item): ?> <?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800 hover:text-white'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                                </svg>

                                        <?php endif; ?>

                                        <?php if($item == "2" ): ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 " fill="none" viewBox="0 0 24 24" stroke="#DD0035" stroke-width="2">
                                                    <?php if($this->tab_id == $item): ?>
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                                    <?php else: ?>
                                                    <path class="text-red-800" stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                                    <?php endif; ?>
                                                </svg>


                                            <?php endif; ?>

                                        <?php if($item == "3" ): ?>


                                                 <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 stroke-gray-400" width="24" height="24" fill="white" viewBox="0 0 24 24" stroke="#DD0035" stroke-width="2">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-600'); ?><?php endif; ?>"  d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path>
                                                </svg>

                                            <?php endif; ?>
                                        <?php if($item == "4" ): ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" class="w-6 h-6 mr-2 ">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                </svg>


                                            <?php endif; ?>

                                        <?php if($item == "5" ): ?>


                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" class="w-6 h-6 mr-2 ">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                </svg>



                                            <?php endif; ?>

                                        <?php if($item == "6" ): ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" class="w-6 h-6 mr-2 ">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                                                </svg>


                                            <?php endif; ?>
                                        <?php if($item == "7" ): ?>


                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" class="w-6 h-6 mr-2">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>



                                            <?php endif; ?>

                                        <?php if($item == "8" ): ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" class="w-6 h-6 mr-2 ">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                </svg>


                                            <?php endif; ?>

                                             <?php if($item == "9" ): ?>


                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" class="w-6 h-6 mr-2">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                </svg>



                                            <?php endif; ?>

                                             <?php if($item == "10" ): ?>


                                                <svg data-slot="icon" class="w-6 h-6 mr-2 " fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"></path>
                                                </svg>

                                            <?php endif; ?>

                                             <?php if($item == "11" ): ?>

                                                <svg data-slot="icon" class="w-6 h-6 mr-2 "  fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z"></path>
                                                </svg>
                                            <?php endif; ?>

                                             <?php if($item == "12" ): ?>

                                                <svg data-slot="icon" class="w-6 h-6 mr-2 "  fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
                                                </svg>

                                            <?php endif; ?>
                                             <?php if($item == "13" ): ?>

                                                <svg class="w-6 h-6 mr-2 "  data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"></path>
                                                </svg>

                                            <?php endif; ?>

                                            <?php if($item == "14"): ?>
                                                <svg class="w-6 h-6 mr-2 " data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z"></path>
                                                </svg>
                                            <?php endif; ?>

                                            <?php if($item == "15"): ?>

                                                <svg class="w-6 h-6 mr-2 " data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3"></path>
                                                </svg>
                                            <?php endif; ?>

                                            <?php if($item == "16"): ?>

                                                <svg class="w-6 h-6 mr-2 " data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-red-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819"></path>
                                                </svg>
                                            <?php endif; ?>

                                            <?php if($item == "17"): ?>

                                                <svg class="w-6 h-6 mr-2 " data-slot="icon" fill="none" stroke-width="1.5" stroke="#F26F20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path class="<?php if($this->tab_id == $item): ?><?php echo e('text-white-500'); ?><?php else: ?><?php echo e('text-blue-800'); ?><?php endif; ?>" stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"></path>
                                                </svg>


                                            <?php endif; ?>





                                        </div>
                                        <span class="text-sm   <?php if($this->tab_id == $item): ?> text-white font-bold  <?php else: ?>  text-red-800 font-semibold  <?php endif; ?> ml-3  "  ><?php echo e(\App\Models\menus::where('id', $item)->first()->menu_name); ?></span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">

                                    </div>
                                </div>


                            </li>

                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </ul>
                </div>

            </div>

            <!-- Expand / collapse button -->
            <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
                <div class="px-3 py-2">
                    <button @click="sidebarExpanded = !sidebarExpanded">
                        <span class="sr-only">Expand / collapse sidebar</span>
                        <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                            <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                            <path class="text-slate-600" d="M3 23H1V1h2z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>
<?php /**PATH /var/www/html/Notivication_2/resources/views/livewire/sidebar/sidebar.blade.php ENDPATH**/ ?>