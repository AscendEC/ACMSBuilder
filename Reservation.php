<body class="bg-gray-100">
    <!-- Important import files -->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!-- Main Body for Reservation Page -->
    <div id="BodyDiv" class="w-full min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <?php
                include "./Inclusions/sidebar.php";
            ?>
        </div>

        <!-- Material Reservation Content -->
        <div class="w-5/6 p-8">
            <!-- Page Header -->
            <div class="w-full mb-8 flex flex-col justify-center items-center gap-6">
                <h1 class="text-5xl font-bold text-gray-800">Material Reservation</h1>
            </div>

            <!-- Indicators -->
            <div class="flex justify-center gap-6 mb-8">
                <!-- Pending Requests -->
                <div class="w-1/4 bg-blue-100 rounded-lg shadow-md p-6 flex items-center justify-between transition-transform hover:scale-105">
                    <div>
                        <p class="text-2xl font-semibold text-gray-700">Pending Requests</p>
                        <p class="text-4xl font-bold text-blue-800">1</p>
                    </div>
                    <img src="./Assets/Icons/pendingIcon.png" alt="Pending Icon" class="w-12 h-12">
                </div>

                <!-- Duplicate Requests -->
                <div class="w-1/4 bg-yellow-100 rounded-lg shadow-md p-6 flex items-center justify-between transition-transform hover:scale-105">
                    <div>
                        <p class="text-2xl font-semibold text-gray-700">Duplicate Requests</p>
                        <p class="text-4xl font-bold text-yellow-800">1</p>
                    </div>
                    <img src="./Assets/Icons/duplicateIcon.png" alt="Duplicate Icon" class="w-12 h-12">
                </div>

                <!-- Make a Reservation -->
                <div class="w-1/4 bg-green-100 rounded-lg shadow-md p-6 flex items-center justify-center gap-3 hover:bg-green-200 transition-colors cursor-pointer" onclick="openAddModal()">
                    <img src="./Assets/Icons/note.png" alt="Note Icon" class="w-8 h-8">
                    <p class="text-xl font-semibold text-gray-700">Make a Reservation</p>
                </div>
            </div>

            <!-- Reservation Table -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <!-- Search Bar -->
                <div class="mb-6 flex justify-end">
                    <input type="text" id="tableSearch" class="w-80 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 text-gray-700" placeholder="Search reservations...">
                </div>
                <table id="reservationTable" class="w-full table-auto border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-lg text-gray-600 bg-gray-100">
                            <th class="p-4 text-left">Material ID</th>
                            <th class="p-4 text-left">Material Name</th>
                            <th class="p-4 text-left">Quantity</th>
                            <th class="p-4 text-left">Total Price</th>
                            <th class="p-4 text-left">Requestor</th>
                            <th class="p-4 text-left">Remarks</th>
                            <th class="p-4 text-left">Date Reserved</th>
                            <th class="p-4 text-left">Claiming Date</th>
                            <th class="p-4 text-left">Status</th>
                            <th class="p-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row-MAT1002" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors">
                            <td class="p-4">MAT1002</td>
                            <td class="p-4">Davis Elastic Paint Yellow</td>
                            <td class="p-4 font-semibold text-blue-800">20</td>
                            <td class="p-4 font-semibold">420</td>
                            <td class="p-4">Jane Mayham</td>
                            <td class="p-4">To be used for the construction of dog house.</td>
                            <td class="p-4">2025-06-01</td>
                            <td class="p-4">2025-06-29</td>
                            <td class="p-4">Pending</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('MAT1002', 'Davis Elastic Paint Yellow', 20, 420, 'Jane Mayham', 'To be used for the construction of dog house.', '2025-06-01', '2025-06-29', 'Pending')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('MAT1002')">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Reservation Modal -->
    <div id="addModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-30">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Add Reservation</h2>
            <form id="addForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Material ID (Numerical)</label>
                    <input type="text" id="addCode" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" pattern="[0-9]+" required title="Material ID must be numerical">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Material Name</label>
                    <select id="addName" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Davis Elastic Paint Yellow">Davis Elastic Paint Yellow</option>
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
                    <label class="block text-sm font-medium text-gray-700">Total Price</label>
                    <input type="number" id="addTotalPrice" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Requestor</label>
                    <input type="text" id="addRequestor" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Remarks</label>
                    <input type="text" id="addRemarks" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Date Reserved</label>
                    <input type="date" id="addDateReserved" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Claiming Date</label>
                    <input type="date" id="addClaimingDate" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="addStatus" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Pending">Pending</option>
                        <option value="Duplicate">Duplicate</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                </div>
                <div class="flex justify-end gap-3 mt-6">
                    <button type="button" onclick="closeAddModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Add</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Reservation Modal -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-30">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Reservation</h2>
            <form id="editForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Material ID (Numerical)</label>
                    <input type="text" id="editCode" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" pattern="[0-9]+" required title="Material ID must be numerical">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Material Name</label>
                    <select id="editName" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Davis Elastic Paint Yellow">Davis Elastic Paint Yellow</option>
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
                    <label class="block text-sm font-medium text-gray-700">Total Price</label>
                    <input type="number" id="editTotalPrice" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Requestor</label>
                    <input type="text" id="editRequestor" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Remarks</label>
                    <input type="text" id="editRemarks" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Date Reserved</label>
                    <input type="date" id="editDateReserved" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Claiming Date</label>
                    <input type="date" id="editClaimingDate" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="editStatus" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Pending">Pending</option>
                        <option value="Duplicate">Duplicate</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
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
    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-30">
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
            const rtable = document.querySelector("#reservationTable");
            const dataTable = new simpleDatatables.DataTable(rtable, {
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
            const totalPrice = document.getElementById('addTotalPrice').value;
            const requestor = document.getElementById('addRequestor').value;
            const remarks = document.getElementById('addRemarks').value;
            const dateReserved = document.getElementById('addDateReserved').value;
            const claimingDate = document.getElementById('addClaimingDate').value;
            const status = document.getElementById('addStatus').value;

            if (!code.match(/^[0-9]+$/)) {
                alert('Material ID must be numerical.');
                return;
            }

            const tbody = document.querySelector("#reservationTable tbody");
            const tr = document.createElement("tr");
            tr.id = `row-${code}`;
            tr.className = "odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors";
            tr.innerHTML = `
                <td class="p-4">${code}</td>
                <td class="p-4">${name}</td>
                <td class="p-4 font-semibold ${quantity <= 5 ? 'text-yellow-800' : 'text-blue-800'}">${quantity}</td>
                <td class="p-4 font-semibold">${totalPrice}</td>
                <td class="p-4">${requestor}</td>
                <td class="p-4">${remarks}</td>
                <td class="p-4">${dateReserved}</td>
                <td class="p-4">${claimingDate}</td>
                <td class="p-4">${status}</td>
                <td class="p-4">
                    <div class="flex gap-4">
                        <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('${code}', '${name}', ${quantity}, ${totalPrice}, '${requestor}', '${remarks}', '${dateReserved}', '${claimingDate}', '${status}')">
                        <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('${code}')">
                    </div>
                </td>
            `;
            tbody.appendChild(tr);
            closeAddModal();
        });

        // Edit Modal
        function openEditModal(code, name, quantity, totalPrice, requestor, remarks, dateReserved, claimingDate, status) {
            currentEditRowId = `row-${code}`;
            document.getElementById('editCode').value = code;
            document.getElementById('editName').value = name;
            document.getElementById('editQuantity').value = quantity;
            document.getElementById('editTotalPrice').value = totalPrice;
            document.getElementById('editRequestor').value = requestor;
            document.getElementById('editRemarks').value = remarks;
            document.getElementById('editDateReserved').value = dateReserved;
            document.getElementById('editClaimingDate').value = claimingDate;
            document.getElementById('editStatus').value = status;
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
            const totalPrice = document.getElementById('editTotalPrice').value;
            const requestor = document.getElementById('editRequestor').value;
            const remarks = document.getElementById('editRemarks').value;
            const dateReserved = document.getElementById('editDateReserved').value;
            const claimingDate = document.getElementById('editClaimingDate').value;
            const status = document.getElementById('editStatus').value;

            if (!code.match(/^[0-9]+$/)) {
                alert('Material ID must be numerical.');
                return;
            }

            const row = document.getElementById(currentEditRowId);
            if (row) {
                row.id = `row-${code}`;
                row.children[0].textContent = code;
                row.children[1].textContent = name;
                row.children[2].textContent = quantity;
                row.children[2].className = `p-4 font-semibold ${quantity <= 5 ? 'text-yellow-800' : 'text-blue-800'}`;
                row.children[3].textContent = totalPrice;
                row.children[4].textContent = requestor;
                row.children[5].textContent = remarks;
                row.children[6].textContent = dateReserved;
                row.children[7].textContent = claimingDate;
                row.children[8].textContent = status;
                row.children[9].innerHTML = `
                    <div class="flex gap-4">
                        <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('${code}', '${name}', ${quantity}, ${totalPrice}, '${requestor}', '${remarks}', '${dateReserved}', '${claimingDate}', '${status}')">
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