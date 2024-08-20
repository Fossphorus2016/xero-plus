<x-admin.layouts title="Staff Permission">




    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="h6 mb-0">People who can use Projects</span>
                <a href="{{route('invite.user')}}" class="btn btn-success" target="_blank">Invite staff</a>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar bg-warning text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 40px; height: 40px;">
                        <span class="font-weight-bold">FA</span>
                    </div>
                    <div class="ml-3">
                        <strong>Faraz Ahmed (You)</strong><br>
                        <small class="text-muted">Admin - You cannot edit your own permissions</small>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-admin.layouts>
