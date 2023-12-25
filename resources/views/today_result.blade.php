<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Royal Japan | Today Result</title>
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
                    <li>Today Results</li>
                </ol>
                <h2>Today Results</h2>

            </div>
        </section><!-- End Breadcrumbs -->









        <!-- ======= Contact Section ======= -->

        <section id="contact" class="contact mt-3">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>🎉 **Lottery Results - <?php echo Date('Y'); ?>**🎉</h2>
                    <p>We are excited to announce the winning numbers for today's lottery draw. Check your
                        tickets carefully, and best of luck to all participants!</p>
                </div>

                <div class="row text-center" data-aos="fade-up" data-aos-delay="100"
                    style="max-width: 200px; margin: 0 auto;">
                    <button class="btn btn-danger mt-2">1:00 PM</button><br>
                    <button class="btn btn-danger mt-2">6:00 PM</button><br>
                    <button class="btn btn-danger mt-2">8:00 PM</button><br>
                </div>

                @foreach ($onepmdata as $data)
                <h1>{{$data->date}}</h1>
                    
                @endforeach


            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @include('homeLayout.footer')

</body>

</html>
