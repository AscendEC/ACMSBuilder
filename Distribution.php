<body class="bg-gray-100">
    <!-- Important import files -->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!-- Main Body for Distribution Page -->
    <div id="BodyDiv" class="w-full min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <?php
                include "./Inclusions/sidebar.php";
            ?>
        </div>

        <!-- Material Distribution Content -->
        <div class="w-5/6 p-8">
            <!-- Page Header -->
            <div class="w-full mb-8 flex flex-col justify-center items-center gap-6">
                <h1 class="text-5xl font-bold text-gray-800">Material Distribution</h1>
            </div>

            <!-- Indicators -->
            <div class="flex justify-center gap-6 mb-8">
                <!-- Pending Status -->
                <div class="w-1/4 bg-blue-100 rounded-lg shadow-md p-6 flex items-center justify-between transition-transform hover:scale-105">
                    <div>
                        <p class="text-2xl font-semibold text-gray-700">Pending Status</p>
                        <p class="text-4xl font-bold text-blue-800">4</p>
                    </div>
                    <img src="./Assets/Icons/pendingIcon.png" alt="Pending Icon" class="w-12 h-12">
                </div>

                <!-- Delivered Status -->
                <div class="w-1/4 bg-green-100 rounded-lg shadow-md p-6 flex items-center justify-between transition-transform hover:scale-105">
                    <div>
                        <p class="text-2xl font-semibold text-gray-700">Delivered Status</p>
                        <p class="text-4xl font-bold text-green-800">4</p>
                    </div>
                    <img src="./Assets/Icons/delivered.png" alt="Delivered Icon" class="w-12 h-12">
                </div>

                <!-- Note an Entry -->
                <div class="w-1/4 bg-green-100 rounded-lg shadow-md p-6 flex items-center justify-center gap-3 hover:bg-green-200 transition-colors cursor-pointer" onclick="openAddModal()">
                    <img src="./Assets/Icons/note.png" alt="Note Icon" class="w-8 h-8">
                    <p class="text-xl font-semibold text-gray-700">Note an Entry</p>
                </div>
            </div>

            <!-- Distribution Table -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <!-- Search Bar -->
                <div class="mb-6 flex justify-end">
                    <input type="text" id="tableSearch" class="w-80 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 text-gray-700" placeholder="Search distribution...">
                </div>
                <table id="distributionTable" class="w-full table-auto border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-lg text-gray-600 bg-gray-100">
                            <th class="p-4 text-left">Material ID</th>
                            <th class="p-4 text-left">Name</th>
                            <th class="p-4 text-left">Quantity</th>
                            <th class="p-4 text-left">Location</th>
                            <th class="p-4 text-left">Distribution Date</th>
                            <th class="p-4 text-left">Status</th>
                            <th class="p-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row-000101" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">000101</td>
                            <td class="p-4">Breeze Blocks Model A</td>
                            <td class="p-4 font-semibold text-yellow-800">5</td>
                            <td class="p-4">St. Ana, SASA, Davao City</td>
                            <td class="p-4">2025-05-05</td>
                            <td class="p-4">Pending</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('000101', 'Breeze Blocks Model A', 5, 'St. Ana, SASA, Davao City', '2025-05-05', 'Pending')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('000101')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-000102" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">000102</td>
                            <td class="p-4">Breeze Blocks Model B</td>
                            <td class="p-4 font-semibold text-yellow-800">5</td>
                            <td class="p-4">St. Ana, SASA, Davao City</td>
                            <td class="p-4">2025-05-06</td>
                            <td class="p-4">Pending</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('000102', 'Breeze Blocks Model B', 5, 'St. Ana, SASA, Davao City', '2025-05-06', 'Pending')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('000102')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-000114" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">000114</td>
                            <td class="p-4">Breeze Blocks Model N</td>
                            <td class="p-4 font-semibold text-yellow-800">5</td>
                            <td class="p-4">St. Ana, SASA, Davao City</td>
                            <td class="p-4">2025-05-07</td>
                            <td class="p-4">Pending</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('000114', 'Breeze Blocks Model N', 5, 'St. Ana, SASA, Davao City', '2025-05-07', 'Pending')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('000114')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-000126" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">000126</td>
                            <td class="p-4">Breeze Blocks Model Z</td>
                            <td class="p-4 font-semibold text-yellow-800">5</td>
                            <td class="p-4">St. Ana, SASA, Davao City</td>
                            <td class="p-4">2025-05-08</td>
                            <td class="p-4">Pending</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('000126', 'Breeze Blocks Model Z', 5, 'St. Ana, SASA, Davao City', '2025-05-08', 'Pending')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('000126')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-200101" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">200101</td>
                            <td class="p-4">Light Steel Frame Type 1</td>
                            <td class="p-4 font-semibold text-blue-800">10</td>
                            <td class="p-4">St. Ana, SASA, Davao City</td>
                            <td class="p-4">2025-05-09</td>
                            <td class="p-4">Delivered</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('200101', 'Light Steel Frame Type 1', 10, 'St. Ana, SASA, Davao City', '2025-05-09', 'Delivered')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('200101')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-200102" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">200102</td>
                            <td class="p-4">Light Steel Frame Type 3</td>
                            <td class="p-4 font-semibold text-blue-800">12</td>
                            <td class="p-4">St. Ana, SASA, Davao City</td>
                            <td class="p-4">2025-05-10</td>
                            <td class="p-4">Delivered</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('200102', 'Light Steel Frame Type 3', 12, 'St. Ana, SASA, Davao City', '2025-05-10', 'Delivered')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('200102')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-200103" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">200103</td>
                            <td class="p-4">Light Steel Frame Type 5</td>
                            <td class="p-4 font-semibold text-blue-800">12</td>
                            <td class="p-4">St. Ana, SASA, Davao City</td>
                            <td class="p-4">2025-05-11</td>
                            <td class="p-4">Delivered</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('200103', 'Light Steel Frame Type 5', 12, 'St. Ana, SASA, Davao City', '2025-05-11', 'Delivered')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('200103')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-200104" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">200104</td>
                            <td class="p-4">Light Steel Frame Type 7</td>
                            <td class="p-4 font-semibold text-blue-800">15</td>
                            <td class="p-4">St. Ana, SASA, Davao City</td>
                            <td class="p-4">2025-05-12</td>
                            <td class="p-4">Delivered</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('200104', 'Light Steel Frame Type 7', 15, 'St. Ana, SASA, Davao City', '2025-05-12', 'Delivered')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('200104')">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Entry Modal -->
    <div id="addModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-50">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Add Distribution Entry</h2>
            <form id="addForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Material ID (Numerical)</label>
                    <input type="text" id="addId" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" pattern="[0-9]+" required title="Material ID must be numerical">
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
                    <label class="block text-sm font-medium text-gray-700">Location</label>
                    <input type="text" id="addLocation" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Distribution Date</label>
                    <input type="date" id="addDate" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="addStatus" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Pending">Pending</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Distributed">Distributed</option>
                    </select>
                </div>
                <div class="flex justify-end gap-3 mt-6">
                    <button type="button" onclick="closeAddModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Add</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Entry Modal -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-50">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Distribution Entry</h2>
            <form id="editForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Material ID (Numerical)</label>
                    <input type="text" id="editId" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" pattern="[0-9]+" required title="Material ID must be numerical">
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
                    <label class="block text-sm font-medium text-gray-700">Location</label>
                    <input type="text" id="editLocation" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Distribution Date</label>
                    <input type="date" id="editDate" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="editStatus" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Pending">Pending</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Distributed">Distributed</option>
                    </select>
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
            const dtable = document.querySelector("#distributionTable");
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
            const id = document.getElementById('addId').value;
            const name = document.getElementById('addName').value;
            const quantity = document.getElementById('addQuantity').value;
            const location = document.getElementById('addLocation').value;
            const date = document.getElementById('addDate').value;
            const status = document.getElementById('addStatus').value;

            const tbody = document.querySelector("#distributionTable tbody");
            const tr = document.createElement("tr");
            tr.id = `row-${id}`;
            tr.className = "odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors";
            tr.innerHTML = `
                <td class="p-4">${id}</td>
                <td class="p-4">${name}</td>
                <td class="p-4 font-semibold ${quantity <= 5 ? 'text-yellow-800' : 'text-blue-800'}">${quantity}</td>
                <td class="p-4">${location}</td>
                <td class="p-4">${date}</td>
                <td class="p-4">${status}</td>
                <td class="p-4">
                    <div class="flex gap-4">
                        <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('${id}', '${name}', ${quantity}, '${location}', '${date}', '${status}')">
                        <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('${id}')">
                    </div>
                </td>
            `;
            tbody.appendChild(tr);
            closeAddModal();
        });

        // Edit Modal
        function openEditModal(id, name, quantity, location, date, status) {
            currentEditRowId = `row-${id}`;
            document.getElementById('editId').value = id;
            document.getElementById('editName').value = name;
            document.getElementById('editQuantity').value = quantity;
            document.getElementById('editLocation').value = location;
            document.getElementById('editDate').value = date;
            document.getElementById('editStatus').value = status;
            document.getElementById('editModal').classList.remove('hidden');
        }
        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const id = document.getElementById('editId').value;
            const name = document.getElementById('editName').value;
            const quantity = document.getElementById('editQuantity').value;
            const location = document.getElementById('editLocation').value;
            const date = document.getElementById('editDate').value;
            const status = document.getElementById('editStatus').value;

            const row = document.getElementById(currentEditRowId);
            if (row) {
                row.id = `row-${id}`;
                row.children[0].textContent = id;
                row.children[1].textContent = name;
                row.children[2].textContent = quantity;
                row.children[2].className = `p-4 font-semibold ${quantity <= 5 ? 'text-yellow-800' : 'text-blue-800'}`;
                row.children[3].textContent = location;
                row.children[4].textContent = date;
                row.children[5].textContent = status;
                row.children[6].innerHTML = `
                    <div class="flex gap-4">
                        <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('${id}', '${name}', ${quantity}, '${location}', '${date}', '${status}')">
                        <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('${id}')">
                    </div>
                `;
            }
            closeEditModal();
        });

        // Delete Modal
        function openDeleteModal(id) {
            currentDeleteRowId = `row-${id}`;
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