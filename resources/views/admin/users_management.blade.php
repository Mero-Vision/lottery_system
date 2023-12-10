<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>User Managements</title>
    <link href="{{ url('assets/css/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    @include('adminLayouts/adminheader')

</head>

<body>

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    @include('adminLayouts/navbar')

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Users</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            @include('adminLayouts/smallnav')
        </header>
    </div>
    <!--  END NAVBAR  -->




    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('adminLayouts/sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            <div class="container">

                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#userCreateModel">
                    Create Account
                </button>
                <div class="container table-responsive">


                    <table class="table table-hover table-striped text-dark" id="table_data">
                        <thead class="">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Address</th>
                                <th>Action</th>



                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>







        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->


    <div class="modal fade" id="userCreateModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create User Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name"
                                    name="name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    name="email">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="mobile no" class="form-label">Mobile No:</label>
                                <input type="text" class="form-control" id="mobile"
                                    placeholder="Enter mobile no" name="mobile_no">
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="address"
                                    placeholder="Enter address" name="address">
                            </div>
                        </div>

                        <div class="custom-file-container mt-3" data-upload-id="myFirstImage">
                            <label>Upload (Single File) <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                    accept="image/*">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>

                        <button type="button" class="btn btn-primary">Submit</button>


                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
                    
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('#table_data').DataTable({
                ajax: {
                    url: '/admin/users/data',
                    type: 'GET',
                    dataType: 'json',
                    processing: true,
                    serverSide: true,
                },
                processing: true,



                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "mobile_no"
                    },
                    {
                        "data": "address"
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-danger btn-sm" onclick="deleteAccess(' +
                                row.id +
                                ')">Delete</button> <button class="btn btn-success btn-sm" onclick="deleteAccess(' +
                                row.id + ')">Edit</button>';
                        }
                    }

                ],
                order: [
                    [0, 'desc']
                ],
                "dom": 'Bfrtip',
                "buttons": [{
                        "extend": 'copyHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'excelHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'csvHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'pdfHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'print',

                    }
                ]
            });
        });
    </script>
    <script type="text/javascript" src="{{ url('assets/js/file-upload-with-preview.min.js') }}"></script>
    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>

    @include('adminLayouts/adminfooter')


</body>

</html>
