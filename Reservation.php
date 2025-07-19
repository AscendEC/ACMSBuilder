<body>
    <!--Important import files-->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!--Main Body for Reservation Page, 2 Columns-->
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
                <h1>Material Reservation</h1>
            </div>

            <!--Indicators-->
            <div class="flex justify-center gap-5">

                
                <!--Distribution Status-->
                <div class="w-1/4 h-30 bg-blue-200 rounded-sm shadow-sm flex">
                    <div class="w-70 flex justify-center items-center">
                        <p class="text-2xl">Pending <br> Requests</p>
                    </div>
                    <div class="flex justify-center items-center w-1/2">
                        <p class="text-4xl font-bold">1</p>
                    </div>
                </div>

                <!--Distribution Status-->
                <div class="w-1/4 h-30 bg-blue-200 rounded-sm shadow-sm flex">
                    <div class="w-70 flex justify-center items-center">
                        <p class="text-2xl">Duplicate <br> Requests</p>
                    </div>
                    <div class="flex justify-center items-center w-1/2">
                        <p class="text-4xl font-bold">1</p>
                    </div>
                </div>

                <!--Distribution Status-->
                <div class="w-1/5 h-20 my-5 bg-blue-200 rounded-sm shadow-sm flex">
                    <div class="w-70 flex justify-center items-center gap-3 hover:cursor-pointer hover:bg-blue-400 transition-colors" onclick="openAddModal()">
                        <img src="./Assets/Icons/note.png" alt="noteIcon">
                        <p class="text-xl">Make a Reservation</p>
                    </div>
                </div>

            </div>

            <!--Distribution Table-->
            <div class="h-full w-full">

                <table id="distributionTable" class="table-auto border-separate border h-fit max-h-full">
                    <thead>
                        <tr class="text-xl">
                            <th class="w-md ">Material Code</th>
                            <th class="w-md ">Material Name</th>
                            <th class="w-md ">Quantity</th>
                            <th class="w-lg ">Total Price</th>
                            <th class="w-lg ">Requestor</th>
                            <th class="w-lg ">Remarks</th>
                            <th class="w-md ">Date Reserved</th>
                            <th class="w-md ">Claiming Date</th>
                            <th class="w-md ">Status</th>
                            <th class="w-md ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-blue-100 even:bg-blue-200 h-10">
                            <td>MAT1002</td>
                            <td>Davis Elastic Paint Yellow</td>
                            <td class="text-end">20</td>
                            <td class="text-end">420</td>
                            <td >Jane Mayham</td>
                            <td >To be used for the construction of dog house.</td>
                            <td>June 1, 2025</td>
                            <td>June 29, 2025</td>
                            <td>Pending</td>
                            <td>
                                <div class="flex gap-5">
                                    <div>
                                        <img src="./Assets/Icons/update.png" alt="update" class="cursor-pointer"
                                            onclick="openEditModal('MAT1002', 'Davis Elastic Paint Yellow', 20, 420, 'Jane Mayham', 'To be used for the construction of dog house.', 'June 1, 2025', 'June 29, 2025', 'Pending')">
                                    </div>
                                    <div>
                                        <img src="./Assets/Icons/delete.png" alt="delete" class="cursor-pointer"
                                            onclick="openDeleteModal(this)">
                                    </div>
                                </div>
                            </td>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

    <!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 flex items-center justify-center hidden z-50" style="background: rgba(0,0,0,0.1);">
    <div class="bg-white rounded-md p-8 w-96 shadow-lg">
        <h2 class="text-xl mb-4 font-bold">Edit Reservation</h2>
        <form id="editForm">
            <label>Material Code</label>
            <input type="text" id="editCode" class="border rounded-md w-full mb-2 p-2">
            <label>Material Name</label>
            <input type="text" id="editName" class="border rounded-md w-full mb-2 p-2">
            <label>Quantity</label>
            <input type="number" id="editQuantity" class="border rounded-md w-full mb-2 p-2">
            <label>Total Price</label>
            <input type="number" id="editTotalPrice" class="border rounded-md w-full mb-2 p-2">
            <label>Requestor</label>
            <input type="text" id="editRequestor" class="border rounded-md w-full mb-2 p-2">
            <label>Remarks</label>
            <input type="text" id="editRemarks" class="border rounded-md w-full mb-2 p-2">
            <label>Date Reserved</label>
            <input type="date" id="editDateReserved" class="border rounded-md w-full mb-2 p-2">
            <label>Claiming Date</label>
            <input type="date" id="editClaimingDate" class="border rounded-md w-full mb-2 p-2">
            <label>Status</label>
            <input type="text" id="editStatus" class="border rounded-md w-full mb-2 p-2">
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

