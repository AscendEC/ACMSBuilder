<?php $basePath = dirname($_SERVER['SCRIPT_NAME']); ?>
<div class="w-full h-sm py-5 px-5 shadow-md bg-blue-200 flex justify-between sticky top-0">
    <h1 class="text-xl">ACMSBuilders</h1>
    <div class="flex gap-5">
        <div class="relative group flex gap-2 items-center cursor-pointer">
            <img class="w-6 h-6" src="<?php echo $basePath; ?>/Assets/Icons/userIcon.png" alt="UserIcon">
            <h1>USER1</h1>
            <!-- Dropdown -->
            <div class="absolute top-full left-0 mt-2 w-24 bg-white shadow-lg rounded-md py-2 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-opacity">
                <a href="<?php echo $basePath; ?>/logout.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
        <img class="w-6 h-6" src="<?php echo $basePath; ?>/Assets/Icons/notificationIcon.png" alt="NotificationIcon">
    </div>
</div>div>
</div>