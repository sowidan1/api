<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Admin</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="front/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="front/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="front/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="front/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="front/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="front/vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                tadawi
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div>

    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here" />
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>

            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            {{-- <img src="front/vendors/images/helal.png" alt="" /> --}}
                        </span>
                        <span class="user-name">الهلال الاحمر</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon"
                            class="custom-control-input" value="icon-style-1" checked="" />
                        <label class="custom-control-label" for="sidebaricon-1"><i
                                class="fa fa-angle-down"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon"
                            class="custom-control-input" value="icon-style-2" />
                        <label class="custom-control-label" for="sidebaricon-2"><i
                                class="ion-plus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon"
                            class="custom-control-input" value="icon-style-3" />
                        <label class="custom-control-label" for="sidebaricon-3"><i
                                class="fa fa-angle-double-right"></i></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-1" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                class="ion-minus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-2" />
                        <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                aria-hidden="true"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-3" />
                        <label class="custom-control-label" for="sidebariconlist-3"><i
                                class="dw dw-check"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-4" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-4"><i
                                class="icon-copy dw dw-next-2"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-5" />
                        <label class="custom-control-label" for="sidebariconlist-5"><i
                                class="dw dw-fast-forward-1"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-6" />
                        <label class="custom-control-label" for="sidebariconlist-6"><i
                                class="dw dw-next"></i></label>
                    </div>
                </div>

                   <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">
                        Reset Settings
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">

                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-calendar4-week"></span><span class="mtext">Calendar</span>
                        </a>
                    </li>

                    <li>
                        <a href="chat.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Chat</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('addD') }}" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Add Doctor</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('addP') }}" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Add Patient</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
<br>
        <div class="row pb-10">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">75</div>
                            <div class="font-14 text-secondary weight-500">
                                Appointment
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#00eccf">
                                <i class="icon-copy dw dw-calendar1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">124,551</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Patient
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ff5b5b">
                                <span class="icon-copy ti-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">400+</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Doctor
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon">
                                <i
                                    class="icon-copy fa fa-stethoscope"
                                    aria-hidden="true"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">20k</div>
                            <div class="font-14 text-secondary weight-500">
                                money
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon">
                                <i
                                    class="icon-copy fa fa-stethoscope"
                                    aria-hidden="true"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box mb-30">

            <div class="pb-20">
                <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                    <table
                        class="table hover multiple-select-row data-table-export nowrap dataTable no-footer dtr-inline"
                        id="DataTables_Table_2" role="grid">
                        <thead>
                            <tr role="row">
                                <th class="table-plus datatable-nosort sorting_asc" rowspan="1" colspan="1"
                                    aria-label="Name">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                    colspan="1" aria-label="Age: activate to sort column ascending">Age</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                    colspan="1" aria-label="Office: activate to sort column ascending">Office</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                    colspan="1" aria-label="Address: activate to sort column ascending">Address
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                    colspan="1" aria-label="Start Date: activate to sort column ascending">Start
                                    Date</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                    colspan="1" aria-label="Salart: activate to sort column ascending">Salart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>20</td>
                                <td>Gemini</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>25</td>
                                <td>Gemini</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>20</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>18</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous">
                                <a href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0"
                                    class="page-link"><i class="ion-chevron-left"></i></a></li>
                            <li class="paginate_button page-item active"><a href="#"
                                    aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0"
                                    class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#"
                                    aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0"
                                    class="page-link">2</a></li>
                            <li class="paginate_button page-item next" id="DataTables_Table_2_next"><a href="#"
                                    aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0"
                                    class="page-link"><i class="ion-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>


    <!-- welcome modal end -->
    <!-- js -->
    <script src="front/vendors/scripts/core.js"></script>
    <script src="front/vendors/scripts/script.min.js"></script>
    <script src="front/vendors/scripts/process.js"></script>
    <script src="front/vendors/scripts/layout-settings.js"></script>
    <script src="front/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="front/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="front/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="front/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="front/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="front/vendors/scripts/dashboard3.js"></script>
</body>

</html>
