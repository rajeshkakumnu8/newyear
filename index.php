<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Create Product | Larkon - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully responsive premium admin dashboard template" />
    <meta name="author" content="Techzaa" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Vendor css (Require in all Page) -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="assets/js/config.js"></script>
</head>

<body>
    <style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border: 1px solid #ccc;
    }

    .dropdown-content label {
        padding: 8px 12px;
        display: block;
        cursor: pointer;
    }

    .dropdown-content label:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    input[type="text"] {
        width: 200px;
        padding: 8px;
    }
    .product-details {
            border: 1px solid #ccc;
            padding: 15px;
            max-width: 600px;
            margin: auto;
        }
        .product-details img {
            max-width: 100%;
            height: auto;
        }
        .product-details h2 {
            margin: 10px 0;
        }
    </style>
    <script>
    // Handle dynamic selection and update input field
    document.querySelectorAll('.dropdown-content input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const dropdown = this.closest('.dropdown');
            const input = dropdown.querySelector('input[type="text"]');
            const selectedOptions = Array.from(
                dropdown.querySelectorAll('input[type="checkbox"]:checked')
            ).map(option => option.value);

            input.value = selectedOptions.join(', ');
        });
    });
    </script>
    <!-- START Wrapper -->
    <div class="wrapper">

        <!-- ========== Topbar Start ========== -->
        <header class="topbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="d-flex align-items-center">
                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <button type="button" class="button-toggle-menu me-2">
                                <iconify-icon icon="solar:hamburger-menu-broken" class="fs-24 align-middle">
                                </iconify-icon>
                            </button>
                        </div>

                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Create Product</h4>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-1">

                        <!-- Theme Color (Light/Dark) -->
                        <div class="topbar-item">
                            <button type="button" class="topbar-button" id="light-dark-mode">
                                <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                            </button>
                        </div>

                        <!-- Notification -->
                        <div class="dropdown topbar-item">
                            <button type="button" class="topbar-button position-relative"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <iconify-icon icon="solar:bell-bing-bold-duotone" class="fs-24 align-middle">
                                </iconify-icon>
                                <span
                                    class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill">3<span
                                        class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu py-0 dropdown-lg dropdown-menu-end"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 280px;">
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom text-wrap">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-1.jpg"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-1" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0"><span class="fw-medium">Josephine Thompson
                                                    </span>commented on admin panel <span>" Wow 😍! this admin looks
                                                        good and awesome design"</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span
                                                        class="avatar-title bg-soft-info text-info fs-20 rounded-circle">
                                                        D
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold">Donoghue Susan</p>
                                                <p class="mb-0 text-wrap">
                                                    Hi, How are you? What about our next meeting
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-3" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold">Jacob Gines</p>
                                                <p class="mb-0 text-wrap">Answered to your comment on the cash flow
                                                    forecast's graph 🔔.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span
                                                        class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle">
                                                        <iconify-icon icon="iconamoon:comment-dots-duotone">
                                                        </iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold text-wrap">You have received <b>20</b> new
                                                    messages in the
                                                    conversation</p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-5.jpg"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-5" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold">Shawn Bunch</p>
                                                <p class="mb-0 text-wrap">
                                                    Commented on Admin
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center py-3">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">View All Notification
                                        <i class="bx bx-right-arrow-alt ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Theme Setting -->
                        <div class="topbar-item d-none d-md-flex">
                            <button type="button" class="topbar-button" id="theme-settings-btn"
                                data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas"
                                aria-controls="theme-settings-offcanvas">
                                <iconify-icon icon="solar:settings-bold-duotone" class="fs-24 align-middle">
                                </iconify-icon>
                            </button>
                        </div>

                        <!-- Activity -->
                        <div class="topbar-item d-none d-md-flex">
                            <button type="button" class="topbar-button" id="theme-settings-btn"
                                data-bs-toggle="offcanvas" data-bs-target="#theme-activity-offcanvas"
                                aria-controls="theme-settings-offcanvas">
                                <iconify-icon icon="solar:clock-circle-bold-duotone" class="fs-24 align-middle">
                                </iconify-icon>
                            </button>
                        </div>

                        <!-- User -->
                        <div class="dropdown topbar-item">
                            <a type="button" class="topbar-button" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle" width="32" src="assets/images/users/avatar-1.jpg"
                                        alt="avatar-3">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Gaston!</h6>
                                <a class="dropdown-item" href="pages-profile.php">
                                    <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Profile</span>
                                </a>
                                <a class="dropdown-item" href="apps-chat.php">
                                    <i class="bx bx-message-dots text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Messages</span>
                                </a>

                                <a class="dropdown-item" href="pages-pricing.php">
                                    <i class="bx bx-wallet text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Pricing</span>
                                </a>
                                <a class="dropdown-item" href="pages-faqs.php">
                                    <i class="bx bx-help-circle text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Help</span>
                                </a>
                                <a class="dropdown-item" href="auth-lock-screen.php">
                                    <i class="bx bx-lock text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Lock screen</span>
                                </a>

                                <div class="dropdown-divider my-1"></div>

                                <a class="dropdown-item text-danger" href="auth-signin.php">
                                    <i class="bx bx-log-out fs-18 align-middle me-1"></i><span
                                        class="align-middle">Logout</span>
                                </a>
                            </div>
                        </div>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block ms-2">
                            <div class="position-relative">
                                <input type="search" class="form-control" placeholder="Search..." autocomplete="off"
                                    value="">
                                <iconify-icon icon="solar:magnifer-linear" class="search-widget-icon"></iconify-icon>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Activity Timeline -->
        <div>
            <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-activity-offcanvas"
                style="max-width: 450px; width: 100%;">
                <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                    <h5 class="text-white m-0 fw-semibold">Activity Stream</h5>
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body p-0">
                    <div data-simplebar class="h-100 p-4">
                        <div class="position-relative ms-2">
                            <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-danger d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20">
                                        <iconify-icon icon="iconamoon:folder-check-duotone"></iconify-icon>
                                    </span>
                                    <div class="ms-2">
                                        <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Report-Fix / Update </h5>
                                        <p class="d-flex align-items-center">Add 3 files to <span
                                                class=" d-flex align-items-center text-primary ms-1">
                                                <iconify-icon icon="iconamoon:file-light"></iconify-icon> Tasks
                                            </span></p>
                                        <div class="bg-light bg-opacity-50 rounded-2 p-2">
                                            <div class="row">
                                                <div class="col-lg-6 border-end border-light">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="bx bxl-figma fs-20 text-red"></i>
                                                        <a href="#!" class="text-dark fw-medium">Concept.fig</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="bx bxl-file-doc fs-20 text-success"></i>
                                                        <a href="#!" class="text-dark fw-medium">larkon.docs</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mt-2 text-muted">Monday , 4:24 PM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-success d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20">
                                        <iconify-icon icon="iconamoon:check-circle-1-duotone"></iconify-icon>
                                    </span>
                                    <div class="ms-2">
                                        <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Project Status
                                        </h5>
                                        <p class="d-flex align-items-center mb-0">Marked<span
                                                class=" d-flex align-items-center text-primary mx-1">
                                                <iconify-icon icon="iconamoon:file-light"></iconify-icon> Design
                                            </span> as <span
                                                class="badge bg-success-subtle text-success px-2 py-1 ms-1">
                                                Completed</span></p>
                                        <div
                                            class="d-flex align-items-center gap-3 mt-1 bg-light bg-opacity-50 p-2 rounded-2">
                                            <a href="#!" class="fw-medium text-dark">UI/UX Figma Design</a>
                                            <div class="ms-auto">
                                                <a href="#!" class="fw-medium text-primary fs-18"
                                                    data-bs-toggle="tooltip" data-bs-title="Download"
                                                    data-bs-placement="bottom">
                                                    <iconify-icon icon="iconamoon:cloud-download-duotone">
                                                    </iconify-icon>
                                                </a>
                                            </div>
                                        </div>
                                        <h6 class="mt-3 text-muted">Monday , 3:00 PM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-primary d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-16">UI</span>
                                    <div class="ms-2">
                                        <h5 class="mb-1 text-dark fw-semibold fs-15">Larkon Application UI v2.0.0 <span
                                                class="badge bg-primary-subtle text-primary px-2 py-1 ms-1">
                                                Latest</span>
                                        </h5>
                                        <p>Get access to over 20+ pages including a dashboard layout, charts, kanban
                                            board, calendar, and pre-order E-commerce & Marketing pages.</p>
                                        <div class="mt-2">
                                            <a href="#!" class="btn btn-light btn-sm">Download Zip</a>
                                        </div>
                                        <h6 class="mt-3 text-muted">Monday , 2:10 PM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img
                                            src="assets/images/users/avatar-7.jpg" alt="avatar-5"
                                            class="avatar-sm rounded-circle"></span>
                                    <div class="ms-2">
                                        <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Alex Smith Attached Photos
                                        </h5>
                                        <div class="row g-2 mt-2">
                                            <div class="col-lg-4">
                                                <a href="#!">
                                                    <img src="assets/images/small/img-6.jpg" alt=""
                                                        class="img-fluid rounded">
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#!">
                                                    <img src="assets/images/small/img-3.jpg" alt=""
                                                        class="img-fluid rounded">
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#!">
                                                    <img src="assets/images/small/img-4.jpg" alt=""
                                                        class="img-fluid rounded">
                                                </a>
                                            </div>
                                        </div>
                                        <h6 class="mt-3 text-muted">Monday 1:00 PM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img
                                            src="assets/images/users/avatar-6.jpg" alt="avatar-5"
                                            class="avatar-sm rounded-circle"></span>
                                    <div class="ms-2">
                                        <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Rebecca J. added a new team
                                            member
                                        </h5>
                                        <p class="d-flex align-items-center gap-1">
                                            <iconify-icon icon="iconamoon:check-circle-1-duotone" class="text-success">
                                            </iconify-icon> Added a new member to Front Dashboard
                                        </p>
                                        <h6 class="mt-3 text-muted">Monday 10:00 AM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-warning d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20">
                                        <iconify-icon icon="iconamoon:certificate-badge-duotone"></iconify-icon>
                                    </span>
                                    <div class="ms-2">
                                        <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Achievements
                                        </h5>
                                        <p class="d-flex align-items-center gap-1 mt-1">Earned a <iconify-icon
                                                icon="iconamoon:certificate-badge-duotone" class="text-danger fs-20">
                                            </iconify-icon>" Best Product Award"</p>
                                        <h6 class="mt-3 text-muted">Monday 9:30 AM</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#!" class="btn btn-outline-dark w-100">View All</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Sidebar (Theme Settings) -->
        <div>
            <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
                <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                    <h5 class="text-white m-0">Theme Settings</h5>
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body p-0">
                    <div data-simplebar class="h-100">
                        <div class="p-3 settings-bar">

                            <div>
                                <h5 class="mb-3 font-16 fw-semibold">Color Scheme</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-light" value="light">
                                    <label class="form-check-label" for="layout-color-light">Light</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-dark" value="dark">
                                    <label class="form-check-label" for="layout-color-dark">Dark</label>
                                </div>
                            </div>

                            <div>
                                <h5 class="my-3 font-16 fw-semibold">Topbar Color</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                        id="topbar-color-light" value="light">
                                    <label class="form-check-label" for="topbar-color-light">Light</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                        id="topbar-color-dark" value="dark">
                                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                                </div>
                            </div>


                            <div>
                                <h5 class="my-3 font-16 fw-semibold">Menu Color</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-light" value="light">
                                    <label class="form-check-label" for="leftbar-color-light">
                                        Light
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label" for="leftbar-color-dark">
                                        Dark
                                    </label>
                                </div>
                            </div>

                            <div>
                                <h5 class="my-3 font-16 fw-semibold">Sidebar Size</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-default" value="default">
                                    <label class="form-check-label" for="leftbar-size-default">
                                        Default
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label" for="leftbar-size-small">
                                        Condensed
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-hidden" value="hidden">
                                    <label class="form-check-label" for="leftbar-hidden">
                                        Hidden
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-small-hover-active" value="sm-hover-active">
                                    <label class="form-check-label" for="leftbar-size-small-hover-active">
                                        Small Hover Active
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label" for="leftbar-size-small-hover">
                                        Small Hover
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="offcanvas-footer border-top p-3 text-center">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-danger w-100" id="reset-layout">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== App Menu Start ========== -->
        <div class="main-nav">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                <a href="index.php" class="logo-dark">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                    <img src="assets/images/logo-dark.png" class="logo-lg" alt="logo dark">
                </a>

                <a href="index.php" class="logo-light">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                    <img src="assets/images/logo-light.png" class="logo-lg" alt="logo light">
                </a>
            </div>

            <!-- Menu Toggle Button (sm-hover) -->
            <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon">
                </iconify-icon>
            </button>

            <div class="scrollbar" data-simplebar>
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title">General</li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProducts">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Products </span>
                        </a>
                        <div class="collapse" id="sidebarProducts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="product-list.php">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="product-grid.php">Grid</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="product-details.php">Details</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="product-edit.php">Edit</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="product-add.php">Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCategory">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Category </span>
                        </a>
                        <div class="collapse" id="sidebarCategory">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="category-list.php">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="category-edit.php">Edit</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="category-add.php">Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarInventory" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarInventory">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Inventory </span>
                        </a>
                        <div class="collapse" id="sidebarInventory">
                            <ul class="nav sub-navbar-nav">

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="inventory-warehouse.php">Warehouse</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="inventory-received-orders.php">Received Orders</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarOrders">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Orders </span>
                        </a>
                        <div class="collapse" id="sidebarOrders">
                            <ul class="nav sub-navbar-nav">

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="orders-list.php">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="order-detail.php">Details</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="order-cart.php">Cart</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="order-checkout.php">Check Out</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarPurchases" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarPurchases">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:card-send-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Purchases </span>
                        </a>
                        <div class="collapse" id="sidebarPurchases">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="purchase-list.php">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="purchase-order.php">Order</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="purchase-returns.php">Return</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarAttributes" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAttributes">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:confetti-minimalistic-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Attributes </span>
                        </a>
                        <div class="collapse" id="sidebarAttributes">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="attributes-list.php">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="attributes-edit.php">Edit</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="attributes-add.php">Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarInvoice">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Invoices </span>
                        </a>
                        <div class="collapse" id="sidebarInvoice">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="invoice-list.php">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="invoice-details.php">Details</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="invoice-add.php">Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="settings.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Settings </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Users</li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages-profile.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Profile </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarRoles">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Roles </span>
                        </a>
                        <div class="collapse" id="sidebarRoles">
                            <ul class="nav sub-navbar-nav">
                                <ul class="nav sub-navbar-nav">
                                    <li class="sub-nav-item">
                                        <a class="sub-nav-link" href="role-list.php">List</a>
                                    </li>
                                    <li class="sub-nav-item">
                                        <a class="sub-nav-link" href="role-edit.php">Edit</a>
                                    </li>
                                    <li class="sub-nav-item">
                                        <a class="sub-nav-link" href="role-add.php">Create</a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages-permissions.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:checklist-minimalistic-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Permissions </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCustomers">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Customers </span>
                        </a>
                        <div class="collapse" id="sidebarCustomers">
                            <ul class="nav sub-navbar-nav">

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="customer-list.php">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="customer-detail.php">Details</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarSellers">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:shop-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Sellers </span>
                        </a>
                        <div class="collapse" id="sidebarSellers">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="seller-list.php">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="seller-details.php">Details</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="seller-edit.php">Edit</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="seller-add.php">Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title mt-2">Other</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCoupons">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Coupons </span>
                        </a>
                        <div class="collapse" id="sidebarCoupons">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="coupons-list.php">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="coupons-add.php">Add</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages-review.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Reviews </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Other Apps</li>

                    <li class="nav-item">
                        <a class="nav-link" href="apps-chat.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:chat-round-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Chat </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="apps-email.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:mailbox-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Email </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="apps-calendar.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:calendar-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Calendar </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="apps-todo.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:checklist-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Todo </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Support</li>

                    <li class="nav-item">
                        <a class="nav-link" href="help-center.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:help-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Help Center </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages-faqs.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:question-circle-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> FAQs </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="privacy-policy.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:document-text-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Privacy Policy </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Custom</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarPages">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:gift-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Pages </span>
                        </a>
                        <div class="collapse" id="sidebarPages">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-starter.php">Welcome</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-comingsoon.php">Coming Soon</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-timeline.php">Timeline</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-pricing.php">Pricing</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-maintenance.php">Maintenance</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-404.php">404 Error</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="pages-404-alt.php">404 Error (alt)</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarAuthentication" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:lock-keyhole-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Authentication </span>
                        </a>
                        <div class="collapse" id="sidebarAuthentication">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-signin.php">Sign In</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-signup.php">Sign Up</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-password.php">Reset Password</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="auth-lock-screen.php">Lock Screen</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="widgets.php">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:atom-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text">Widgets</span>
                            <span class="badge bg-info badge-pill text-end">9+</span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Components</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarBaseUI" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarBaseUI">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:bookmark-square-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Base UI </span>
                        </a>
                        <div class="collapse" id="sidebarBaseUI">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-accordion.php">Accordion</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-alerts.php">Alerts</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-avatar.php">Avatar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-badge.php">Badge</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-breadcrumb.php">Breadcrumb</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-buttons.php">Buttons</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-card.php">Card</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-carousel.php">Carousel</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-collapse.php">Collapse</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-dropdown.php">Dropdown</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-list-group.php">List Group</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-modal.php">Modal</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-tabs.php">Tabs</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-offcanvas.php">Offcanvas</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-pagination.php">Pagination</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-placeholders.php">Placeholders</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-popovers.php">Popovers</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-progress.php">Progress</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-scrollspy.php">Scrollspy</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-spinners.php">Spinners</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-toasts.php">Toasts</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="ui-tooltips.php">Tooltips</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarExtendedUI" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarExtendedUI">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:case-round-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Advanced UI </span>
                        </a>
                        <div class="collapse" id="sidebarExtendedUI">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-ratings.php">Ratings</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-sweetalert.php">Sweet Alert</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-swiper-silder.php">Swiper Slider</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-scrollbar.php">Scrollbar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="extended-toastify.php">Toastify</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCharts">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:pie-chart-2-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Charts </span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-area.php">Area</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-bar.php">Bar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-bubble.php">Bubble</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-candlestick.php">Candlestick</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-column.php">Column</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-heatmap.php">Heatmap</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-line.php">Line</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-mixed.php">Mixed</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-timeline.php">Timeline</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-boxplot.php">Boxplot</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-treemap.php">Treemap</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-pie.php">Pie</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-radar.php">Radar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-radialbar.php">RadialBar</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-scatter.php">Scatter</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="charts-apex-polar-area.php">Polar Area</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarForms">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:book-bookmark-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Forms </span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-basic.php">Basic Elements</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-checkbox-radio.php">Checkbox &amp; Radio</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-choices.php">Choice Select</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-clipboard.php">Clipboard</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-flatepicker.php">Flatepicker</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-validation.php">Validation</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-wizard.php">Wizard</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-fileuploads.php">File Upload</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-editors.php">Editors</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-input-mask.php">Input Mask</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-range-slider.php">Slider</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarTables">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:tuning-2-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Tables </span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="tables-basic.php">Basic Tables</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="tables-gridjs.php">Grid Js</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarIcons">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:ufo-2-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Icons </span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-boxicons.php">Boxicons</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-solar.php">Solar Icons</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarMaps">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:streets-map-point-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Maps </span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="maps-google.php">Google Maps</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="maps-vector.php">Vector Maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:volleyball-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text">Badge Menu</span>
                            <span class="badge bg-danger badge-pill text-end">1</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarMultiLevelDemo" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarMultiLevelDemo">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:share-circle-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Menu Item </span>
                        </a>
                        <div class="collapse" id="sidebarMultiLevelDemo">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="javascript:void(0);">Menu Item 1</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link  menu-arrow" href="#sidebarItemDemoSubItem"
                                        data-bs-toggle="collapse" role="button" aria-expanded="false"
                                        aria-controls="sidebarItemDemoSubItem">
                                        <span> Menu Item 2 </span>
                                    </a>
                                    <div class="collapse" id="sidebarItemDemoSubItem">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="javascript:void(0);">Menu Sub item</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="javascript:void(0);">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:user-block-rounded-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Disable Item </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== App Menu End ========== -->

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

