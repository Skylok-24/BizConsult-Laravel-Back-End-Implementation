@extends('admin.master')

@section('title', __('keywords.index'))

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h2 class=" page-title">{{__('keywords.welcome')}}</h2>
                    </div>
                    <div class="col-auto">
                        <form class="form-inline">
                            <div class="form-group d-none d-lg-inline">
                                <label for="reportrange" class="sr-only">Date Ranges</label>
                                <div id="reportrange" class="px-2 py-2 text-muted">
                                    <span class="small"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-sm"><span
                                        class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                <button type="button" class="btn btn-sm mr-2"><span
                                        class="fe fe-filter fe-16 text-muted"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mb-2 align-items-center">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row mt-1 align-items-center">
                                <div class="col-12 col-lg-4 text-left pl-4">
                                    <p class="mb-1 small text-muted">Balance</p>
                                    <span class="h3">$12,600</span>
                                    <span class="small text-muted">+20%</span>
                                    <span class="fe fe-arrow-up text-success fe-12"></span>
                                    <p class="text-muted mt-2"> Etiam ultricies nisi vel augue. Curabitur ullamcorper
                                        ultricies nisi. Nam eget dui </p>
                                </div>
                                <div class="col-6 col-lg-2 text-center py-4">
                                    <p class="mb-1 small text-muted">Today</p>
                                    <span class="h3">$2600</span><br />
                                    <span class="small text-muted">+20%</span>
                                    <span class="fe fe-arrow-up text-success fe-12"></span>
                                </div>
                                <div class="col-6 col-lg-2 text-center py-4 mb-2">
                                    <p class="mb-1 small text-muted">Goal Value</p>
                                    <span class="h3">$260</span><br />
                                    <span class="small text-muted">+6%</span>
                                    <span class="fe fe-arrow-up text-success fe-12"></span>
                                </div>
                                <div class="col-6 col-lg-2 text-center py-4">
                                    <p class="mb-1 small text-muted">Completions</p>
                                    <span class="h3">26</span><br />
                                    <span class="small text-muted">+20%</span>
                                    <span class="fe fe-arrow-up text-success fe-12"></span>
                                </div>
                                <div class="col-6 col-lg-2 text-center py-4">
                                    <p class="mb-1 small text-muted">Conversion</p>
                                    <span class="h3">6%</span><br />
                                    <span class="small text-muted">-2%</span>
                                    <span class="fe fe-arrow-down text-danger fe-12"></span>
                                </div>
                            </div>
                            <div class="chartbox mr-4">
                                <div id="areaChart"></div>
                            </div>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div>
                <div class="row items-align-baseline">
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-body mb-n3">
                                <div class="row items-align-baseline h-100">
                                    <div class="col-md-6 my-3">
                                        <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">Earning</strong>
                                        </p>
                                        <h3>$2,562</h3>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="col-md-6 my-4 text-center">
                                        <div lass="chart-box mx-4">
                                            <div id="radialbarWidget"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 border-top py-3">
                                        <p class="mb-1"><strong class="text-muted">Cost</strong></p>
                                        <h4 class="mb-0">108</h4>
                                        <p class="small text-muted mb-0"><span>37.7% Last week</span></p>
                                    </div> <!-- .col -->
                                    <div class="col-md-6 border-top py-3">
                                        <p class="mb-1"><strong class="text-muted">Revenue</strong></p>
                                        <h4 class="mb-0">1168</h4>
                                        <p class="small text-muted mb-0"><span>-18.9% Last week</span></p>
                                    </div> <!-- .col -->
                                </div>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-body">
                                <div class="chart-widget mb-2">
                                    <div id="radialbar"></div>
                                </div>
                                <div class="row items-align-center">
                                    <div class="col-4 text-center">
                                        <p class="text-muted mb-1">Cost</p>
                                        <h6 class="mb-1">$1,823</h6>
                                        <p class="text-muted mb-0">+12%</p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <p class="text-muted mb-1">Revenue</p>
                                        <h6 class="mb-1">$6,830</h6>
                                        <p class="text-muted mb-0">+8%</p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <p class="text-muted mb-1">Earning</p>
                                        <h6 class="mb-1">$4,830</h6>
                                        <p class="text-muted mb-0">+8%</p>
                                    </div>
                                </div>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-body">
                                <div class="d-flex mt-3 mb-4">
                                    <div class="flex-fill pt-2">
                                        <p class="mb-0 text-muted">Total</p>
                                        <h4 class="mb-0">108</h4>
                                        <span class="small text-muted">+37.7%</span>
                                    </div>
                                    <div class="flex-fill chart-box mt-n2">
                                        <div id="barChartWidget"></div>
                                    </div>
                                </div> <!-- .d-flex -->
                                <div class="row border-top">
                                    <div class="col-md-6 pt-4">
                                        <h6 class="mb-0">108 <span class="small text-muted">+37.7%</span></h6>
                                        <p class="mb-0 text-muted">Cost</p>
                                    </div>
                                    <div class="col-md-6 pt-4">
                                        <h6 class="mb-0">1168 <span class="small text-muted">-18.9%</span></h6>
                                        <p class="mb-0 text-muted">Revenue</p>
                                    </div>
                                </div> <!-- .row -->
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col-md -->
                </div> <!-- .row -->
                <div class="row">
                    <!-- Recent Activity -->
                    <div class="col-md-12 col-lg-4 mb-4">
                        <div class="card timeline shadow">
                            <div class="card-header">
                                <strong class="card-title">Recent Activity</strong>
                                <a class="float-right small text-muted" href="#!">View all</a>
                            </div>
                            <div class="card-body" data-simplebar
                                style="height:355px; overflow-y: auto; overflow-x: hidden;">
                                <h6 class="text-uppercase text-muted mb-4">Today</h6>
                                <div class="pb-3 timeline-item item-primary">
                                    <div class="pl-5">
                                        <div class="mb-1"><strong>@Brown Asher</strong><span
                                                class="text-muted small mx-2">Just create new layout Index, form,
                                                table</span><strong>Tiny Admin</strong></div>
                                        <p class="small text-muted">Creative Design <span class="badge badge-light">1h
                                                ago</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="pb-3 timeline-item item-warning">
                                    <div class="pl-5">
                                        <div class="mb-3"><strong>@Hester Nissim</strong><span
                                                class="text-muted small mx-2">has upload new files to</span><strong>Tiny
                                                Admin</strong></div>
                                        <div class="row mb-3">
                                            <div class="col"><img
                                                    src="{{ asset('admin-assets') }}/assets/products/p1.jpg"
                                                    alt="..." class="img-fluid rounded"></div>
                                            <div class="col"><img
                                                    src="{{ asset('admin-assets') }}/assets/products/p2.jpg"
                                                    alt="..." class="img-fluid rounded"></div>
                                            <div class="col"><img
                                                    src="{{ asset('admin-assets') }}/assets/products/p3.jpg"
                                                    alt="..." class="img-fluid rounded"></div>
                                            <div class="col"><img
                                                    src="{{ asset('admin-assets') }}/assets/products/p4.jpg"
                                                    alt="..." class="img-fluid rounded"></div>
                                        </div>
                                        <p class="small text-muted">Front-End Development <span
                                                class="badge badge-light">1h ago</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="pb-3 timeline-item item-success">
                                    <div class="pl-5">
                                        <div class="mb-3"><strong>@Kelley Sonya</strong><span
                                                class="text-muted small mx-2">has commented on</span><strong>Advanced
                                                table</strong></div>
                                        <div class="card d-inline-flex mb-2">
                                            <div class="card-body bg-light py-2 px-3 small rounded"> Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit. Integer dignissim nulla eu quam cursus
                                                placerat. Vivamus non odio ullamcorper, lacinia ante nec, blandit leo.
                                            </div>
                                        </div>
                                        <p class="small text-muted">Back-End Development <span
                                                class="badge badge-light">1h ago</span>
                                        </p>
                                    </div>
                                </div>
                                <h6 class="text-uppercase text-muted mb-4">Yesterday</h6>
                                <div class="pb-3 timeline-item item-warning">
                                    <div class="pl-5">
                                        <div class="mb-3"><strong>@Fletcher Everett</strong><span
                                                class="text-muted small mx-2">created new group for</span><strong>Tiny
                                                Admin</strong></div>
                                        <ul class="avatars-list mb-3">
                                            <li>
                                                <a href="#!" class="avatar avatar-sm">
                                                    <img alt="..." class="avatar-img rounded-circle"
                                                        src="{{ asset('admin-assets') }}/assets/avatars/face-1.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" class="avatar avatar-sm">
                                                    <img alt="..." class="avatar-img rounded-circle"
                                                        src="{{ asset('admin-assets') }}/assets/avatars/face-4.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" class="avatar avatar-sm">
                                                    <img alt="..." class="avatar-img rounded-circle"
                                                        src="{{ asset('admin-assets') }}/assets/avatars/face-3.jpg">
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="small text-muted">Front-End Development <span
                                                class="badge badge-light">1h ago</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="pb-3 timeline-item item-success">
                                    <div class="pl-5">
                                        <div class="mb-3"><strong>@Bertha Ball</strong><span
                                                class="text-muted small mx-2">has commented on</span><strong>Advanced
                                                table</strong></div>
                                        <div class="card d-inline-flex mb-2">
                                            <div class="card-body bg-light py-2 px-3"> Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Integer dignissim nulla eu quam cursus
                                                placerat. Vivamus non odio ullamcorper, lacinia ante nec, blandit leo.
                                            </div>
                                        </div>
                                        <p class="small text-muted">Back-End Development <span
                                                class="badge badge-light">1h ago</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="pb-3 timeline-item item-danger">
                                    <div class="pl-5">
                                        <div class="mb-3"><strong>@Lillith Joseph</strong><span
                                                class="text-muted small mx-2">has upload new files to</span><strong>Tiny
                                                Admin</strong></div>
                                        <div class="row mb-3">
                                            <div class="col"><img
                                                    src="{{ asset('admin-assets') }}/assets/products/p4.jpg"
                                                    alt="..." class="img-fluid rounded"></div>
                                            <div class="col"><img
                                                    src="{{ asset('admin-assets') }}/assets/products/p1.jpg"
                                                    alt="..." class="img-fluid rounded"></div>
                                            <div class="col"><img
                                                    src="{{ asset('admin-assets') }}/assets/products/p2.jpg"
                                                    alt="..." class="img-fluid rounded"></div>
                                        </div>
                                        <p class="small text-muted">Front-End Development <span
                                                class="badge badge-light">1h ago</span>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- / .card-body -->
                        </div> <!-- / .card -->
                    </div> <!-- / .col-md-6 -->
                    <!-- Striped rows -->
                    <div class="col-md-12 col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <strong class="card-title">Recent Data</strong>
                                <a class="float-right small text-muted" href="#!">View all</a>
                            </div>
                            <div class="card-body my-n2">
                                <table class="table table-striped table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2474</td>
                                            <th scope="col">Brown, Asher D.</th>
                                            <td>Ap #331-7123 Lobortis Avenue</td>
                                            <td>13/09/2020</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical"
                                                        type="button" id="dr1" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2786</td>
                                            <th scope="col">Leblanc, Yoshio V.</th>
                                            <td>287-8300 Nisl. St.</td>
                                            <td>04/05/2019</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical"
                                                        type="button" id="dr2" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr2">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2747</td>
                                            <th scope="col">Hester, Nissim L.</th>
                                            <td>4577 Cras St.</td>
                                            <td>04/06/2019</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2639</td>
                                            <th scope="col">Gardner, Leigh S.</th>
                                            <td>P.O. Box 228, 7512 Lectus Ave</td>
                                            <td>04/08/2019</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical"
                                                        type="button" id="dr4" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr4">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2238</td>
                                            <th scope="col">Higgins, Uriah L.</th>
                                            <td>Ap #377-5357 Sed Road</td>
                                            <td>04/01/2019</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical"
                                                        type="button" id="dr5" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr5">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- Striped rows -->
                </div> <!-- .row-->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-box fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Package has uploaded successfull</strong></small>
                                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-download fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Widgets are updated successfull</strong></small>
                                    <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-inbox fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Notifications have been sent</strong></small>
                                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-link fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Link was attached to menu</strong></small>
                                    <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .list-group -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-5">
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-success justify-content-center">
                                <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Control area</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Activity</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Droplet</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Upload</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-users fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Users</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Settings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
