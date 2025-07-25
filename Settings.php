<body class="bg-gray-100">
    <!-- Important import files -->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!-- Main Body for Settings Page -->
    <div id="BodyDiv" class="w-full min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <?php
                include "./Inclusions/sidebar.php";
            ?>
        </div>

        <!-- Settings Content -->
        <div class="w-5/6 p-8">
            <!-- Page Header -->
            <div class="w-full mb-8 flex flex-col justify-center items-center gap-6">
                <h1 class="text-5xl font-bold text-gray-800">System Settings</h1>
            </div>

            <!-- Settings Form -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Configure Settings</h2>
                <form id="settingsForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Company Name</label>
                        <input type="text" id="companyName" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" value="ABC Hardware" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Default Currency</label>
                        <select id="currency" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                            <option value="PHP">PHP (Philippine Peso)</option>
                            <option value="USD">USD (US Dollar)</option>
                            <option value="EUR">EUR (Euro)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Material ID Prefix (Numerical)</label>
                        <input type="text" id="materialPrefix" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" pattern="[0-9]+" value="1000" required title="Material ID Prefix must be numerical">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Enable Notifications</label>
                        <input type="checkbox" id="notifications" class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    </div>
                    <div class="flex justify-end gap-3 mt-6">
                        <button type="button" onclick="openConfirmModal()" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 flex items-center gap-2">
                            <img src="./Assets/Icons/save.png" alt="Save Icon" class="w-5 h-5">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

            <!-- Settings Change Log -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <!-- Search Bar -->
                <div class="mb-6 flex justify-end">
                    <input type="text" id="tableSearch" class="w-80 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 text-gray-700" placeholder="Search change log...">
                </div>
                <table id="settingsTable" class="w-full table-auto border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-lg text-gray-600 bg-gray-100">
                            <th class="p-4 text-left">Change ID</th>
                            <th class="p-4 text-left">User</th>
                            <th class="p-4 text-left">Change Type</th>
                            <th class="p-4 text-left">Value</th>
                            <th class="p-4 text-left">Date</th>
                            <th class="p-4 text-left">Status</th>
                            <th class="p-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row-CHG1001" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="CHG1001" data-user="Admin1" data-type="Company Name" data-value="ABC Hardware" data-date="2005-07-01" data-status="Approved">
                            <td class="p-4">CHG1001</td>
                            <td class="p-4">Admin1</td>
                            <td class="p-4">Company Name</td>
                            <td class="p-4">ABC Hardware</td>
                            <td class="p-4">2005-07-01</td>
                            <td class="p-4">Approved</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('CHG1001', 'Admin1', 'Company Name', 'ABC Hardware', '2005-07-01', 'Approved')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('CHG1001')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-CHG1002" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="CHG1002" data-user="Admin2" data-type="Currency" data-value="PHP" data-date="2005-07-05" data-status="Pending">
                            <td class="p-4">CHG1002</td>
                            <td class="p-4">Admin2</td>
                            <td class="p-4">Currency</td>
                            <td class="p-4">PHP</td>
                            <td class="p-4">2005-07-05</td>
                            <td class="p-4">Pending</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('CHG1002', 'Admin2', 'Currency', 'PHP', '2005-07-05', 'Pending')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('CHG1002')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-CHG1003" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="CHG1003" data-user="Admin1" data-type="Material ID Prefix" data-value="1000" data-date="2005-07-10" data-status="Approved">
                            <td class="p-4">CHG1003</td>
                            <td class="p-4">Admin1</td>
                            <td class="p-4">Material ID Prefix</td>
                            <td class="p-4">1000</td>
                            <td class="p-4">2005-07-10</td>
                            <td class="p-4">Approved</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('CHG1003', 'Admin1', 'Material ID Prefix', '1000', '2005-07-10', 'Approved')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('CHG1003')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-CHG1004" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="CHG1004" data-user="Admin3" data-type="Notifications" data-value="Enabled" data-date="2005-07-15" data-status="Pending">
                            <td class="p-4">CHG1004</td>
                            <td class="p-4">Admin3</td>
                            <td class="p-4">Notifications</td>
                            <td class="p-4">Enabled</td>
                            <td class="p-4">2005-07-15</td>
                            <td class="p-4">Pending</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('CHG1004', 'Admin3', 'Notifications', 'Enabled', '2005-07-15', 'Pending')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('CHG1004')">
                                </div>
                            </td>
                        </tr>
                        <tr id="row-CHG1005" class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="CHG1005" data-user="Admin2" data-type="Currency" data-value="USD" data-date="2005-07-20" data-status="Rejected">
                            <td class="p-4">CHG1005</td>
                            <td class="p-4">Admin2</td>
                            <td class="p-4">Currency</td>
                            <td class="p-4">USD</td>
                            <td class="p-4">2005-07-20</td>
                            <td class="p-4">Rejected</td>
                            <td class="p-4">
                                <div class="flex gap-4">
                                    <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('CHG1005', 'Admin2', 'Currency', 'USD', '2005-07-20', 'Rejected')">
                                    <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('CHG1005')">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Confirm Changes Modal -->
    <div id="confirmModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-30">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Confirm Changes</h2>
            <p class="text-gray-600 mb-6">Are you sure you want to save these settings?</p>
            <div class="flex justify-center gap-4">
                <button type="button" onclick="closeConfirmModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                <button type="button" onclick="saveSettings()" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Save</button>
            </div>
        </div>
    </div>

    <!-- Edit Change Log Modal -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center hidden z-50 bg-black bg-opacity-30">
        <div class="bg-white rounded-lg p-8 w-96 shadow-xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Change Log</h2>
            <form id="editForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Change ID (Numerical)</label>
                    <input type="text" id="editCode" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" pattern="[0-9]+" required title="Change ID must be numerical">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">User</label>
                    <input type="text" id="editUser" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Change Type</label>
                    <select id="editType" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Company Name">Company Name</option>
                        <option value="Currency">Currency</option>
                        <option value="Material ID Prefix">Material ID Prefix</option>
                        <option value="Notifications">Notifications</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Value</label>
                    <input type="text" id="editValue" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Date</label>
                    <input type="date" id="editDate" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="editStatus" class="border rounded-md w-full p-2 focus:ring-2 focus:ring-blue-500" required>
                        <option value="Pending">Pending</option>
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
            <p class="text-gray-600 mb-6">Are you sure you want to delete this change log entry?</p>
            <div class="flex justify-center gap-4">
                <button type="button" onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Cancel</button>
                <button type="button" onclick="confirmDelete()" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Delete</button>
            </div>
        </div>
    </div>

    <!-- Script for Table and Modals -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stable = document.querySelector("#settingsTable");
            const dataTable = new simpleDatatables.DataTable(stable, {
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

        // Confirm Modal
        function openConfirmModal() {
            document.getElementById('confirmModal').classList.remove('hidden');
        }
        function closeConfirmModal() {
            document.getElementById('confirmModal').classList.add('hidden');
        }
        function saveSettings() {
            const companyName = document.getElementById('companyName').value;
            const currency = document.getElementById('currency').value;
            const materialPrefix = document.getElementById('materialPrefix').value;
            const notifications = document.getElementById('notifications').checked ? 'Enabled' : 'Disabled';

            if (!materialPrefix.match(/^[0-9]+$/)) {
                alert('Material ID Prefix must be numerical.');
                return;
            }

            // Simulate adding to change log
            const tbody = document.querySelector("#settingsTable tbody");
            const code = `CHG${1000 + tbody.children.length + 1}`;
            const tr = document.createElement("tr");
            tr.id = `row-${code}`;
            tr.className = "odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors";
            tr.setAttribute('data-code', code);
            tr.setAttribute('data-user', 'Admin1');
            tr.setAttribute('data-type', 'Settings Update');
            tr.setAttribute('data-value', `Company: ${companyName}, Currency: ${currency}, Prefix: ${materialPrefix}, Notifications: ${notifications}`);
            tr.setAttribute('data-date', new Date().toISOString().split('T')[0]);
            tr.setAttribute('data-status', 'Pending');
            tr.innerHTML = `
                <td class="p-4">${code}</td>
                <td class="p-4">Admin1</td>
                <td class="p-4">Settings Update</td>
                <td class="p-4">Company: ${companyName}, Currency: ${currency}, Prefix: ${materialPrefix}, Notifications: ${notifications}</td>
                <td class="p-4">${new Date().toISOString().split('T')[0]}</td>
                <td class="p-4">Pending</td>
                <td class="p-4">
                    <div class="flex gap-4">
                        <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('${code}', 'Admin1', 'Settings Update', 'Company: ${companyName}, Currency: ${currency}, Prefix: ${materialPrefix}, Notifications: ${notifications}', '${new Date().toISOString().split('T')[0]}', 'Pending')">
                        <img src="./Assets/Icons/delete.png" alt="delete" class="w-6 h-6 cursor-pointer" onclick="openDeleteModal('${code}')">
                    </div>
                </td>
            `;
            tbody.appendChild(tr);
            closeConfirmModal();
        }

        // Edit Modal
        function openEditModal(code, user, type, value, date, status) {
            currentEditRowId = `row-${code}`;
            document.getElementById('editCode').value = code;
            document.getElementById('editUser').value = user;
            document.getElementById('editType').value = type;
            document.getElementById('editValue').value = value;
            document.getElementById('editDate').value = date;
            document.getElementById('editStatus').value = status;
            document.getElementById('editModal').classList.remove('hidden');
        }
        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const code = document.getElementById('editCode').value;
            const user = document.getElementById('editUser').value;
            const type = document.getElementById('editType').value;
            const value = document.getElementById('editValue').value;
            const date = document.getElementById('editDate').value;
            const status = document.getElementById('editStatus').value;

            if (!code.match(/^[0-9]+$/)) {
                alert('Change ID must be numerical.');
                return;
            }

            const row = document.getElementById(currentEditRowId);
            if (row) {
                row.id = `row-${code}`;
                row.setAttribute('data-code', code);
                row.setAttribute('data-user', user);
                row.setAttribute('data-type', type);
                row.setAttribute('data-value', value);
                row.setAttribute('data-date', date);
                row.setAttribute('data-status', status);
                row.children[0].textContent = code;
                row.children[1].textContent = user;
                row.children[2].textContent = type;
                row.children[3].textContent = value;
                row.children[4].textContent = date;
                row.children[5].textContent = status;
                row.children[6].innerHTML = `
                    <div class="flex gap-4">
                        <img src="./Assets/Icons/update.png" alt="update" class="w-6 h-6 cursor-pointer" onclick="openEditModal('${code}', '${user}', '${type}', '${value}', '${date}', '${status}')">
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