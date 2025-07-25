<body class="bg-gray-100">
    <!-- Important import files -->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!-- Main Body for Homepage Page -->
    <div id="BodyDiv" class="w-full min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-1/6 bg-white shadow-md">
            <?php
                include "./Inclusions/sidebar.php";
            ?>
        </div>

        <!-- Home Page Contents -->
        <div class="w-5/6 p-8">
            <!-- Dashboard Header -->
            <div class="w-full mb-8 flex flex-col justify-center items-center gap-6">
                <h1 class="text-5xl font-bold text-gray-800">DASHBOARD</h1>
                <p class="text-xl text-gray-600 italic px-20 text-center">
                    "The greatest achievements are not those rushed into existence, but those that waited through failure, endured delay, and matured with time."
                </p>
            </div>

            <!-- Main Dashboard Cards -->
            <div class="grid grid-cols-4 gap-6 mb-8">
                <!-- Material Distribution -->
                <div class="bg-blue-200 hover:bg-blue-300 rounded-lg shadow-lg p-6 flex flex-col items-center gap-3 transition-colors">
                    <img src="./Assets/Icons/orderIcon.png" alt="Distribution" class="w-12 h-12">
                    <h2 class="text-xl font-bold text-gray-800">Material Distribution</h2>
                    <p class="text-lg text-gray-600">Pending Requests: <span class="font-bold text-blue-900">3</span></p>
                    <a href="./Distribution.php" class="text-blue-700 hover:underline text-sm">View Details</a>
                </div>

                <!-- Material Inventory -->
                <div class="bg-green-200 hover:bg-green-300 rounded-lg shadow-lg p-6 flex flex-col items-center gap-3 transition-colors">
                    <img src="./Assets/Icons/partsIcon.png" alt="Inventory" class="w-12 h-12">
                    <h2 class="text-xl font-bold text-gray-800">Material Inventory</h2>
                    <p class="text-lg text-gray-600">Low Stocks: <span class="font-bold text-green-900">5</span></p>
                    <a href="./Inventory.php" class="text-green-700 hover:underline text-sm">View Details</a>
                </div>

                <!-- Material Reservation -->
                <div class="bg-yellow-200 hover:bg-yellow-300 rounded-lg shadow-lg p-6 flex flex-col items-center gap-3 transition-colors">
                    <img src="./Assets/Icons/reserveIcon.png" alt="Reservation" class="w-12 h-12">
                    <h2 class="text-xl font-bold text-gray-800">Material Reservation</h2>
                    <p class="text-lg text-gray-600">Active Reservations: <span class="font-bold text-yellow-900">2</span></p>
                    <a href="./Reservation.php" class="text-yellow-700 hover:underline text-sm">View Details</a>
                </div>

                <!-- Stocks Log -->
                <div class="bg-purple-200 hover:bg-purple-300 rounded-lg shadow-lg p-6 flex flex-col items-center gap-3 transition-colors">
                    <img src="./Assets/Icons/stocksIcon.png" alt="Stocks Log" class="w-12 h-12">
                    <h2 class="text-xl font-bold text-gray-800">Stocks Log</h2>
                    <p class="text-lg text-gray-600">Recent Sales: <span class="font-bold text-purple-900">8</span></p>
                    <a href="./Stocks.php" class="text-purple-700 hover:underline text-sm">View Details</a>
                </div>
            </div>

            <!-- Additional Dashboard Widgets -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Recent Activity -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Activity</h2>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center">
                            <p class="text-gray-600">New stock added: <span class="font-semibold">Breeze Blocks Model N</span></p>
                            <p class="text-sm text-gray-500">2 hours ago</p>
                        </li>
                        <li class="flex justify-between items-center">
                            <p class="text-gray-600">Distribution request approved: <span class="font-semibold">Order #2</span></p>
                            <p class="text-sm text-gray-500">4 hours ago</p>
                        </li>
                        <li class="flex justify-between items-center">
                            <p class="text-gray-600">Reservation created: <span class="font-semibold">Light Steel Frame Type 4</span></p>
                            <p class="text-sm text-gray-500">Yesterday</p>
                        </li>
                    </ul>
                    <a href="#" class="text-blue-600 hover:underline text-sm mt-4 block">View All Activity</a>
                </div>

                <!-- Performance Metrics -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Performance Metrics</h2>
                    <div class="space-y-4">
                        <div>
                            <p class="text-gray-600">Distribution Efficiency</p>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                            <p class="text-sm text-gray-500">85% (Last 30 days)</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Inventory Turnover</p>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-green-600 h-2.5 rounded-full" style="width: 70%"></div>
                            </div>
                            <p class="text-sm text-gray-500">70% (Last 30 days)</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Card -->
            <div class="mt-8 flex justify-center">
                <div class="w-1/4 bg-gray-200 hover:bg-gray-300 rounded-lg shadow-lg p-6 flex flex-col items-center gap-3 transition-colors">
                    <img src="./Assets/Icons/settingsIcon.png" alt="Settings" class="w-12 h-12">
                    <h2 class="text-xl font-bold text-gray-800">Settings</h2>
                    <p class="text-lg text-gray-600">Manage system preferences</p>
                    <a href="#" class="text-gray-700 hover:underline text-sm">Go to Settings</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script import for functionalities -->
    <?php
        // Add any required PHP logic or scripts here
    ?>
</body>