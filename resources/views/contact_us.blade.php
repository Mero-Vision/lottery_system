<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Royal Lucky</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('homeLayout.header')
</head>

<body>

    @include('homeLayout.nav')



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact Us</li>
                </ol>
                <h2>Contact Us</h2>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Contact Section ======= -->

        <section id="contact" class="contact mt-3">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>If you have any inquiries, feedback, or concerns, please do not hesitate to contact us. Our
                        dedicated support team is here to assist you. Whether you have questions about the lottery
                        process, need assistance with the website, or have suggestions for improvement, we welcome your
                        communication.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                   

                    <div class="col-lg-12">
                       @livewire('contact-us-livewire')
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @include('homeLayout.footer')

</body>

</html>
