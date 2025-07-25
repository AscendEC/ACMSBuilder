<body class="bg-gray-100">
    <!-- Important import files -->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!-- Main Body for Inventory Page -->
    <div id="BodyDiv" class="w-full min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <?php
                include "./Inclusions/sidebar.php";
            ?>
        </div>

        <!-- Material Inventory Content -->
        <div class="w-5/6 p-8">
            <!-- Page Header -->
            <div class="w-full mb-8 flex flex-col justify-center items-center gap-6">
                <h1 class="text-5xl font-bold text-gray-800">Material Inventory</h1>
            </div>

            <!-- Indicators -->
            <div class="flex justify-center gap-6 mb-8">
                <!-- Low Stock Status -->
                <div class="w-1/4 bg-yellow-100 rounded-lg shadow-md p-6 flex items-center justify-between transition-transform hover:scale-105">
                    <div>
                        <p class="text-2xl font-semibold text-gray-700">Low Stock</p>
                        <p class="text-4xl font-bold text-yellow-800">5</p>
                    </div>
                    <img src="./Assets/Icons/lowStockIcon.png" alt="Low Stock Icon" class="w-12 h-12">
                </div>

                <!-- Record an Item -->
                <div class="w-1/4 bg-green-100 rounded-lg shadow-md p-6 flex items-center justify-center gap-3 hover:bg-green-200 transition-colors cursor-pointer" onclick="openAddModal()">
                    <img src="./Assets/Icons/note.png" alt="Note Icon" class="w-8 h-8">
                    <p class="text-xl font-semibold text-gray-700">Record an Item</p>
                </div>
            </div>

            <!-- Inventory Table -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <!-- Search Bar -->
                <div class="mb-6 flex justify-end">
                    <input type="text" id="tableSearch" class="w-80 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 text-gray-700" placeholder="Search inventory...">
                </div>
                <table id="inventoryTable" class="w-full table-auto border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-lg text-gray-600 bg-gray-100">
                            <th class="p-4 text-left">Material ID</th>
                            <th class="p-4 text-left">Name</th>
                            <th class="p-4 text-left">Quantity</th>
                            <th class="p-4 text-left">Item Price</th>
                            <th class="p-4 text-left">Total Price</th>
                            <th class="p-4 text-left">Brand</th>
                            <th class="p-4 text-left">Shop</th>
                            <th class="p-4 text-left">Date Added</th>
                            <th class="p-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row-000101" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">000101</td>
                            <td class="p-4">Breeze Blocks Model A</td>
                            <td class="p-4 font-semibold text-yellow-800">5</td>
                            <td class="p-4 font-semibold">420</td>
                            <td class="p-4 font-semibold">2100</td>
                            <td class="p-4">ACMS</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">2025-06-15</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('000101', 'Breeze Blocks Model A', 5, 420, 2100, 'ACMS', 'Archispex, Ma-a', '2025-06-15')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('000101')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-000102" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">000102</td>
                            <td class="p-4">Breeze Blocks Model B</td>
                            <td class="p-4 font-semibold text-yellow-800">5</td>
                            <td class="p-4 font-semibold">430</td>
                            <td class="p-4 font-semibold">2150</td>
                            <td class="p-4">ACMS</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">2025-06-16</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('000102', 'Breeze Blocks Model B', 5, 430, 2150, 'ACMS', 'Archispex, Ma-a', '2025-06-16')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('000102')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-000114" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">000114</td>
                            <td class="p-4">Breeze Blocks Model N</td>
                            <td class="p-4 font-semibold text-yellow-800">5</td>
                            <td class="p-4 font-semibold">450</td>
                            <td class="p-4 font-semibold">2250</td>
                            <td class="p-4">ACMS</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">2025-06-17</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('000114', 'Breeze Blocks Model N', 5, 450, 2250, 'ACMS', 'Archispex, Ma-a', '2025-06-17')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('000114')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-000126" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">000126</td>
                            <td class="p-4">Breeze Blocks Model Z</td>
                            <td class="p-4 font-semibold text-yellow-800">5</td>
                            <td class="p-4 font-semibold">460</td>
                            <td class="p-4 font-semibold">2300</td>
                            <td class="p-4">ACMS</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">2025-06-18</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('000126', 'Breeze Blocks Model Z', 5, 460, 2300, 'ACMS', 'Archispex, Ma-a', '2025-06-18')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('000126')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-200101" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">200101</td>
                            <td class="p-4">Light Steel Frame Type 1</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">600</td>
                            <td class="p-4 font-semibold">3000</td>
                            <td class="p-4">ACMS</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">2025-06-19</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('200101', 'Light Steel Frame Type 1', 10, 600, 3000, 'ACMS', 'Archispex, Ma-a', '2025-06-19')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('200101')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-200102" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">200102</td>
                            <td class="p-4">Light Steel Frame Type 3</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4 font-semibold">620</td>
                            <td class="p-4 font-semibold">6200</td>
                            <td class="p-4">ACMS</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">2025-06-20</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('200102', 'Light Steel Frame Type 3', 10, 620, 6200, 'ACMS', 'Archispex, Ma-a', '2025-06-20')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('200102')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-200103" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">200103</td>
                            <td class="p-4">Light Steel Frame Type 5</td>
                            <td class="p-4 font-semibold text-blue-800">12</td>
                            <td class="p-4 font-semibold">630</td>
                            <td class="p-4 font-semibold">7560</td>
                            <td class="p-4">ACMS</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">2025-06-21</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('200103', 'Light Steel Frame Type 5', 12, 630, 7560, 'ACMS', 'Archispex, Ma-a', '2025-06-21')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('200103')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-200104" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">200104</td>
                            <td class="p-4">Light Steel Frame Type 7</td>
                            <td class="p-4 font-semibold text-blue-800">15</td>
                            <td class="p-4 font-semibold">650</td>
                            <td class="p-4 font-semibold">9750</td>
                            <td class="p-4">ACMS</td>
                            <td class="p-4">Archispex, Ma-a</td>
                            <td class="p-4">2025-06-22</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('200104', 'Light Steel Frame Type 7', 15, 650, 9750, 'ACMS', 'Archispex, Ma-a', '2025-06-22')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('200104')">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Item Modal -->
    <div id="addModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-50">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Item</h2>
            <form id="addForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Material ID (Numerical)</label>
                    <input type="text" id="addCode" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" pattern="[0-9]+" required title="Material ID must be numerical">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <select id="addName" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Breeze Blocks Model A">Breeze Blocks Model A</option>
                        <option value="Breeze Blocks Model B">Breeze Blocks Model B</option>
                        <option value="Breeze Blocks Model N">Breeze Blocks Model N</option>
                        <option value="Breeze Blocks Model Z">Breeze Blocks Model Z</option>
                        <option value="Light Steel Frame Type 1">Light Steel Frame Type 1</option>
                        <option value="Light Steel Frame Type 3">Light Steel Frame Type 3</option>
                        <option value="Light Steel Frame Type 5">Light Steel Frame Type 5</option>
                        <option value="Light Steel Frame Type 7">Light Steel Frame Type 7</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" id="addQuantity" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Item Price</label>
                    <input type="number" id="addItemPrice" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total Price</label>
                    <input type="number" id="addTotalPrice" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Brand</label>
                    <input type="text" id="addBrand" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Shop</label>
                    <input type="text" id="addShop" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Date Added</label>
                    <input type="date" id="addDate" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="flex justify-end gap-3 mt-6">
                    <button type="button" onclick="closeAddModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Add</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Item Modal -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-50">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Item</h2>
            <form id="editForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Material ID (Numerical)</label>
                    <input type="text" id="editCode" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" pattern="[0-9]+" required title="Material ID must be numerical">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <select id="editName" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Breeze Blocks Model A">Breeze Blocks Model A</option>
                        <option value="Breeze Blocks Model B">Breeze Blocks Model B</option>
                        <option value="Breeze Blocks Model N">Breeze Blocks Model N</option>
                        <option value="Breeze Blocks Model Z">Breeze Blocks Model Z</option>
                        <option value="Light Steel Frame Type 1">Light Steel Frame Type 1</option>
                        <option value="Light Steel Frame Type 3">Light Steel Frame Type 3</option>
                        <option value="Light Steel Frame Type 5">Light Steel Frame Type 5</option>
                        <option value="Light Steel Frame Type 7">Light Steel Frame Type 7</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" id="editQuantity" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Item Price</label>
                    <input type="number" id="editItemPrice" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total Price</label>
                    <input type="number" id="editTotalPrice" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Brand</label>
                    <input type="text" id="editBrand" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Shop</label>
                    <input type="text" id="editShop" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Date Added</label>
                    <input type="date" id="editDate" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="flex justify-end gap-3 mt-6">
                    <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-50">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Confirm Delete</h2>
            <p class="text-gray-600 mb-6">Are you sure you want to delete this record?</p>
            <div class="flex justify-center gap-4">
                <button type="button" onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                <button type="button" onclick="confirmDelete()" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Delete</button>
            </div>
        </div>
    </div>

    <!-- Script for Table and Modals -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const itable = document.querySelector("#inventoryTable");
            const dataTable = new simpleDatatables.DataTable(itable, {
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

        let currentEditRowId = null;
        let currentDeleteRowId = null;

        // Add Modal
        function openAddModal() {
            document.getElementById('addModal').classList.remove('hidden');
        }
        function closeAddModal() {
            document.getElementById('addModal').classList.add('hidden');
            document.getElementById('addForm').reset();
        }
        document.getElementById('addForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const code = document.getElementById('addCode').value;
            const name = document.getElementById('addName').value;
            const quantity = document.getElementById('addQuantity').value;
            const itemPrice = document.getElementById('addItemPrice').value;
            const totalPrice = document.getElementById('addTotalPrice').value;
            const brand = document.getElementById('addBrand').value;
            const shop = document.getElementById('addShop').value;
            const date = document.getElementById('addDate').value;

            const tbody = document.querySelector("#inventoryTable tbody");
            const tr = document.createElement("tr");
            tr.id = `row-${code}`;
            tr.className = "odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors";
            tr.innerHTML = `
                <td class="p-4">${code}</td>
                <td class="p-4">${name}</td>
                <td class="p-4 font-semibold ${quantity <= 5 ? 'text-yellow-800' : 'text-blue-800'}">${quantity}</td>
                <td class="p-4 font-semibold">${itemPrice}</td>
                <td class="p-4 font-semibold">${totalPrice}</td>
                <td class="p-4">${brand}</td>
                <td class="p-4">${shop}</td>
                <td class="p-4">${date}</td>
                <td class="p-4">
                    <div class="flex gap-4">
                        <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('${code}', '${name}', ${quantity}, ${itemPrice}, ${totalPrice}, '${brand}', '${shop}', '${date}')">
                        <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('${code}')">
                    </div>
                </td>
            `;
            tbody.appendChild(tr);
            closeAddModal();
        });

        // Edit Modal
        function openEditModal(code, name, quantity, itemPrice, totalPrice, brand, shop, date) {
            currentEditRowId = `row-${code}`;
            document.getElementById('editCode').value = code;
            document.getElementById('editName').value = name;
            document.getElementById('editQuantity').value = quantity;
            document.getElementById('editItemPrice').value = itemPrice;
            document.getElementById('editTotalPrice').value = totalPrice;
            document.getElementById('editBrand').value = brand;
            document.getElementById('editShop').value = shop;
            document.getElementById('editDate').value = date;
            document.getElementById('editModal').classList.remove('hidden');
        }
        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const code = document.getElementById('editCode').value;
            const name = document.getElementById('editName').value;
            const quantity = document.getElementById('editQuantity').value;
            const itemPrice = document.getElementById('editItemPrice').value;
            const totalPrice = document.getElementById('editTotalPrice').value;
            const brand = document.getElementById('editBrand').value;
            const shop = document.getElementById('editShop').value;
            const date = document.getElementById('editDate').value;

            const row = document.getElementById(currentEditRowId);
            if (row) {
                row.id = `row-${code}`;
                row.children[0].textContent = code;
                row.children[1].textContent = name;
                row.children[2].textContent = quantity;
                row.children[2].className = `p-4 font-semibold ${quantity <= 5 ? 'text-yellow-800' : 'text-blue-800'}`;
                row.children[3].textContent = itemPrice;
                row.children[4].textContent = totalPrice;
                row.children[5].textContent = brand;
                row.children[6].textContent = shop;
                row.children[7].textContent = date;
                row.children[8].innerHTML = `
                    <div class="flex gap-4">
                        <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('${code}', '${name}', ${quantity}, ${itemPrice}, ${totalPrice}, '${brand}', '${shop}', '${date}')">
                        <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('${code}')">
                    </div>
                `;
            }
            closeEditModal();
        });

        // Delete Modal
        function openDeleteModal(code) {
            currentDeleteRowId = `row-${code}`;
            document.getElementById('deleteModal').classList.remove('hidden');
        }
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }
        function confirmDelete() {
            const row = document.getElementById(currentDeleteRowId);
            if (row) {
                row.remove();
            }
            closeDeleteModal();
        }
    </script>
</body>