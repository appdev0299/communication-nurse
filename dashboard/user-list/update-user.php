<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php include_once('../config/head.php'); ?>

<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <?php include_once('../config/aside.php'); ?>

            <div class="layout-page">

                <?php include_once('../config/nav.php'); ?>
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-bell me-1"></i> Notifications</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-account-settings-connections.html"><i class="bx bx-link-alt me-1"></i> Connections</a>
                                    </li>
                                </ul>
                                <div class="card mb-4">
                                    <h5 class="card-header">Profile Details</h5>
                                    <!-- Account -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">Upload new photo</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                                                </label>
                                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Reset</span>
                                                </button>

                                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="mb-2 col-md-6">
                                                    <label for="fullName" class="form-label">Full Name</label>
                                                    <input class="form-control" type="text" id="fullName" name="fullName" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="department" class="form-label">Department</label>
                                                    <input class="form-control" type="text" name="department" id="department" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="tel" class="form-label">Telephone</label>
                                                    <input class="form-control" type="text" id="tel" name="tel" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="personnel" class="form-label">Personnel</label>
                                                    <input type="text" class="form-control" id="personnel" name="personnel" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="social" class="form-label">Social Media</label>
                                                    <input type="text" class="form-control" id="social" name="social" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="option" class="form-label">Option</label>
                                                    <input type="text" class="form-control" id="option" name="option" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="dateA" class="form-label">Date A</label>
                                                    <input type="date" class="form-control" id="dateA" name="dateA" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="communicate" class="form-label">Communicate</label>
                                                    <input type="text" class="form-control" id="communicate" name="communicate" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="productionFile" class="form-label">Production File</label>
                                                    <input type="text" class="form-control" id="productionFile" name="productionFile" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="statusUser" class="form-label">Status User</label>
                                                    <input type="number" class="form-control" id="statusUser" name="statusUser" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="statusAdmin" class="form-label">Status Admin</label>
                                                    <input type="number" class="form-control" id="statusAdmin" name="statusAdmin" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="statusSs" class="form-label">Status SS</label>
                                                    <input type="number" class="form-control" id="statusSs" name="statusSs" />
                                                </div>
                                                <div class="mb-2 col-md-6">
                                                    <label for="createdAt" class="form-label">Created At</label>
                                                    <input type="text" class="form-control" id="createdAt" name="createdAt" disabled />
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php include_once('../config/footer.php'); ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>

                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
        $(document).ready(function() {
            var urlParams = new URLSearchParams(window.location.search);
            var id = urlParams.get('id');

            if (id !== null && id !== undefined) {
                $.ajax({
                    url: 'http://localhost/github-appdev/communication-nurse/dashboard/api.php?id=' + id,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        populateForm(response); // Call function to populate form with fetched data
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching user data:', error);
                    }
                });

            }

            function populateForm(userData) {
                $('#fullName').val(userData.fullname);
                $('#department').val(userData.department);
                // Populate other fields similarly
                $('#createdAt').val(userData.created_at); // Disabled field
            }
        });
    </script>

</body>

</html>