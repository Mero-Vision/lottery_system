<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Royal Lucky | Today Result</title>
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
                    <a class="btn btn-danger mt-2" href="{{ url('result/1-pm-result') }}">1:00 PM</a><br>
                    <a class="btn btn-danger mt-2" href="{{ url('result/6-pm-result') }}">6:00 PM</a><br>
                    <a class="btn btn-danger mt-2" href="{{ url('result/8-pm-result') }}">8:00 PM</a><br>
                </div>

                <div class="row text-center mt-4" data-aos="fade-up" data-aos-delay="100"
                    style="max-width: 500px; margin: 0 auto;">
                    @forelse ($onepmdata as $data)
                        <h5>Lottery Results for {{ \Carbon\Carbon::today()->format('F j, Y') }} - 1:00 PM Draw</h5>

                        <img src="{{ $data->getFirstMediaUrl('lottery_image') }}" style="max-width: 500px;"
                            class="mx-auto d-block img-fluid" />

                       
                    @empty
                    <h5>Lottery Results for {{ \Carbon\Carbon::today()->format('F j, Y') }} - 1:00 PM Draw</h5>
                        <img src="{{ url('assets/img/gif.gif') }}" style="max-width: 300px;" class="mx-auto d-block img-fluid"/>
                    @endforelse
                </div>


                <div class="row text-center mt-4" data-aos="fade-up" data-aos-delay="100"
                    style="max-width: 500px; margin: 0 auto;">
                    @forelse ($sixpmdata as $data)
                        <h5>Lottery Results for {{ \Carbon\Carbon::today()->format('F j, Y') }} - 6:00 PM Draw</h5>

                        <img src="{{ $data->getFirstMediaUrl('lottery_image') }}" style="max-width: 500px;"
                            class="mx-auto d-block img-fluid" />

                       
                    @empty
                    <h5>Lottery Results for {{ \Carbon\Carbon::today()->format('F j, Y') }} - 6:00 PM Draw</h5>
                        <img src="{{ url('assets/img/gif.gif') }}" style="max-width: 300px;" class="mx-auto d-block img-fluid"/>
                    @endforelse
                </div>

                <div class="row text-center mt-4" data-aos="fade-up" data-aos-delay="100"
                    style="max-width: 500px; margin: 0 auto;">
                    @forelse ($eightpmdata as $data)
                        <h5>Lottery Results for {{ \Carbon\Carbon::today()->format('F j, Y') }} - 8:00 PM Draw</h5>

                        <img src="{{ $data->getFirstMediaUrl('lottery_image') }}" style="max-width: 500px;"
                            class="mx-auto d-block img-fluid" />

                        
                    @empty
                    <h5>Lottery Results for {{ \Carbon\Carbon::today()->format('F j, Y') }} - 8:00 PM Draw</h5>
                        <img src="{{ url('assets/img/gif.gif') }}" style="max-width: 300px;" class="mx-auto d-block img-fluid"/>
                    @endforelse
                </div>



            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @include('homeLayout.footer')

</body>

</html>