<!-- Start Container Fluid -->




<div class="container-xxl">

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Product Photo</h4>
        </div>
        <div class="card-body">
            <!-- File Upload -->
<form action="" method="post" class="dropzone" id="category-form" enctype="multipart/form-data" data-plugin="dropzone"
                data-previews-container="#file-previews"
                data-upload-preview-template="#uploadPreviewTemplate">
                <div class="fallback">
                <label for="product images">Select Multiple Images:</label>
                <input type="file" name="profileImages[]" id="profileImages" multiple class="form-control" accept="image/*" required>
                </div>
                <div class="dz-message needsclick">
                    <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                    <h3 class="mt-4">Upload your images here, or <span class="text-primary">click to
                            browse</span></h3>
                    <span class="text-muted fs-13">
                        1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                    </span>
                </div>
        </div>




        <!-- start -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Product Information</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">

                        <label for="product-categories" class="form-label">Product Categories</label>
                        <select class="form-control" id="product-categories" name="category_id"
                            onchange="reloadPage()">
                            <option value="">Choose a category</option>
                           <input type="text"></input>
                        </select>

                    </div>

                    <div class="col-lg-4">

                        <div class="mb-3">
                            <label for="product-subcategories" class="form-label">Sub Categories</label>
                            <select class="form-control" id="product-subcategories" name="subcategory_id">
                                <option value="">Choose a subcategory</option>
                                <input type="text"></input>
                            </select>
                        </div>

                    </div>


                    <!-- Product Name -->

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="product-name" name="product_name"
                                required>

                        </div>
                    </div>
                </div>

                <!-- Discount -->

                <div class="row">
                    <div class="col-lg-4">

                        <label for="discount" class="form-label">Discount</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                            <input type="number" class="form-control" id="discount" name="discount" required
                                step="0.01">
                        </div>

                    </div>




                    <!-- Weight -->

                    <div class="col-lg-4">

                        <div class="mb-3">
                            <label for="product-weight" class="form-label">Weight(grms)</label>
                            <input type="number" step="0.01" class="form-control" id="weight" name="weight"
                                required>

                        </div>

                    </div>




                    <!-- Gender -->
                    <div class="col-lg-4">

                        <label for="product-gender" class="form-label">Gender</label>
                        <select class="form-control" id="product-gender" name="gender">
                            <option value="">Choose gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unisex">Unisex</option>
                        </select>


                    </div>
                </div>




                <div class="col-lg-12">
                    <div class="mt-2">
                        <h5 class="text-dark fw-medium">Colors :</h5>
                        <div class="d-flex flex-wrap gap-2" role="group"
                            aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="black" name="colors[]"
                                value="black">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="black">
                                <i class="bx bxs-circle fs-18 text-dark"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="yellow" name="colors[]"
                                value="yellow">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="yellow">
                                <i class="bx bxs-circle fs-18 text-warning"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="white" name="colors[]"
                                value="white">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="white">
                                <i class="bx bxs-circle fs-18 text-white"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="red" name="colors[]" value="red">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="red">
                                <i class="bx bxs-circle fs-18 text-primary"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="green" name="colors[]"
                                value="green">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="green">
                                <i class="bx bxs-circle fs-18 text-success"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="blue" name="colors[]" value="blue">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="blue">
                                <i class="bx bxs-circle fs-18 text-danger"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="sky" name="colors[]" value="sky">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="sky">
                                <i class="bx bxs-circle fs-18 text-info"></i>
                            </label>

                            <input type="checkbox" class="btn-check" id="gray" name="colors[]" value="gray">
                            <label
                                class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                for="gray">
                                <i class="bx bxs-circle fs-18 text-secondary"></i>
                            </label>
                        </div>
                    </div>

                </div>
                <br>


                <!-- Discount -->

                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <label for="discount" class="form-label">Discount</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                <input type="number" class="form-control" id="discount" name="discount"
                                    required step="0.01">

                            </div>

                    </div>




                    <!-- Price -->

                    <div class="col-lg-6">

                        <label for="price" class="form-label">Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                            <input type="number" class="form-control" id="price" name="price" required
                                step="0.01">

                        </div>

                    </div>




                </div>
                <!-- Bangle Sizes -->
                <div class="size-selection mt-3">
                    <h5 class="text-dark fw-medium">Bangle Sizes:</h5>
                    <div class="d-flex flex-wrap gap-2" role="group" aria-label="Size selection">
                        <input type="checkbox" class="btn-check" id="size-2-4" name="size[]" value="2.4">
                        <label
                            class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                            for="size-2-4">
                            2.4
                        </label>

                        <input type="checkbox" class="btn-check" id="size-2-6" name="size[]" value="2.6">
                        <label
                            class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                            for="size-2-6">
                            2.6
                        </label>

                        <input type="checkbox" class="btn-check" id="size-2-8" name="size[]" value="2.8">
                        <label
                            class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                            for="size-2-8">
                            2.8
                        </label>
                    </div>
                </div>




                <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
