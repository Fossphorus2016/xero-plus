<x-admin.layouts title="">
    <div class="container card shadow p-5 mt-5">
        <form>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="contact">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="issueDate" class="form-label">Issue date</label>
                    <input type="date" class="form-control" id="issueDate">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="expiryDate" class="form-label">Expiry date</label>
                    <input type="date" class="form-control" id="expiryDate">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="quoteNumber" class="form-label">Quote number</label>
                    <input type="text" class="form-control" id="quoteNumber" value="QU-0001">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="currency" class="form-label">Currency</label>
                    <select class="form-control" id="currency">
                        <option value="AFN">Afghan Afghani</option>
                        <!-- Add more currencies as needed -->
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="reference" class="form-label">Reference</label>
                    <input type="text" class="form-control" id="reference">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="project" class="form-label">Project</label>
                    <select class="form-control" id="project">
                        <option value="">Assign to project</option>
                        <!-- Add more project options as needed -->
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tax" class="form-label">Tax</label>
                    <select class="form-control" id="tax">
                        <option value="exclusive">Tax exclusive</option>
                        <!-- Add more tax options as needed -->
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <span class="btn-toggle text-primary" id="toggleTitleSummary">+ Add a title & summary</span>
                <div id="titleSummaryFields" class="mt-3 hidden">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="summary" class="form-label">Summary</label>
                        <textarea class="form-control" id="summary"></textarea>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Show/hide columns
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item toggle-column" href="#" data-column="item">Item</a></li>
                    <li><a class="dropdown-item toggle-column" href="#" data-column="qty">Quantity</a></li>
                    <li><a class="dropdown-item toggle-column" href="#" data-column="price">Price</a></li>
                    <li><a class="dropdown-item toggle-column" href="#" data-column="discount">Discount</a></li>
                </ul>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-item">Item</th>
                            <th class="col-desc">Description</th>
                            <th class="col-qty">Qty.</th>
                            <th class="col-price">Price</th>
                            <th class="col-disc">Disc.</th>
                            <th class="col-account">Account</th>
                            <th class="col-tax">Tax rate</th>
                            <th class="col-amount">Amount</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="quoteTableBody">
                        <tr>
                            <td class="col-item"><input type="text" class="form-control"></td>
                            <td class="col-desc"><input type="text" class="form-control"></td>
                            <td class="col-qty"><input type="number" class="form-control"></td>
                            <td class="col-price"><input type="number" class="form-control"></td>
                            <td class="col-disc"><input type="number" class="form-control"></td>
                            <td class="col-account"><input type="text" class="form-control"></td>
                            <td class="col-tax"><input type="text" class="form-control"></td>
                            <td class="col-amount"><input type="text" class="form-control" readonly></td>
                            <td><button type="button" class="btn btn-danger btn-sm remove-row">&times;</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <button type="button" class="btn btn-primary mt-3" id="addRowBtn">Add row</button>

            <div class="mb-3 mt-3">
                <label for="terms" class="form-label">Terms</label>
                <textarea class="form-control" id="terms"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Save Quote</button>
        </form>
    </div>


    <script>
        document.getElementById('toggleTitleSummary').addEventListener('click', function() {
            var titleSummaryFields = document.getElementById('titleSummaryFields');
            var toggleButton = document.getElementById('toggleTitleSummary');
            if (titleSummaryFields.classList.contains('hidden')) {
                titleSummaryFields.classList.remove('hidden');
                toggleButton.textContent = '- Remove title & summary';
            } else {
                titleSummaryFields.classList.add('hidden');
                toggleButton.textContent = '+ Add a title & summary';
            }
        });

        document.getElementById('addRowBtn').addEventListener('click', function() {
            var tableBody = document.getElementById('quoteTableBody');
            var newRow = `
                <tr>
                    <td class="col-item"><input type="text" class="form-control"></td>
                    <td class="col-desc"><input type="text" class="form-control"></td>
                    <td class="col-qty"><input type="number" class="form-control"></td>
                    <td class="col-price"><input type="number" class="form-control"></td>
                    <td class="col-disc"><input type="number" class="form-control"></td>
                    <td class="col-account"><input type="text" class="form-control"></td>
                    <td class="col-tax"><input type="text" class="form-control"></td>
                    <td class="col-amount"><input type="text" class="form-control" readonly></td>
                    <td><button type="button" class="btn btn-danger btn-sm remove-row">&times;</button></td>
                </tr>
            `;
            tableBody.insertAdjacentHTML('beforeend', newRow);
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-row')) {
                e.target.closest('tr').remove();
            }
        });

        document.querySelectorAll('.toggle-column').forEach(function(el) {
            el.addEventListener('click', function(e) {
                e.preventDefault();
                var columnClass = 'col-' + e.target.dataset.column;
                document.querySelectorAll('.' + columnClass).forEach(function(col) {
                    col.style.display = col.style.display === 'none' ? '' : 'none';
                });
            });
        });
    </script>
</x-admin.layouts>
