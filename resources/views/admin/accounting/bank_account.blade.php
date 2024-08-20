<x-admin.layouts title="Bank accounts">

    <nav class="bg-white p-5 ">
        <h3>Bank Accounts</h3>
    </nav>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>You currently have no bank accounts.</strong> <a href="{{ route('bank.search') }}" target="_blank">Click here to add one</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div>
                    <a href="{{ route('bank.search') }}" target="_blank">Add account</a>
                </div>
            </div>
        </div>
    </div>
</x-admin.layouts>
