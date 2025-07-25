<body class="bg-gray-100">
    <!-- Important import files -->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!-- Main Body for Stocks Page -->
    <div id="BodyDiv" class="w-full min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <?php
                include "./Inclusions/sidebar.php";
            ?>
        </div>

        <!-- Stock Inventory Log Content -->
        <div class="w-5/6 p-8">
            <!-- Page Header -->
            <div class="w-full mb-8 flex flex-col justify-center items-center gap-6">
                <h1 class="text-5xl font-bold text-gray-800">Stocks Log List</h1>
            </div>

            <!-- Stock Table -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <!-- Search Bar -->
                <div class="mb-6 flex justify-end">
                    <input type="text" id="tableSearch" class="w-80 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 text-gray-700" placeholder="Search stock...">
                </div>
                <table id="stockTable" class="w-full table-auto border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-lg text-gray-600 bg-gray-100">
                            <th class="p-4 text-left">Material ID</th>
                            <th class="p-4 text-left">Name</th>
                            <th class="p-4 text-left">Quantity</th>
                            <th class="p-4 text-left">Item Price</th>
                            <th class="p-4 text-left">Total Price</th>
                            <th class="p-4 text-left">Brand</th>
                            <th class="p-4 text-left">Shop</th>
                            <th class="p-4 text-left">Stock Location</th>
                            <th class="p-4 text-left">Status</th>
                            <th class="p-4 text-left">Date and Time</th>
                            <th class="p-4 text-left">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row-000101-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000101" data-name="Breeze Blocks Model A" data-quantity="20" data-itemprice="150" data-totalprice="3000" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-06-01 08:00:00" data-status="Added" data-distribution-id="000101">
                            <td class="p-4">000101</td>
                            <td class="p-4">Breeze Blocks Model A</td>
                            <td class="p-4 font-semibold text-blue-800">20</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">3000</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-06-01 08:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000101', 'Breeze Blocks Model A', 20, 150, 3000, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-06-01 08:00:00', 'Added', '000101')">
                            </td>
                        </tr>
                        <tr id="row-000101-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000101" data-name="Breeze Blocks Model A" data-quantity="10" data-itemprice="150" data-totalprice="1500" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-06-05 14:00:00" data-status="Released" data-distribution-id="000101">
                            <td class="p-4">000101</td>
                            <td class="p-4">Breeze Blocks Model A</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">1500</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-06-05 14:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000101', 'Breeze Blocks Model A', 10, 150, 1500, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-06-05 14:00:00', 'Released', '000101')">
                            </td>
                        </tr>
                        <tr id="row-200101-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200101" data-name="Light Steel Frame Type 1" data-quantity="18" data-itemprice="500" data-totalprice="9000" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-06-10 09:00:00" data-status="Added" data-distribution-id="200101">
                            <td class="p-4">200101</td>
                            <td class="p-4">Light Steel Frame Type 1</td>
                            <td class="p-4 font-semibold text-blue-800">18</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">9000</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-06-10 09:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200101', 'Light Steel Frame Type 1', 18, 500, 9000, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-06-10 09:00:00', 'Added', '200101')">
                            </td>
                        </tr>
                        <tr id="row-200101-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200101" data-name="Light Steel Frame Type 1" data-quantity="10" data-itemprice="500" data-totalprice="5000" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-06-15 15:00:00" data-status="Released" data-distribution-id="200101">
                            <td class="p-4">200101</td>
                            <td class="p-4">Light Steel Frame Type 1</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">5000</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-06-15 15:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200101', 'Light Steel Frame Type 1', 10, 500, 5000, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-06-15 15:00:00', 'Released', '200101')">
                            </td>
                        </tr>
                        <tr id="row-000103-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000103" data-name="Breeze Blocks Model Z" data-quantity="15" data-itemprice="150" data-totalprice="2250" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="Warehouse 2" data-date-time="2025-06-05 10:00:00" data-status="Added" data-distribution-id="N/A">
                            <td class="p-4">000103</td>
                            <td class="p-4">Breeze Blocks Model Z</td>
                            <td class="p-4 font-semibold text-blue-800">15</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">2250</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">Warehouse 2</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-06-05 10:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000103', 'Breeze Blocks Model Z', 15, 150, 2250, 'BuildRite', 'BuildRite, Davao', 'Warehouse 2', '2025-06-05 10:00:00', 'Added', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000103-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000103" data-name="Breeze Blocks Model Z" data-quantity="10" data-itemprice="150" data-totalprice="1500" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="Warehouse 2" data-date-time="2025-06-10 16:00:00" data-status="Released" data-distribution-id="N/A">
                            <td class="p-4">000103</td>
                            <td class="p-4">Breeze Blocks Model Z</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">1500</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">Warehouse 2</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-06-10 16:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000103', 'Breeze Blocks Model Z', 10, 150, 1500, 'BuildRite', 'BuildRite, Davao', 'Warehouse 2', '2025-06-10 16:00:00', 'Released', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-200104-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200104" data-name="Light Steel Frame Type 5" data-quantity="15" data-itemprice="500" data-totalprice="7500" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="Store B" data-date-time="2025-06-15 08:30:00" data-status="Added" data-distribution-id="200104">
                            <td class="p-4">200104</td>
                            <td class="p-4">Light Steel Frame Type 5</td>
                            <td class="p-4 font-semibold text-blue-800">15</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">7500</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">Store B</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-06-15 08:30:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200104', 'Light Steel Frame Type 5', 15, 500, 7500, 'Archispex', 'Archispex, Ma-a', 'Store B', '2025-06-15 08:30:00', 'Added', '200104')">
                            </td>
                        </tr>
                        <tr id="row-200104-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200104" data-name="Light Steel Frame Type 5" data-quantity="10" data-itemprice="500" data-totalprice="5000" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="Store B" data-date-time="2025-06-20 14:30:00" data-status="Released" data-distribution-id="200104">
                            <td class="p-4">200104</td>
                            <td class="p-4">Light Steel Frame Type 5</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">5000</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">Store B</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-06-20 14:30:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200104', 'Light Steel Frame Type 5', 10, 500, 5000, 'Archispex', 'Archispex, Ma-a', 'Store B', '2025-06-20 14:30:00', 'Released', '200104')">
                            </td>
                        </tr>
                        <tr id="row-000104-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000104" data-name="Breeze Blocks Model B" data-quantity="15" data-itemprice="150" data-totalprice="2250" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="ACMSB Warehouse" data-date-time="2025-06-20 09:00:00" data-status="Added" data-distribution-id="N/A">
                            <td class="p-4">000104</td>
                            <td class="p-4">Breeze Blocks Model B</td>
                            <td class="p-4 font-semibold text-blue-800">15</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">2250</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-06-20 09:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000104', 'Breeze Blocks Model B', 15, 150, 2250, 'BuildRite', 'BuildRite, Davao', 'ACMSB Warehouse', '2025-06-20 09:00:00', 'Added', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000104-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000104" data-name="Breeze Blocks Model B" data-quantity="10" data-itemprice="150" data-totalprice="1500" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="ACMSB Warehouse" data-date-time="2025-06-25 15:00:00" data-status="Released" data-distribution-id="N/A">
                            <td class="p-4">000104</td>
                            <td class="p-4">Breeze Blocks Model B</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">1500</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-06-25 15:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000104', 'Breeze Blocks Model B', 10, 150, 1500, 'BuildRite', 'BuildRite, Davao', 'ACMSB Warehouse', '2025-06-25 15:00:00', 'Released', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000114-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000114" data-name="Breeze Blocks Model N" data-quantity="20" data-itemprice="150" data-totalprice="3000" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-07-15 08:00:00" data-status="Added" data-distribution-id="000114">
                            <td class="p-4">000114</td>
                            <td class="p-4">Breeze Blocks Model N</td>
                            <td class="p-4 font-semibold text-blue-800">20</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">3000</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-07-15 08:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000114', 'Breeze Blocks Model N', 20, 150, 3000, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-07-15 08:00:00', 'Added', '000114')">
                            </td>
                        </tr>
                        <tr id="row-000114-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000114" data-name="Breeze Blocks Model N" data-quantity="10" data-itemprice="150" data-totalprice="1500" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-07-20 14:00:00" data-status="Released" data-distribution-id="000114">
                            <td class="p-4">000114</td>
                            <td class="p-4">Breeze Blocks Model N</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">1500</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-07-20 14:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000114', 'Breeze Blocks Model N', 10, 150, 1500, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-07-20 14:00:00', 'Released', '000114')">
                            </td>
                        </tr>
                        <tr id="row-200103-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200103" data-name="Light Steel Frame Type 3" data-quantity="15" data-itemprice="500" data-totalprice="7500" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-07-20 09:30:00" data-status="Added" data-distribution-id="200103">
                            <td class="p-4">200103</td>
                            <td class="p-4">Light Steel Frame Type 3</td>
                            <td class="p-4 font-semibold text-blue-800">15</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">7500</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-07-20 09:30:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200103', 'Light Steel Frame Type 3', 15, 500, 7500, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-07-20 09:30:00', 'Added', '200103')">
                            </td>
                        </tr>
                        <tr id="row-200103-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200103" data-name="Light Steel Frame Type 3" data-quantity="10" data-itemprice="500" data-totalprice="5000" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-07-25 15:30:00" data-status="Released" data-distribution-id="200103">
                            <td class="p-4">200103</td>
                            <td class="p-4">Light Steel Frame Type 3</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">5000</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-07-25 15:30:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200103', 'Light Steel Frame Type 3', 10, 500, 5000, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-07-25 15:30:00', 'Released', '200103')">
                            </td>
                        </tr>
                        <tr id="row-000105-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000105" data-name="Breeze Blocks Model A" data-quantity="22" data-itemprice="150" data-totalprice="3300" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="Warehouse 2" data-date-time="2025-07-10 10:00:00" data-status="Added" data-distribution-id="N/A">
                            <td class="p-4">000105</td>
                            <td class="p-4">Breeze Blocks Model A</td>
                            <td class="p-4 font-semibold text-blue-800">22</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">3300</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">Warehouse 2</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-07-10 10:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000105', 'Breeze Blocks Model A', 22, 150, 3300, 'BuildRite', 'BuildRite, Davao', 'Warehouse 2', '2025-07-10 10:00:00', 'Added', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000105-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000105" data-name="Breeze Blocks Model A" data-quantity="12" data-itemprice="150" data-totalprice="1800" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="Warehouse 2" data-date-time="2025-07-15 16:00:00" data-status="Released" data-distribution-id="N/A">
                            <td class="p-4">000105</td>
                            <td class="p-4">Breeze Blocks Model A</td>
                            <td class="p-4 font-semibold text-blue-800">12</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">1800</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">Warehouse 2</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-07-15 16:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000105', 'Breeze Blocks Model A', 12, 150, 1800, 'BuildRite', 'BuildRite, Davao', 'Warehouse 2', '2025-07-15 16:00:00', 'Released', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-200105-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200105" data-name="Light Steel Frame Type 7" data-quantity="16" data-itemprice="500" data-totalprice="8000" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="Store B" data-date-time="2025-07-25 08:00:00" data-status="Added" data-distribution-id="N/A">
                            <td class="p-4">200105</td>
                            <td class="p-4">Light Steel Frame Type 7</td>
                            <td class="p-4 font-semibold text-blue-800">16</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">8000</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">Store B</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-07-25 08:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200105', 'Light Steel Frame Type 7', 16, 500, 8000, 'Archispex', 'Archispex, Ma-a', 'Store B', '2025-07-25 08:00:00', 'Added', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-200105-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200105" data-name="Light Steel Frame Type 7" data-quantity="10" data-itemprice="500" data-totalprice="5000" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="Store B" data-date-time="2025-07-30 14:00:00" data-status="Released" data-distribution-id="N/A">
                            <td class="p-4">200105</td>
                            <td class="p-4">Light Steel Frame Type 7</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">5000</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">Store B</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-07-30 14:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200105', 'Light Steel Frame Type 7', 10, 500, 5000, 'Archispex', 'Archispex, Ma-a', 'Store B', '2025-07-30 14:00:00', 'Released', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000106-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000106" data-name="Breeze Blocks Model Z" data-quantity="15" data-itemprice="150" data-totalprice="2250" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="ACMSB Warehouse" data-date-time="2025-07-05 09:00:00" data-status="Added" data-distribution-id="N/A">
                            <td class="p-4">000106</td>
                            <td class="p-4">Breeze Blocks Model Z</td>
                            <td class="p-4 font-semibold text-blue-800">15</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">2250</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-07-05 09:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000106', 'Breeze Blocks Model Z', 15, 150, 2250, 'BuildRite', 'BuildRite, Davao', 'ACMSB Warehouse', '2025-07-05 09:00:00', 'Added', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000106-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000106" data-name="Breeze Blocks Model Z" data-quantity="10" data-itemprice="150" data-totalprice="1500" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="ACMSB Warehouse" data-date-time="2025-07-10 15:00:00" data-status="Released" data-distribution-id="N/A">
                            <td class="p-4">000106</td>
                            <td class="p-4">Breeze Blocks Model Z</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">1500</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-07-10 15:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000106', 'Breeze Blocks Model Z', 10, 150, 1500, 'BuildRite', 'BuildRite, Davao', 'ACMSB Warehouse', '2025-07-10 15:00:00', 'Released', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000102-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000102" data-name="Breeze Blocks Model B" data-quantity="18" data-itemprice="150" data-totalprice="2700" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-08-25 08:30:00" data-status="Added" data-distribution-id="000102">
                            <td class="p-4">000102</td>
                            <td class="p-4">Breeze Blocks Model B</td>
                            <td class="p-4 font-semibold text-blue-800">18</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">2700</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-08-25 08:30:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000102', 'Breeze Blocks Model B', 18, 150, 2700, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-08-25 08:30:00', 'Added', '000102')">
                            </td>
                        </tr>
                        <tr id="row-000102-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000102" data-name="Breeze Blocks Model B" data-quantity="10" data-itemprice="150" data-totalprice="1500" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="ACMSB Warehouse" data-date-time="2025-08-30 14:30:00" data-status="Released" data-distribution-id="000102">
                            <td class="p-4">000102</td>
                            <td class="p-4">Breeze Blocks Model B</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">1500</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-08-30 14:30:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000102', 'Breeze Blocks Model B', 10, 150, 1500, 'Archispex', 'Archispex, Ma-a', 'ACMSB Warehouse', '2025-08-30 14:30:00', 'Released', '000102')">
                            </td>
                        </tr>
                        <tr id="row-000107-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000107" data-name="Breeze Blocks Model N" data-quantity="17" data-itemprice="150" data-totalprice="2550" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="Warehouse 2" data-date-time="2025-08-15 10:00:00" data-status="Added" data-distribution-id="N/A">
                            <td class="p-4">000107</td>
                            <td class="p-4">Breeze Blocks Model N</td>
                            <td class="p-4 font-semibold text-blue-800">17</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">2550</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">Warehouse 2</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-08-15 10:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000107', 'Breeze Blocks Model N', 17, 150, 2550, 'BuildRite', 'BuildRite, Davao', 'Warehouse 2', '2025-08-15 10:00:00', 'Added', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000107-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000107" data-name="Breeze Blocks Model N" data-quantity="10" data-itemprice="150" data-totalprice="1500" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="Warehouse 2" data-date-time="2025-08-20 16:00:00" data-status="Released" data-distribution-id="N/A">
                            <td class="p-4">000107</td>
                            <td class="p-4">Breeze Blocks Model N</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">1500</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">Warehouse 2</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-08-20 16:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000107', 'Breeze Blocks Model N', 10, 150, 1500, 'BuildRite', 'BuildRite, Davao', 'Warehouse 2', '2025-08-20 16:00:00', 'Released', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-200106-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200106" data-name="Light Steel Frame Type 1" data-quantity="15" data-itemprice="500" data-totalprice="7500" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="Store B" data-date-time="2025-08-20 09:00:00" data-status="Added" data-distribution-id="N/A">
                            <td class="p-4">200106</td>
                            <td class="p-4">Light Steel Frame Type 1</td>
                            <td class="p-4 font-semibold text-blue-800">15</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">7500</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">Store B</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-08-20 09:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200106', 'Light Steel Frame Type 1', 15, 500, 7500, 'Archispex', 'Archispex, Ma-a', 'Store B', '2025-08-20 09:00:00', 'Added', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-200106-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="200106" data-name="Light Steel Frame Type 1" data-quantity="10" data-itemprice="500" data-totalprice="5000" data-brand="Archispex" data-shop="Archispex, Ma-a" data-location="Store B" data-date-time="2025-08-25 15:00:00" data-status="Released" data-distribution-id="N/A">
                            <td class="p-4">200106</td>
                            <td class="p-4">Light Steel Frame Type 1</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">500</td>
                            <td class="p-4 font-semibold">5000</td>
                            <td class="p-4">Archispex</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">Store B</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-08-25 15:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('200106', 'Light Steel Frame Type 1', 10, 500, 5000, 'Archispex', 'Archispex, Ma-a', 'Store B', '2025-08-25 15:00:00', 'Released', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000108-added" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000108" data-name="Breeze Blocks Model A" data-quantity="15" data-itemprice="150" data-totalprice="2250" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="ACMSB Warehouse" data-date-time="2025-08-10 08:00:00" data-status="Added" data-distribution-id="N/A">
                            <td class="p-4">000108</td>
                            <td class="p-4">Breeze Blocks Model A</td>
                            <td class="p-4 font-semibold text-blue-800">15</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">2250</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Added</td>
                            <td class="p-4">2025-08-10 08:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000108', 'Breeze Blocks Model A', 15, 150, 2250, 'BuildRite', 'BuildRite, Davao', 'ACMSB Warehouse', '2025-08-10 08:00:00', 'Added', 'N/A')">
                            </td>
                        </tr>
                        <tr id="row-000108-released" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="000108" data-name="Breeze Blocks Model A" data-quantity="10" data-itemprice="150" data-totalprice="1500" data-brand="BuildRite" data-shop="BuildRite, Davao" data-location="ACMSB Warehouse" data-date-time="2025-08-15 14:00:00" data-status="Released" data-distribution-id="N/A">
                            <td class="p-4">000108</td>
                            <td class="p-4">Breeze Blocks Model A</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">150</td>
                            <td class="p-4 font-semibold">1500</td>
                            <td class="p-4">BuildRite</td>
                            <td class="p-4">BuildRite, Davao</td>
                            <td class="p-4">ACMSB Warehouse</td>
                            <td class="p-4">Released</td>
                            <td class="p-4">2025-08-15 14:00:00</td>
                            <td class="p-4">
                                <img src="./Assets/Icons/details.png" alt="details" class="w-6 h-6 cursor-pointer" onclick="openDetailsModal('000108', 'Breeze Blocks Model A', 10, 150, 1500, 'BuildRite', 'BuildRite, Davao', 'ACMSB Warehouse', '2025-08-15 14:00:00', 'Released', 'N/A')">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Details Modal -->
    <div id="detailsModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-50">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Stock Item Details</h2>
            <div class="space-y-4">
                <div>
                    <span class="block text-sm font-medium text-gray-700">Material ID</span>
                    <span id="detailsCode" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Name</span>
                    <span id="detailsName" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Quantity</span>
                    <span id="detailsQuantity" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Item Price</span>
                    <span id="detailsItemPrice" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Total Price</span>
                    <span id="detailsTotalPrice" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Brand</span>
                    <span id="detailsBrand" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Shop</span>
                    <span id="detailsShop" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Stock Location</span>
                    <span id="detailsLocation" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Date and Time</span>
                    <span id="detailsDateTime" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Status</span>
                    <span id="detailsStatus" class="block text-gray-900"></span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">Distribution ID</span>
                    <span id="detailsDistributionId" class="block text-gray-900"></span>
                </div>
                <div class="flex justify-end mt-6">
                    <button type="button" onclick="closeDetailsModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script for Table and Modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dtable = document.querySelector("#stockTable");
            const dataTable = new simpleDatatables.DataTable(dtable, {
                searchable: true,
                sortable: true,
                perPage: 10,
                perPageSelect: [5, 10, 15, 20]
            });

            // Search bar functionality
            const searchInput = document.getElementById('tableSearch');
            searchInput.addEventListener('input', function(e) {
                dataTable.search(e.target.value);
            });
        });

        // Details Modal
        function openDetailsModal(code, name, quantity, itemPrice, totalPrice, brand, shop, location, dateTime, status, distributionId) {
            document.getElementById('detailsCode').textContent = code;
            document.getElementById('detailsName').textContent = name;
            document.getElementById('detailsQuantity').textContent = quantity;
            document.getElementById('detailsItemPrice').textContent = itemPrice;
            document.getElementById('detailsTotalPrice').textContent = totalPrice;
            document.getElementById('detailsBrand').textContent = brand;
            document.getElementById('detailsShop').textContent = shop;
            document.getElementById('detailsLocation').textContent = location;
            document.getElementById('detailsDateTime').textContent = dateTime;
            document.getElementById('detailsStatus').textContent = status;
            document.getElementById('detailsDistributionId').textContent = distributionId;
            document.getElementById('detailsModal').classList.remove('hidden');
        }
        function closeDetailsModal() {
            document.getElementById('detailsModal').classList.add('hidden');
        }
    </script>
</body>