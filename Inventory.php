<body>
    <!--Important import files-->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!--Main Body for Inventory Page, 2 Columns-->
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
                <h1>Material Inventory</h1>
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
                        <p class="text-xl">Record an Item</p>
                    </div>
                </div>

            </div>

            <!--Distribution Table-->
            <div class="h-full w-full">

                <table id="distributionTable" class="table-auto border-separate border h-fit max-h-full">
                    <thead>
                        <tr class="text-xl">
                            <th class="w-md ">Material Code</th>
                            <th class="w-md ">Name</th>
                            <th class="w-md ">Quantity</th>
                            <th class="w-lg ">Item Price</th>
                            <th class="w-lg ">Total Price</th>
                            <th class="w-lg ">Brand</th>
                            <th class="w-md ">Shop</th>
                            <th class="w-md ">Date Added</th>
                            <th class="w-md ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row-MAT1002" class="odd:bg-blue-100 even:bg-blue-200 h-10">
                            <td>MAT1002</td>
                            <td>Davis Elastic Paint Yellow</td>
                            <td class="text-first">20</td>
                            <td class="text-first">420</td>
                            <td class="text-first">1420</td>
                            <td>Davis</td>
                            <td>City Hardware, Bajada</td>
                            <td>June 15, 2005</td>
                            <td>
                                <div class="flex gap-5">
                                    <div>
                                        <img src="./Assets/Icons/update.png" alt="update" class="cursor-pointer"
                                            onclick="openEditModal('MAT1002', 'Davis Elastic Paint Yellow', 20, 420, 1420, 'Davis', 'City Hardware, Bajada', 'June 15, 2005')">
                                    </div>
                                    <div>
                                        <img src="./Assets/Icons/delete.png" alt="delete" class="cursor-pointer"
                                            onclick="openDeleteModal('MAT1002')">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

    <!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 flex items-center justify-center hidden z-50" style="background: rgba(0,0,0,0.1);">
    <div class="bg-white rounded-md p-8 w-96 shadow-lg">
        <h2 class="text-xl mb-4 font-bold">Edit Item</h2>
        <form id="editForm">
            <label>Material Code</label>
            <input type="text" id="editCode" class="border rounded-md w-full mb-2 p-2">
            <label>Name</label>
            <input type="text" id="editName" class="border rounded-md w-full mb-2 p-2">
            <label>Quantity</label>
            <input type="number" id="editQuantity" class="border rounded-md w-full mb-2 p-2">
            <label>Item Price</label>
            <input type="number" id="editItemPrice" class="border rounded-md w-full mb-2 p-2">
            <label>Total Price</label>
            <input type="number" id="editTotalPrice" class="border rounded-md w-full mb-2 p-2">
            <label>Brand</label>
            <input type="text" id="editBrand" class="border rounded-md w-full mb-2 p-2">
            <label>Shop</label>
            <input type="text" id="editShop" class="border rounded-md w-full mb-2 p-2">
            <label>Date Added</label>
            <input type="date" id="editDate" class="border rounded-md w-full mb-2 p-2">
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

<!-- Add Item Modal -->
<div id="addModal" class="fixed inset-0 flex items-center justify-center hidden z-50" style="background: rgba(0,0,0,0.1);">
    <div class="bg-white rounded-md p-8 w-96 shadow-lg">
        <h2 class="text-xl mb-4 font-bold">Add New Item</h2>
        <form id="addForm">
            <label>Material Code</label>
            <input type="text" id="addCode" class="border rounded-md w-full mb-2 p-2" required>
            <label>Name</label>
            <input type="text" id="addName" class="border rounded-md w-full mb-2 p-2" required>
            <label>Quantity</label>
            <input type="number" id="addQuantity" class="border rounded-md w-full mb-2 p-2" required>
            <label>Item Price</label>
            <input type="number" id="addItemPrice" class="border rounded-md w-full mb-2 p-2" required>
            <label>Total Price</label>
            <input type="number" id="addTotalPrice" class="border rounded-md w-full mb-2 p-2" required>
            <label>Brand</label>
            <input type="text" id="addBrand" class="border rounded-md w-full mb-2 p-2" required>
            <label>Shop</label>
            <input type="text" id="addShop" class="border rounded-md w-full mb-2 p-2" required>
            <label>Date Added</label>
            <input type="date" id="addDate" class="border rounded-md w-full mb-2 p-2" required>
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

    let currentEditRowId = null;
let currentDeleteRowId = null;

function openEditModal(code, name, quantity, itemPrice, totalPrice, brand, shop, date) {
    currentEditRowId = "row-" + code;
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
        row.children[0].textContent = code;
        row.children[1].textContent = name;
        row.children[2].textContent = quantity;
        row.children[3].textContent = itemPrice;
        row.children[4].textContent = totalPrice;
        row.children[5].textContent = brand;
        row.children[6].textContent = shop;
        row.children[7].textContent = date;
    }
    closeEditModal();
});

function openDeleteModal(code) {
    currentDeleteRowId = "row-" + code;
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
    const itemPrice = document.getElementById('addItemPrice').value;
    const totalPrice = document.getElementById('addTotalPrice').value;
    const brand = document.getElementById('addBrand').value;
    const shop = document.getElementById('addShop').value;
    const date = document.getElementById('addDate').value;

    // Create new row
    const tbody = document.querySelector("#distributionTable tbody");
    const tr = document.createElement("tr");
    tr.id = "row-" + code;
    tr.className = "odd:bg-blue-100 even:bg-blue-200 h-10";
    tr.innerHTML = `
        <td>${code}</td>
        <td>${name}</td>
        <td class="text-first">${quantity}</td>
        <td class="text-first">${itemPrice}</td>
        <td class="text-first">${totalPrice}</td>
        <td>${brand}</td>
        <td>${shop}</td>
        <td>${date}</td>
        <td>
            <div class="flex gap-5">
                <div>
                    <img src="./Assets/Icons/update.png" alt="update" class="cursor-pointer"
                        onclick="openEditModal('${code}', '${name}', ${quantity}, ${itemPrice}, ${totalPrice}, '${brand}', '${shop}', '${date}')">
                </div>
                <div>
                    <img src="./Assets/Icons/delete.png" alt="delete" class="cursor-pointer"
                        onclick="openDeleteModal('${code}')">
                </div>
            </div>
        </td>
    `;
    tbody.appendChild(tr);

    closeAddModal();
    document.getElementById('addForm').reset();
});
    </script>

</body>
