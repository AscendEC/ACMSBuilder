<body class="bg-gray-100">
    <!-- Important import files -->
    <?php
        include "./Inclusions/Head.php";
        include "./Inclusions/navbar.php";
    ?>

    <!-- Main Body for Reports Page -->
    <div id="BodyDiv" class="w-full min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <?php
                include "./Inclusions/sidebar.php";
            ?>
        </div>

        <!-- Reports Content -->
        <div class="w-5/6 p-8">
            <!-- Page Header -->
            <div class="w-full mb-8 flex flex-col justify-center items-center gap-6">
                <h1 class="text-5xl font-bold text-gray-800">Inventory Reports</h1>
            </div>

            <!-- Report Controls -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="mb-6 flex justify-end gap-4">
                    <select id="reportType" class="w-40 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 text-gray-700">
                        <option value="totalStock" selected>Total Stock by Material</option>
                        <option value="lowStock">Low Stock Alerts</option>
                        <option value="monthlySummary">Monthly Stock Summary</option>
                    </select>
                    <input type="text" id="tableSearch" class="w-80 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 text-gray-700" placeholder="Search report...">
                    <button id="exportButton" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 flex items-center gap-2">
                        <img src="./Assets/Icons/export.png" alt="Export Icon" class="w-5 h-5">
                        Export CSV
                    </button>
                </div>
                <div id="reportTable"></div>
            </div>
        </div>
    </div>

    <!-- Script for Reports -->
    <script>
        const stockData = [
            { code: '000101', name: 'Breeze Blocks Model A', quantity: 15, itemPrice: 150, brand: 'Archispex', shop: 'Archispex, Ma-a', location: 'ACMSB Warehouse', date: '2025-06-01' },
            { code: '200101', name: 'Light Steel Frame Type 1', quantity: 5, itemPrice: 500, brand: 'Archispex', shop: 'Archispex, Ma-a', location: 'ACMSB Warehouse', date: '2025-06-10' },
            { code: '000103', name: 'Breeze Blocks Model Z', quantity: 8, itemPrice: 150, brand: 'BuildRite', shop: 'BuildRite, Davao', location: 'Warehouse 2', date: '2025-06-05' },
            { code: '200104', name: 'Light Steel Frame Type 5', quantity: 2, itemPrice: 500, brand: 'Archispex', shop: 'Archispex, Ma-a', location: 'Store B', date: '2025-06-15' },
            { code: '000104', name: 'Breeze Blocks Model B', quantity: 0, itemPrice: 150, brand: 'BuildRite', shop: 'BuildRite, Davao', location: 'ACMSB Warehouse', date: '2025-06-20' },
            { code: '000114', name: 'Breeze Blocks Model N', quantity: 10, itemPrice: 150, brand: 'Archispex', shop: 'Archispex, Ma-a', location: 'ACMSB Warehouse', date: '2025-07-15' },
            { code: '200103', name: 'Light Steel Frame Type 3', quantity: 3, itemPrice: 500, brand: 'Archispex', shop: 'Archispex, Ma-a', location: 'ACMSB Warehouse', date: '2025-07-20' },
            { code: '000105', name: 'Breeze Blocks Model A', quantity: 12, itemPrice: 150, brand: 'BuildRite', shop: 'BuildRite, Davao', location: 'Warehouse 2', date: '2025-07-10' },
            { code: '200105', name: 'Light Steel Frame Type 7', quantity: 4, itemPrice: 500, brand: 'Archispex', shop: 'Archispex, Ma-a', location: 'Store B', date: '2025-07-25' },
            { code: '000106', name: 'Breeze Blocks Model Z', quantity: 0, itemPrice: 150, brand: 'BuildRite', shop: 'BuildRite, Davao', location: 'ACMSB Warehouse', date: '2025-07-05' },
            { code: '000102', name: 'Breeze Blocks Model B', quantity: 5, itemPrice: 150, brand: 'Archispex', shop: 'Archispex, Ma-a', location: 'ACMSB Warehouse', date: '2025-08-25' },
            { code: '000107', name: 'Breeze Blocks Model N', quantity: 7, itemPrice: 150, brand: 'BuildRite', shop: 'BuildRite, Davao', location: 'Warehouse 2', date: '2025-08-15' },
            { code: '200106', name: 'Light Steel Frame Type 1', quantity: 1, itemPrice: 500, brand: 'Archispex', shop: 'Archispex, Ma-a', location: 'Store B', date: '2025-08-20' },
            { code: '000108', name: 'Breeze Blocks Model A', quantity: 0, itemPrice: 150, brand: 'BuildRite', shop: 'BuildRite, Davao', location: 'ACMSB Warehouse', date: '2025-08-10' }
        ];

        let dataTable = null;

        document.addEventListener('DOMContentLoaded', function () {
            generateReport('totalStock');

            // Report type change
            const reportTypeSelect = document.getElementById('reportType');
            reportTypeSelect.addEventListener('change', function(e) {
                generateReport(e.target.value);
                searchReport(document.getElementById('tableSearch').value);
            });

            // Search bar functionality
            const searchInput = document.getElementById('tableSearch');
            searchInput.addEventListener('input', function(e) {
                searchReport(e.target.value);
            });

            // Export CSV
            document.getElementById('exportButton').addEventListener('click', exportToCSV);
        });

        function generateReport(type) {
            const reportTable = document.getElementById('reportTable');
            let html = '';
            let headers = [];
            let data = [];

            if (type === 'totalStock') {
                headers = ['Material Name', 'Total Quantity', 'Average Item Price', 'Brands', 'Shops', 'Locations'];
                const materialSummary = {};
                stockData.forEach(item => {
                    if (!materialSummary[item.name]) {
                        materialSummary[item.name] = {
                            quantity: 0,
                            prices: [],
                            brands: new Set(),
                            shops: new Set(),
                            locations: new Set()
                        };
                    }
                    materialSummary[item.name].quantity += parseInt(item.quantity);
                    materialSummary[item.name].prices.push(parseInt(item.itemPrice));
                    materialSummary[item.name].brands.add(item.brand);
                    materialSummary[item.name].shops.add(item.shop);
                    materialSummary[item.name].locations.add(item.location);
                });
                data = Object.keys(materialSummary).map(name => {
                    const avgPrice = materialSummary[name].prices.reduce((a, b) => a + b, 0) / materialSummary[name].prices.length;
                    return {
                        name,
                        quantity: materialSummary[name].quantity,
                        avgPrice: avgPrice.toFixed(2),
                        brands: Array.from(materialSummary[name].brands).join(', '),
                        shops: Array.from(materialSummary[name].shops).join(', '),
                        locations: Array.from(materialSummary[name].locations).join(', ')
                    };
                });
                html = `
                    <table class="reportTable w-full table-auto border-separate border-spacing-y-2">
                        <thead>
                            <tr class="text-lg text-gray-600 bg-gray-100">
                                <th class="p-4 text-left">Material Name</th>
                                <th class="p-4 text-left">Total Quantity</th>
                                <th class="p-4 text-left">Average Item Price</th>
                                <th class="p-4 text-left">Brands</th>
                                <th class="p-4 text-left">Shops</th>
                                <th class="p-4 text-left">Locations</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${data.map(item => `
                                <tr class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-name="${item.name}" data-quantity="${item.quantity}" data-avgprice="${item.avgPrice}" data-brands="${item.brands}" data-shops="${item.shops}" data-locations="${item.locations}">
                                    <td class="p-4">${item.name}</td>
                                    <td class="p-4 font-semibold ${item.quantity <= 5 ? item.quantity == 0 ? 'text-red-800' : 'text-yellow-800' : 'text-blue-800'}">${item.quantity}</td>
                                    <td class="p-4 font-semibold">${item.avgPrice}</td>
                                    <td class="p-4">${item.brands}</td>
                                    <td class="p-4">${item.shops}</td>
                                    <td class="p-4">${item.locations}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                `;
            } else if (type === 'lowStock') {
                headers = ['Material ID', 'Name', 'Quantity', 'Brand', 'Shop', 'Location', 'Date Added'];
                data = stockData.filter(item => item.quantity <= 5);
                html = `
                    <table class="reportTable w-full table-auto border-separate border-spacing-y-2">
                        <thead>
                            <tr class="text-lg text-gray-600 bg-gray-100">
                                <th class="p-4 text-left">Material ID</th>
                                <th class="p-4 text-left">Name</th>
                                <th class="p-4 text-left">Quantity</th>
                                <th class="p-4 text-left">Brand</th>
                                <th class="p-4 text-left">Shop</th>
                                <th class="p-4 text-left">Location</th>
                                <th class="p-4 text-left">Date Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${data.map(item => `
                                <tr class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-code="${item.code}" data-name="${item.name}" data-quantity="${item.quantity}" data-brand="${item.brand}" data-shop="${item.shop}" data-location="${item.location}" data-date="${item.date}">
                                    <td class="p-4">${item.code}</td>
                                    <td class="p-4">${item.name}</td>
                                    <td class="p-4 font-semibold ${item.quantity <= 5 ? item.quantity == 0 ? 'text-red-800' : 'text-yellow-800' : 'text-blue-800'}">${item.quantity}</td>
                                    <td class="p-4">${item.brand}</td>
                                    <td class="p-4">${item.shop}</td>
                                    <td class="p-4">${item.location}</td>
                                    <td class="p-4">${item.date}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                `;
            } else if (type === 'monthlySummary') {
                headers = ['Month', 'Total Items', 'Total Quantity'];
                const monthSummary = {};
                stockData.forEach(item => {
                    const monthYear = item.date.slice(0, 7);
                    if (!monthSummary[monthYear]) {
                        monthSummary[monthYear] = { count: 0, quantity: 0 };
                    }
                    monthSummary[monthYear].count += 1;
                    monthSummary[monthYear].quantity += parseInt(item.quantity);
                });
                data = Object.keys(monthSummary).map(monthYear => ({
                    month: new Date(monthYear + '-01').toLocaleString('default', { month: 'long', year: 'numeric' }),
                    count: monthSummary[monthYear].count,
                    quantity: monthSummary[monthYear].quantity
                }));
                html = `
                    <table class="reportTable w-full table-auto border-separate border-spacing-y-2">
                        <thead>
                            <tr class="text-lg text-gray-600 bg-gray-100">
                                <th class="p-4 text-left">Month</th>
                                <th class="p-4 text-left">Total Items</th>
                                <th class="p-4 text-left">Total Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${data.map(item => `
                                <tr class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition-colors" data-month="${item.month}" data-count="${item.count}" data-quantity="${item.quantity}">
                                    <td class="p-4">${item.month}</td>
                                    <td class="p-4">${item.count}</td>
                                    <td class="p-4 font-semibold ${item.quantity <= 5 ? item.quantity == 0 ? 'text-red-800' : 'text-yellow-800' : 'text-blue-800'}">${item.quantity}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                `;
            }

            reportTable.innerHTML = html;
            if (dataTable) dataTable.destroy();
            const table = document.querySelector('.reportTable');
            if (table) {
                dataTable = new simpleDatatables.DataTable(table, {
                    searchable: false,
                    sortable: true,
                    perPage: 10,
                    perPageSelect: [5, 10, 15, 20]
                });
            }
            currentHeaders = headers; // Store headers for export
            currentData = data; // Store data for export
        }

        let currentHeaders = [];
        let currentData = [];

        function searchReport(searchTerm) {
            const rows = document.querySelectorAll('.reportTable tr[data-name], .reportTable tr[data-code], .reportTable tr[data-month]');
            const lowerSearchTerm = searchTerm.toLowerCase();
            rows.forEach(row => {
                const rowData = [];
                if (row.hasAttribute('data-name')) {
                    rowData.push(
                        row.getAttribute('data-name') || '',
                        row.getAttribute('data-quantity') || '',
                        row.getAttribute('data-avgprice') || '',
                        row.getAttribute('data-brands') || '',
                        row.getAttribute('data-shops') || '',
                        row.getAttribute('data-locations') || ''
                    );
                } else if (row.hasAttribute('data-code')) {
                    rowData.push(
                        row.getAttribute('data-code') || '',
                        row.getAttribute('data-name') || '',
                        row.getAttribute('data-quantity') || '',
                        row.getAttribute('data-brand') || '',
                        row.getAttribute('data-shop') || '',
                        row.getAttribute('data-location') || '',
                        row.getAttribute('data-date') || ''
                    );
                } else if (row.hasAttribute('data-month')) {
                    rowData.push(
                        row.getAttribute('data-month') || '',
                        row.getAttribute('data-count') || '',
                        row.getAttribute('data-quantity') || ''
                    );
                }
                const matches = rowData.some(data => data.toLowerCase().includes(lowerSearchTerm));
                row.style.display = matches ? '' : 'none';
            });
        }

        function exportToCSV() {
            let csvContent = 'data:text/csv;charset=utf-8,' + currentHeaders.join(',') + '\n';
            currentData.forEach(item => {
                const row = [];
                if (currentHeaders.includes('Material Name')) {
                    row.push(`"${item.name}"`, item.quantity, item.avgPrice, `"${item.brands}"`, `"${item.shops}"`, `"${item.locations}"`);
                } else if (currentHeaders.includes('Material ID')) {
                    row.push(item.code, `"${item.name}"`, item.quantity, `"${item.brand}"`, `"${item.shop}"`, `"${item.location}"`, item.date);
                } else if (currentHeaders.includes('Month')) {
                    row.push(`"${item.month}"`, item.count, item.quantity);
                }
                csvContent += row.join(',') + '\n';
            });
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement('a');
            link.setAttribute('href', encodedUri);
            link.setAttribute('download', `inventory_report_${new Date().toISOString().slice(0,10)}.csv`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
</body>