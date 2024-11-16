<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic API CRUD | {{ env('AUTHOR_NAME') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
        }

        .modal-title {
            margin: 0;
        }

        footer {
            padding: 10px 0;
            text-align: center;
            background-color: #f8f9fa;
            flex-shrink: 0;
        }

        /* Style for the jumping tooltip */
        .jumping-tooltip {
            position: absolute;
            background-color: #ffc107;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            animation: jump 0.8s infinite;
            z-index: 1000;
            text-align: center;
            font-weight: bold;
        }

        /* Tooltip arrow pointing downwards */
        .jumping-tooltip::after {
            content: '';
            position: absolute;
            top: 100%;
            /* Position below the tooltip */
            left: 50%;
            margin-left: -10px;
            /* Center the arrow */
            border-width: 10px;
            border-style: solid;
            border-color: #ffc107 transparent transparent transparent;
            /* Arrow pointing downwards */
        }

        @keyframes jump {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Highlight effect on the button */
        .highlighted {
            box-shadow: 0 0 15px rgba(218, 163, 230, 0.8);
            border: 2px solid #dbafe9;
            transition: box-shadow 0.3s ease, border 0.3s ease;
        }

        /* Add spacing between buttons */
        .btn-group .btn {
            margin-right: 5px;
            /* Space between buttons */
        }

        /* Ensure no line wrapping */
        .btn-group {
            white-space: nowrap;
            /* Prevent buttons from wrapping */
        }
    </style>
</head>
<body>


    <div class="container">
        <marquee behavior="scroll" direction="left" style="color: red ; font-weight: bold;">
          Note: The example data for "electronic-devices" and "Inventory" will be deleted every 10 minutes.
      </marquee>
      <h1 class="text-center mb-4">Dynamic API CRUD</h1>
      <div class="d-flex justify-content-between align-items-center mb-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#createInventoryModal"
        id="add-inventory">Add Inventory</button>
        <!-- Tooltip element (hidden by default) -->
        <div id="jumping-tooltip" class="jumping-tooltip" style="display:none;">Click here to add inventory!</div>
        <div>
            <div>
                <label for="project-name" class="font-weight-bold">Project Name:</label>
                <input type="text" id="project-name" placeholder="Project Name" value="electronic-devices"
                class="form-control d-inline-block text-center w-auto ml-2 " disabled>
                <!-- New Delete Project Button -->
                <button id="delete-project-btn" class="btn btn-danger ml-2">Delete Project</button>
            </div>

            <div class="mt-2">
                <label for="module-name" class="font-weight-bold">Module Name:</label>
                <input type="text" id="module-name" placeholder="Module Name" value="inventory"
                class="form-control d-inline-block text-center w-auto ml-2" disabled>
                <!-- New Delete Module Button -->
                <button id="delete-module-btn" class="btn btn-danger ml-2">Delete Module</button>
            </div>

            <!-- <button id="sync-btn" class="btn btn-secondary">Sync</button> -->
        </div>
    </div>

    <div id="loader" style="display: none; text-align: center; margin: 20px;">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <table id="inventoryTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Device Name</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<!-- Create Product Modal -->
<div class="modal fade" id="createInventoryModal" tabindex="-1" role="dialog"
aria-labelledby="createInventoryModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="createInventoryModalLabel">Create Inventory</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Note -->
            <div class="alert alert-info mt-3">
                <p class="mb-0">
                    <strong>Note:</strong> The payload structure shown in this form is a basic example.
                    You can always modify the object as needed to fit your requirements. For more details,
                    or to experiment with the API request, you can try using the <code>curl</code> request,
                    which can be found
                    <a href="{{ route('quick-start') }}" target="_blank">here</a>.
                </p>
            </div>
            <form id="create-invet-form">
                <div class="form-group">
                    <label for="create-device-name">Device Name:</label>
                    <input type="text" class="form-control" id="create-device-name" name="device_name" required>
                </div>
                <div class="form-group">
                    <label for="create-brand">Brand:</label>
                    <input type="text" class="form-control" id="create-brand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="create-price">Price:</label>
                    <input type="number" class="form-control" id="create-price" name="price" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Inventory</button>
            </form>
        </div>
    </div>
</div>
</div>


<!-- Update Product Modal -->
<div class="modal fade" id="updateProductModal" tabindex="-1" role="dialog"
aria-labelledby="updateProductModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="updateProductModalLabel">Update Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="update-product-form">
                <input type="hidden" id="update-id">

                <div class="form-group">
                    <label for="update-device-name">Device Name:</label>
                    <input type="text" class="form-control" id="update-device-name" name="device_name" required>
                </div>
                <div class="form-group">
                    <label for="update-brand">Brand:</label>
                    <input type="text" class="form-control" id="update-brand" name="brand" required>
                </div>
                <div class="form-group">
                    <label for="update-price">Price:</label>
                    <input type="number" class="form-control" id="update-price" name="price" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>
</div>
</div>

<!-- View Product Modal -->
<div class="modal fade" id="viewProductModal" tabindex="-1" role="dialog" aria-labelledby="viewProductModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="viewProductModalLabel">View Module</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <ul id="view-product-details" class="list-group">
                <!-- Key-value pairs will be added here dynamically -->
            </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>

<footer style="justify-content: center;">
    {{ env('AUTHOR_NAME') }} | {{ env('AUTHOR_EMAIL') }}
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    let projectName = 'electronic-devices';
    let moduleName = 'inventory';
    let baseUrl = '{{ env('APP_URL') }}' + `/api/${projectName}/${moduleName}`;
    let inventoryTable;

    $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);
        const route = urlParams.get('route');

            // Show jumping tooltip if 'add-data' route param is present
        if (route === 'add-data') {
            showAddTooltip();
        }
            // Show tooltip for "Add Inventory" button
        function showAddTooltip() {
            const addInventoryBtn = document.getElementById('add-inventory');
            const tooltip = document.getElementById('jumping-tooltip');

                tooltip.innerHTML = 'Click here to add inventory!'; // Set tooltip content
                addInventoryBtn.classList.add('highlighted'); // Highlight the button

                // Position the tooltip near the "Add Inventory" button
                const rect = addInventoryBtn.getBoundingClientRect();
                tooltip.style.top = (rect.top + window.scrollY - 60) + 'px'; // Adjust the top position above the button
                tooltip.style.left = (rect.left + window.scrollX + (rect.width / 2) - 110) + 'px'; // Center the tooltip above the button
                tooltip.style.display = 'block';

                // Remove tooltip when button is clicked
                addInventoryBtn.addEventListener('click', () => {
                    tooltip.style.display = 'none';
                    addInventoryBtn.classList.remove('highlighted');
                });
            }

            // Show tooltip for "Update" button
            function showUpdateTooltip(updateBtn) {
                const tooltip = document.getElementById('jumping-tooltip');
                tooltip.innerHTML = 'Click here to update!'; // Set tooltip content for "Update"
                updateBtn.addClass('highlighted'); // Highlight the button

                // Position the tooltip near the update button
                const rect = updateBtn[0].getBoundingClientRect();
                tooltip.style.top = (rect.top + window.scrollY - 60) + 'px'; // Adjust the top position above the button
                tooltip.style.left = (rect.left + window.scrollX + (rect.width / 2) - 90) + 'px'; // Center the tooltip above the button
                tooltip.style.display = 'block';

                // Remove tooltip when button is clicked
                updateBtn.on('click', () => {
                    tooltip.style.display = 'none';
                    updateBtn.removeClass('highlighted');
                });
            }

            // Show tooltip for "Delete" button
            function showDeleteTooltip(deleteBtn) {
                const tooltip = document.getElementById('jumping-tooltip');
                tooltip.innerHTML = 'Click here to delete!'; // Set tooltip content for "Delete"
                deleteBtn.addClass('highlighted'); // Highlight the button

                // Position the tooltip near the delete button
                const rect = deleteBtn[0].getBoundingClientRect();
                tooltip.style.top = (rect.top + window.scrollY - 60) + 'px'; // Adjust the top position above the button
                tooltip.style.left = (rect.left + window.scrollX + (rect.width / 2) - 90) + 'px'; // Center the tooltip above the button
                tooltip.style.display = 'block';

                // Remove tooltip when button is clicked
                deleteBtn.on('click', () => {
                    tooltip.style.display = 'none';
                    deleteBtn.removeClass('highlighted');
                });
            }

            // Show tooltip for "View" button
            function showViewTooltip(viewBtn) {
                const tooltip = document.getElementById('jumping-tooltip');
                tooltip.innerHTML = 'Click here to view Details!'; // Set tooltip content for "View"
                viewBtn.addClass('highlighted'); // Highlight the button

                // Position the tooltip near the view button
                const rect = viewBtn[0].getBoundingClientRect();
                tooltip.style.top = (rect.top + window.scrollY - 60) + 'px'; // Adjust the top position above the button
                tooltip.style.left = (rect.left + window.scrollX + (rect.width / 2) - 110) + 'px'; // Center the tooltip above the button
                tooltip.style.display = 'block';

                // Remove tooltip when the button is clicked
                viewBtn.on('click', () => {
                    tooltip.style.display = 'none';
                    viewBtn.removeClass('highlighted');
                });
            }

            setTimeout(() => {
                loadProducts();
            }, 1000);

            inventoryTable = $('#inventoryTable').DataTable({
                columns: [
                {
                    data: 'device_name',
                        defaultContent: '<i>Not available</i>'  // Fallback content if 'device_name' is missing
                    },
                    {
                        data: 'price',
                        defaultContent: '<i>Not available</i>'  // Fallback content if 'price' is missing
                    },
                    {
                        data: 'brand',
                        defaultContent: '<i>Not available</i>'  // Fallback content if 'brand' is missing
                    },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return `
                            <div class="btn-group" role="group">
                            <button class="btn btn-warning btn-sm update-button" data-id="${data.id || ''}">Update</button>
                            <button class="btn btn-danger btn-sm delete-button" data-id="${data.id || ''}">Delete</button>
                            <button class="btn btn-info btn-sm view-button" data-id="${data.id || ''}">View</button>
                            </div>
                            `;
                        }
                    }
                    ]
            });

            // Handle Create Inventory Form Submission
            $('#create-invet-form').on('submit', function (event) {
                event.preventDefault();
                const createButton = $(this).find('button[type="submit"]');
                showLoader(createButton);

                const device_name = $('#create-device-name').val();
                const brand = $('#create-brand').val();
                const price = $('#create-price').val();
                console.log({price:price});

                fetch(baseUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ device_name, brand, price })
                })
                .then(response => response.json())
                .then(data => {
                    $('#createInventoryModal').modal('hide');
                    loadProducts();
                })
                .finally(() => {
                    hideLoader(createButton);
                });
            });

            // Handle Update Form Submission
            $('#update-product-form').on('submit', function (event) {
                event.preventDefault();
                const updateButton = $(this).find('button[type="submit"]');
                showLoader(updateButton);

                const id = $('#update-id').val();
                const device_name = $('#update-device-name').val();
                const brand = $('#update-brand').val();
                const price = $('#update-price').val();
                console.log({price:price});

                fetch(`${baseUrl}/${id}`, {
                    method: 'PUT',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ device_name, price, brand })
                })
                .then(response => response.json())
                .then(data => {
                    $('#updateProductModal').modal('hide');
                    loadProducts();
                })
                .finally(() => {
                    hideLoader(updateButton);
                });
            });

            // Handle Update Button Click
            $('#inventoryTable tbody').on('click', '.update-button', function () {
                const id = $(this).data('id');
                fetch(`${baseUrl}/${id}`)
                .then(response => response.json())
                .then(data => {
                    $('#update-id').val(data.data.id);
                    $('#update-device-name').val(data.data.device_name);
                    $('#update-price').val(data.data.price);
                    $('#update-brand').val(data.data.brand);
                    $('#updateProductModal').modal('show');
                });
            });

            // Handle Delete Button Click
            $('#inventoryTable tbody').on('click', '.delete-button', function () {
                const deleteButton = $(this);
                const id = deleteButton.data('id');

                if (confirm('Are you sure you want to delete this inventory item?')) {
                    showLoader(deleteButton);

                    fetch(`${baseUrl}/${id}`, { method: 'DELETE' })
                    .then(response => response.json())
                    .then(data => {
                        loadProducts();
                    })
                    .finally(() => {
                        hideLoader(deleteButton);
                    });
                }
            });

            // Handle View Button Click
            $('#inventoryTable tbody').on('click', '.view-button', function () {
                const id = $(this).data('id');
                fetchProductDetails(id);
            });

            // Fetch product details from the API and display them in the modal
            function fetchProductDetails(id) {
                fetch(`${baseUrl}/${id}`)
                .then(response => response.json())
                .then(data => {
                    console.log("data.datadata.data", data.data);
                        const productDetails = data.data; // Assuming the API response has a 'data' field with the product details
                        const productDetailsList = $('#view-product-details');

                        // Clear previous details
                        productDetailsList.empty();

                        // Populate the modal with key-value pairs
                        for (const [key, value] of Object.entries(productDetails)) {
                            // Format created_at and updated_at as DD/MM/YYYY
                            if (key === 'created_at' || key === 'updated_at') {
                                const date = new Date(value);
                                const formattedDate = date.toLocaleDateString('en-GB'); // DD/MM/YYYY format
                                productDetailsList.append(`<li class="list-group-item"><strong>${key}:</strong> ${formattedDate}</li>`);
                            } else {
                                productDetailsList.append(`<li class="list-group-item"><strong>${key}:</strong> ${value}</li>`);
                            }
                        }

                        // Show the modal
                        $('#viewProductModal').modal('show');
                    })
                .catch(error => {
                    console.error('Error fetching product details:', error);
                });
            }

            // Load Inventory Data into Table
            function loadProducts() {
                // Show the loader and hide the table
                $('#loader').show();
                $('#inventoryTable').hide();


                fetch(`${baseUrl}?limit=100&page=1`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',  
                    }
                })
                .then(response => response.json())
                .then(data => {
                    $('#loader').hide()
                    inventoryTable.clear();
                    const filterData = (data.data.results || []).filter(item => {
                        const { device_name, brand, price } = item;
                        return device_name || brand || price;
                    })
                    if (filterData.length > 0) {
                            // Add data to the table
                        inventoryTable.rows.add(filterData.map(item => ({
                            device_name: item.device_name || 'NA',
                            brand: item.brand || 'NA',
                            price: item.price !== undefined && item.price !== null ? item.price : 'NA',
                            id: item.id
                        })));
                            inventoryTable.draw(); // Render the table
                            $('#inventoryTable').show(); // Show the table after rendering
                        } else {
                            // Show "No data available" if the API returns no data
                            $('#inventoryTable').show();
                            inventoryTable.draw(); // Ensure DataTables "No data available" message appears
                        }
                        if (route === 'update-data') {
                            // Automatically show the tooltip for the first "Update" button
                            const firstUpdateBtn = $('.update-button').first();
                            console.log("firstUpdateBtn", firstUpdateBtn);
                            if (firstUpdateBtn.length > 0) {
                                showUpdateTooltip(firstUpdateBtn);
                            }
                        }
                        if (route === "delete-data") {
                            // Automatically show the tooltip for the first "Delete" button
                            const firstDeleteBtn = $('.delete-button').first();
                            if (firstDeleteBtn.length > 0) {
                                showDeleteTooltip(firstDeleteBtn);
                            }
                        }

                        if (route === "details-data") {
                            // Automatically show the tooltip for the first "View" button
                            const firstViewBtn = $('.view-button').first();
                            if (firstViewBtn.length > 0) {
                                showViewTooltip(firstViewBtn);
                            }
                        }
                    }).catch(error => {
                        console.error('Error fetching product data:', error);
                        $('#loader').hide();
                        $('#inventoryTable').show(); //
                    });
                }

            // Show loader on button
                function showLoader(button) {
                button.prop('disabled', true); // Disable the button
                button.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');
            }

            // Hide loader and reset button text
            function hideLoader(button) {
                button.prop('disabled', false); // Re-enable the button
                button.html(button.hasClass('delete-button') ? 'Delete' : 'Update Product'); // Reset button text based on the action
            }
        });
    </script>
</body>
</html>