<textarea class="form-control" id="description" name="description" rows="4" required></textarea>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        <div class="p-3 bg-light mb-3 rounded">
            <div class="row justify-content-end g-2">
                <div class="col-lg-4">
                    <a href="#!" class="btn btn-outline-secondary w-100">Create Product</a>
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>
            <!-- End Container Fluid -->

            <?php
// Database connection
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'boutique';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id']; 
    $product_name = $_POST['product_name'];
    $discount = $_POST['discount'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];
    $colors = implode(',', $_POST['colors']);
    $price = $_POST['price'];
    $size = implode(',', $_POST['size']);
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $subcategory_id = $_POST['subcategory_id'];

    // Handle file uploads
    $uploaded_images = [];
    if (isset($_FILES['profileImages']['name'])) {
        foreach ($_FILES['profileImages']['name'] as $key => $image_name) {
            $image_tmp_name = $_FILES['profileImages']['tmp_name'][$key];
            $image_destination = "uploads/" . $image_name;
            if (move_uploaded_file($image_tmp_name, $image_destination)) {
                $uploaded_images[] = $image_name;
            }
        }
    }
    $image_paths = implode(',', $uploaded_images);

    // Update query
    $query = "UPDATE products 
              SET 
                  product_name = ?, 
                  discount = ?, 
                  weight = ?, 
                  gender = ?, 
                  colors = ?, 
                  price = ?, 
                  size = ?, 
                  description = ?, 
                  category_id = ?, 
                  subcategory_id = ?, 
                  images = ? 
              WHERE product_id = ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param(
        'sdsdssssssi',
        $product_name,
        $discount,
        $weight,
        $gender,
        $colors,
        $price,
        $size,
        $description,
        $category_id,
        $subcategory_id,
        $image_paths,
        $product_id
    );

    if ($stmt->execute()) {
        echo "Product updated successfully!";
    } else {
        echo "Error updating product: " . $stmt->error;
    }
    $stmt->close();
}

// Fetch product details
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $query = "SELECT * FROM products WHERE product_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();
}
?>







            <!-- ========== Footer Start ========== -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone"
                                class="fs-18 align-middle text-danger"></iconify-icon> <a
                                href="https://1.envato.market/techzaa" class="fw-bold footer-text"
                                target="_blank">Techzaa</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ========== Footer End ========== -->

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->


    </div>
    <!-- END Wrapper -->

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="assets/js/vendor.js"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="assets/js/app.js"></script>

</body>



</html>