<x-admin.layouts title="Staff Time">





    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <i class="fas fa-info-circle"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <div class="circle-icon mr-3">
                                        <span class="fa fa-user">FA</span>
                                    </div>
                                    <span>faraz ahmed</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <span class="font-weight-bold">Total</span>
                                    <br>
                                    <span>0:00</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <span class="font-weight-bold">Chargeable %</span>
                                    <br>
                                    <span>n/a</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <span class="font-weight-bold">Chargeable</span>
                                    <br>
                                    <span>0:00</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <span class="font-weight-bold">Non-chargeable</span>
                                    <br>
                                    <span>0:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="circle-icon mr-3">
                                <span class="fa fa-user">FA</span>
                            </div>
                            <span>faraz ahmed</span>
                        </div>
                        <div class="mt-2">
                            <span>0 projects</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span>0:00</span>
                            </div>
                            <div>
                                <a href="{{route('time.entries')}} " class="btn btn-primary">View time entries</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin.layouts>
