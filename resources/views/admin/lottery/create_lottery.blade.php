<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Create Lottery</title>
    <link href="{{ url('assets/css/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

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
                                <li class="breadcrumb-item active" aria-current="page"><span>Home</span></li>
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
                <div class="row">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Lottery Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter lottery name"
                            name="lottery_name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="date" placeholder="Enter date"
                            name="date">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="mobile no" class="form-label">Time:</label>
                        <input type="text" class="form-control" id="mobile" placeholder="Enter mobile no"
                            name="time">
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description:</label>
                        <input id="x" type="hidden" name="content">
                        <trix-editor input="x" style="min-height: 140px;"></trix-editor>
                    </div>

                </div>

                <div class="custom-file-container mt-3" data-upload-id="myFirstImage">
                    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear"
                            title="Clear Image">x</a></label>
                    <label class="custom-file-container__custom-file">
                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                            accept="image/*">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>

                <button type="button" class="btn btn-primary">Submit</button>


            </div><br>




        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->


    

    <script type="text/javascript" src="{{ url('assets/js/file-upload-with-preview.min.js') }}"></script>
    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
    @include('adminLayouts/adminfooter')

</body>

</html>
