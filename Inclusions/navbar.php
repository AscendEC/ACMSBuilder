<?php $basePath = dirname($_SERVER['SCRIPT_NAME']); ?>
<div class="w-full h-16 py-4 px-6 bg-blue-600 text-white shadow-lg flex justify-between items-center sticky top-0 z-50">
    <!-- Logo -->
    <a href="<?php echo $basePath; ?>/homepage.php" class="flex items-center gap-3">
        <img src="<?php echo $basePath; ?>/Assets/Icons/logo.jpg" alt="ACMSBuilders Logo" class="w-8 h-8">
        <h1 class="text-2xl font-bold">ACMSBuilders</h1>
    </a>

    <!-- Right Side: User and Notifications -->
    <div class="flex items-center gap-6">
        <!-- User Dropdown -->
        <div class="relative group">
            <div class="flex items-center gap-3 cursor-pointer hover:bg-blue-700 rounded-md px-3 py-2 transition-colors duration-200">
                <img src="<?php echo $basePath; ?>/Assets/Icons/userIcon.png" alt="User Icon" class="w-7 h-7">
                <span class="text-lg font-medium">USER1</span>
            </div>
            <!-- Dropdown Menu -->
            <div class="absolute right-0 mt-2 w-48 bg-white text-gray-800 shadow-xl rounded-lg py-2 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-opacity duration-200">
                <a href="<?php echo $basePath; ?>/profile.php" class="block px-4 py-2 text-base hover:bg-gray-100">Profile</a>
                <a href="<?php echo $basePath; ?>/settings.php" class="block px-4 py-2 text-base hover:bg-gray-100">Settings</a>
                <a href="<?php echo $basePath; ?>/index.php" class="block px-4 py-2 text-base hover:bg-red-50 text-red-600">Logout</a>
            </div>
        </div>

        <!-- Notifications -->
        <div class="relative group">
            <div class="flex items-center gap-3 cursor-pointer hover:bg-blue-700 rounded-md px-3 py-2 transition-colors duration-200">
                <img src="<?php echo $basePath; ?>/Assets/Icons/notificationIcon.png" alt="Notification Icon" class="w-7 h-7">
                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-semibold rounded-full w-5 h-5 flex items-center justify-center">3</span>
            </div>
            <!-- Notification Dropdown -->
            <div class="absolute right-0 mt-2 w-64 bg-white text-gray-800 shadow-xl rounded-lg py-2 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-opacity duration-200">
                <div class="px-4 py-2 text-base font-semibold border-b">Notifications</div>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">New distribution request</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Low stock alert: Item XYZ</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Reservation approved</a>
                <a href="#" class="block px-4 py-2 text-sm text-blue-600 hover:bg-gray-100">View All</a>
            </div>
        </div>
    </div>
</div>