<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>View QR</title>
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
                <div class="card component-card_2">


                    <div class="visible-print text-center m-5" id="qrcode-container">
                        {!! QrCode::size(200)->generate(Request::url()) !!}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Scan above qr</h5>
                        <h5 class="text-center"><button class="btn btn-primary text-center" onclick="printQR()">Print</button></h5>
                    </div>
                </div>


            </div>









        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
<script>
    function printQR() {
       var divContents = document.getElementById("qrcode-container").innerHTML; 
            var a = window.open('', '', 'height=1200, width=1000'); 
            a.document.write('<html>'); 
            a.document.write('<body > <h1>Print application QR</h1> <br>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
    }
</script>

    @include('adminLayouts/adminfooter')



</body>

</html>
