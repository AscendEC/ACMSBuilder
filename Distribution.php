<body>
    <!--Important import files-->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!--Main Body for Distribution Page, 2 Columns-->
    <div id="BodyDiv" class="w-full h-full flex">

        <div class="w-1/7">
            <!--Sidebar from import-->
            <?php
                include "./Inclusions/sidebar.php";
            ?>
        </div>

        <!--Parts Distribution-->
        <div class="w-full py-10 px-18 flex flex-col gap-5">

            <div class="w-full h-20 my-5 text-5xl font-bold flex justify-center items-center">
                <h1>Material Distribution</h1>
            </div>

            <!--Indicators-->
            <div class="flex justify-center gap-5">

                
                <!--Distribution Status-->
                <div class="w-1/4 h-30 bg-blue-200 rounded-sm shadow-sm flex">
                    <div class="w-70 flex justify-center items-center">
                        <p class="text-2xl">Pending <br> Status</p>
                    </div>
                    <div class="flex justify-center items-center w-1/2">
                        <p class="text-4xl font-bold">1</p>
                    </div>
                </div>

                <!--Distribution Status-->
                <div class="w-1/4 h-30 bg-blue-200 rounded-sm shadow-sm flex">
                    <div class="w-70 flex justify-center items-center">
                        <p class="text-2xl">Duplicate <br> Distribution</p>
                    </div>
                    <div class="flex justify-center items-center w-1/2">
                        <p class="text-4xl font-bold">1</p>
                    </div>
                </div>

                <!--Distribution Status-->
                <div class="w-1/5 h-20 my-5 bg-blue-200 rounded-sm shadow-sm flex">
                    <div class="w-70 flex justify-center items-center gap-3 hover:cursor-pointer hover:bg-blue-400 transition-colors" onclick="openAddModal()">
                        <img src="./Assets/Icons/note.png" alt="noteIcon">
                        <p class="text-xl">Note an entry</p>
                    </div>
                </div>

            </div>

            <!--Distribution Table-->
            <div class="h-full w-full">

                <table id="distributionTable" class="table-auto border-separate border h-fit max-h-full">
                    <thead>
                        <tr class="text-xl">
                            <th class="w-md ">Material ID</th>
                            <th class="w-md ">Name</th>
                            <th class="w-md ">Quantity</th>
                            <th class="w-lg ">Location</th>
                            <th class="w-md ">Distribution Date</th>
                            <th class="w-md ">Status</th>
                            <th class="w-md ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-blue-100 even:bg-blue-200 h-10">
                            <td>000101</td>
                            <td>Breeze Blocks</td>
                            <td class="text-first">15</td>
                            <td>St. Ana SASA Davao City</td>
                            <td>May 5, 2005</td>
                            <td>Distributed</td>
                            <td>
                                <div class="flex gap-5">
                                    <div><img src="./Assets/Icons/update.png" alt="update"></div>
                                    <div><img src="./Assets/Icons/delete.png" alt="delete"></div>
                                </div>
                            </td>
                        </tr>
                            <tr class="odd:bg-blue-100 even:bg-blue-200 h-10">
                            <td>MAT0012223</td>
                            <td>Neon Steel Kat</td>
                            <td class="text-first">15</td>
                            <td>St. Ana SASA Davao City</td>
                            <td>May 5, 2005</td>
                            <td>Distributed</td>
                            <td>
                                <div class="flex gap-5">
                                    <div><img src="./Assets/Icons/update.png" alt="update"></div>
                                    <div><img src="./Assets/Icons/delete.png" alt="delete"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

    <!-- Add Entry Modal -->