<!-- Add Reservation Modal -->
<div id="addModal" class="fixed inset-0 flex items-center justify-center hidden z-50" style="background: rgba(0,0,0,0.1);">
    <div class="bg-white rounded-md p-8 w-96 shadow-lg">
        <h2 class="text-xl mb-4 font-bold">Add Reservation</h2>
        <form id="addForm">
            <label>Material Code</label>
            <input type="text" id="addCode" class="border rounded-md w-full mb-2 p-2" required>
            <label>Material Name</label>
            <input type="text" id="addName" class="border rounded-md w-full mb-2 p-2" required>
            <label>Quantity</label>
            <input type="number" id="addQuantity" class="border rounded-md w-full mb-2 p-2" required>
            <label>Total Price</label>
            <input type="number" id="addTotalPrice" class="border rounded-md w-full mb-2 p-2" required>
            <label>Requestor</label>
            <input type="text" id="addRequestor" class="border rounded-md w-full mb-2 p-2" required>
            <label>Remarks</label>
            <input type="text" id="addRemarks" class="border rounded-md w-full mb-2 p-2">
            <label>Date Reserved</label>
            <input type="date" id="addDateReserved" class="border rounded-md w-full mb-2 p-2" required>
            <label>Claiming Date</label>
            <input type="date" id="addClaimingDate" class="border rounded-md w-full mb-2 p-2" required>
            <label>Status</label>
            <input type="text" id="addStatus" class="border rounded-md w-full mb-2 p-2" required>
            <div class="flex justify-end gap-2 mt-4">
                <button type="button" onclick="closeAddModal()" class="px-4 py-2 bg-gray-300 rounded">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Add</button>
            </div>
        </form>
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

function openEditModal(code, name, quantity, totalPrice, requestor, remarks, dateReserved, claimingDate, status) {
    // Find the row by code (assuming first cell is code)
    const rows = document.querySelectorAll("#distributionTable tbody tr");
    rows.forEach(row => {
        if (row.children[0].textContent === code) currentEditRow = row;
    });

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
    if (currentEditRow) {
        currentEditRow.children[0].textContent = document.getElementById('editCode').value;
        currentEditRow.children[1].textContent = document.getElementById('editName').value;
        currentEditRow.children[2].textContent = document.getElementById('editQuantity').value;
        currentEditRow.children[3].textContent = document.getElementById('editTotalPrice').value;
        currentEditRow.children[4].textContent = document.getElementById('editRequestor').value;
        currentEditRow.children[5].textContent = document.getElementById('editRemarks').value;
        currentEditRow.children[6].textContent = document.getElementById('editDateReserved').value;
        currentEditRow.children[7].textContent = document.getElementById('editClaimingDate').value;
        currentEditRow.children[8].textContent = document.getElementById('editStatus').value;
    }
    closeEditModal();
});

// Delete logic
function openDeleteModal(imgElem) {
    // Find the row to delete
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

// Add logic
function openAddModal() {
    document.getElementById('addModal').classList.remove('hidden');
}

function closeAddModal() {
    document.getElementById('addModal').classList.add('hidden');
}

document.getElementById('addForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Get values
    const code = document.getElementById('addCode').value;
    const name = document.getElementById('addName').value;
    const quantity = document.getElementById('addQuantity').value;
    const totalPrice = document.getElementById('addTotalPrice').value;
    const requestor = document.getElementById('addRequestor').value;
    const remarks = document.getElementById('addRemarks').value;
    const dateReserved = document.getElementById('addDateReserved').value;
    const claimingDate = document.getElementById('addClaimingDate').value;
    const status = document.getElementById('addStatus').value;

    // Create new row
    const tbody = document.querySelector("#distributionTable tbody");
    const tr = document.createElement("tr");
    tr.className = "odd:bg-blue-100 even:bg-blue-200 h-10";
    tr.innerHTML = `
        <td>${code}</td>
        <td>${name}</td>
        <td class="text-end">${quantity}</td>
        <td class="text-end">${totalPrice}</td>
        <td>${requestor}</td>
        <td>${remarks}</td>
        <td>${dateReserved}</td>
        <td>${claimingDate}</td>
        <td>${status}</td>
        <td>
            <div class="flex gap-5">
                <div>
                    <img src="./Assets/Icons/update.png" alt="update" class="cursor-pointer edit-btn"
                        data-code="${code}"
                        data-name="${name}"
                        data-quantity="${quantity}"
                        data-totalprice="${totalPrice}"
                        data-requestor="${requestor}"
                        data-remarks="${remarks}"
                        data-datereserved="${dateReserved}"
                        data-claimingdate="${claimingDate}"
                        data-status="${status}">
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
    // Add event delegation for edit buttons to prevent XSS
    document.querySelector("#distributionTable tbody").addEventListener("click", function(e) {
        if (e.target.classList.contains("edit-btn")) {
            const btn = e.target;
            openEditModal(
                btn.getAttribute("data-code"),
                btn.getAttribute("data-name"),
                btn.getAttribute("data-quantity"),
                btn.getAttribute("data-totalprice"),
                btn.getAttribute("data-requestor"),
                btn.getAttribute("data-remarks"),
                btn.getAttribute("data-datereserved"),
                btn.getAttribute("data-claimingdate"),
                btn.getAttribute("data-status")
            );
        }
    });
    </script>

</body>
