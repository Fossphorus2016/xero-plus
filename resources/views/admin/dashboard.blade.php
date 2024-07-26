<x-admin.layouts>
    <x-notification.notifications />

    @section('title', 'Contact Form')


    <div class="container p-5">
        <h2 class="pb-5">Contact Details</h2>
        <div class=" p-5 card shadow">
            <div class="d-flex align-content-center justify-content-end">

                <label style="height: 19px " class="mt-3 me-5">
                    Search :
                </label>

                <input type="text" id="tableSearch" class="form-control" style="width: 200px;">
            </div>
            <table
                class="table table-row-bordered table-row-gray-600 table-striped table-hover gy-5 rounded dataTable "
                id="table">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>SUBJECT</th>
                    <th>MESSAGE</th>
                    <th>ACTION</th>
                </thead>

            </table>
        </div>
    </div>

</x-admin.layouts>

{{-- <script>
    function contactDelete(contactId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you really want to delete this item?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                const form = document.getElementById('deleteForm_' + contactId);
                if (form) {
                    form.submit();
                } else {
                    console.error('Form element not found');
                }
            }
        });
    }
    $(document).ready(function() {
        var commonOptions = {
            ordering: false,
            "order": [],
            "dom": "<'row'" +
                "<'table-responsive'tr>" +
                "<'row'" +
                "<'col-sm-3 col-md-1 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-3 col-md-4 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">",

        };

        const tableDt = $('#table').dataTable(commonOptions);


        $('#tableSearch').on('input', function() {
            var searchValue = $(this).val().toLowerCase();
            $('#table').dataTable().fnFilter(searchValue);
        });
    });
</script> --}}