<div id="addModal" class="fixed inset-0 flex items-center justify-center hidden z-50" style="background: rgba(0,0,0,0.1);">
    <div class="bg-white rounded-md p-8 w-96 shadow-lg">
        <h2 class="text-xl mb-4 font-bold">Add Distribution Entry</h2>
        <form id="addForm">
            <label>Material ID</label>
            <input type="text" id="addId" class="border rounded-md w-full mb-2 p-2" required>
            <label>Name</label>
            <input type="text" id="addName" class="border rounded-md w-full mb-2 p-2" required>
            <label>Quantity</label>
            <input type="number" id="addQuantity" class="border rounded-md w-full mb-2 p-2" required>
            <label>Location</label>
            <input type="text" id="addLocation" class="border rounded-md w-full mb-2 p-2" required>
            <label>Distribution Date</label>
            <input type="date" id="addDate" class="border rounded-md w-full mb-2 p-2" required>
            <label>Status</label>
            <input type="text" id="addStatus" class="border rounded-md w-full mb-2 p-2" required>
            <div class="flex justify-end gap-2 mt-4">
                <button type="button" onclick="closeAddModal()" class="px-4 py-2 bg-gray-300 rounded">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Add</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 flex items-center justify-center hidden z-50" style="background: rgba(0,0,0,0.1);">
    <div class="bg-white rounded-md p-8 w-96 shadow-lg">
        <h2 class="text-xl mb-4 font-bold">Edit Distribution Entry</h2>
        <form id="editForm">
            <label>Material ID</label>
            <input type="text" id="editId" class="border rounded-md w-full mb-2 p-2" required>
            <label>Name</label>
            <input type="text" id="editName" class="border rounded-md w-full mb-2 p-2" required>
            <label>Quantity</label>
            <input type="number" id="editQuantity" class="border rounded-md w-full mb-2 p-2" required>
            <label>Location</label>
            <input type="text" id="editLocation" class="border rounded-md w-full mb-2 p-2" required>
            <label>Distribution Date</label>
            <input type="date" id="editDate" class="border rounded-md w-full mb-2 p-2" required>
            <label>Status</label>
            <input type="text" id="editStatus" class="border rounded-md w-full mb-2 p-2" required>
            <div class="flex justify-end gap-2 mt-4">
                <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-300 rounded">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="fixed inset-0 flex items-center justify-center hidden z-50" style="background: rgba(0,0,0,0.1);">
    <div class="bg-white rounded-md p-8 w-96 shadow-lg text-center">
        <h2 class="text-xl mb-4 font-bold">Confirm Delete</h2>
        <p class="mb-6">Are you sure you want to delete this record?</p>
        <div class="flex justify-center gap-4">
            <button type="button" onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-300 rounded">Cancel</button>
            <button type="button" onclick="confirmDelete()" class="px-4 py-2 bg-red-500 text-white rounded">Delete</button>
        </div>
    </div>
</div>

    <!--Script import for functionalities-->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const dtable = document.querySelector("#distributionTable");
        new simpleDatatables.DataTable(dtable);
    });

    let currentEditRow = null;
let currentDeleteRow = null;

// Add Modal
function openAddModal() {
    document.getElementById('addModal').classList.remove('hidden');
}
function closeAddModal() {
    document.getElementById('addModal').classList.add('hidden');
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
    tr.className = "odd:bg-blue-100 even:bg-blue-200 h-10";
    tr.innerHTML = `
        <td>${id}</td>
        <td>${name}</td>
        <td class="text-first">${quantity}</td>
        <td>${location}</td>
        <td>${date}</td>
        <td>${status}</td>
        <td>
            <div class="flex gap-5">
                <div>
                    <img src="./Assets/Icons/update.png" alt="update" class="cursor-pointer"
                        onclick="openEditModal(this)">
                </div>
                <div>
                    <img src="./Assets/Icons/delete.png" alt="delete" class="cursor-pointer"
                        onclick="openDeleteModal(this)">
                </div>
            </div>
        </td>
    `;
    tbody.appendChild(tr);
    closeAddModal();
    document.getElementById('addForm').reset();
});

// Edit Modal
function openEditModal(imgElem) {
    currentEditRow = imgElem.closest('tr');
    document.getElementById('editId').value = currentEditRow.children[0].textContent;
    document.getElementById('editName').value = currentEditRow.children[1].textContent;
    document.getElementById('editQuantity').value = currentEditRow.children[2].textContent;
    document.getElementById('editLocation').value = currentEditRow.children[3].textContent;
    document.getElementById('editDate').value = currentEditRow.children[4].textContent;
    document.getElementById('editStatus').value = currentEditRow.children[5].textContent;
    document.getElementById('editModal').classList.remove('hidden');
}
function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
}
document.getElementById('editForm').addEventListener('submit', function(e) {
    e.preventDefault();
    if (currentEditRow) {
        currentEditRow.children[0].textContent = document.getElementById('editId').value;
        currentEditRow.children[1].textContent = document.getElementById('editName').value;
        currentEditRow.children[2].textContent = document.getElementById('editQuantity').value;
        currentEditRow.children[3].textContent = document.getElementById('editLocation').value;
        currentEditRow.children[4].textContent = document.getElementById('editDate').value;
        currentEditRow.children[5].textContent = document.getElementById('editStatus').value;
    }
    closeEditModal();
});

// Delete Modal
function openDeleteModal(imgElem) {
    currentDeleteRow = imgElem.closest('tr');
    document.getElementById('deleteModal').classList.remove('hidden');
}
function closeDeleteModal() {
    document.getElementById('deleteModal').classList.add('hidden');
}
function confirmDelete() {
    if (currentDeleteRow) {
        currentDeleteRow.remove();
    }
    closeDeleteModal();
}
    </script>

</body>
