<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Royal Lucky | 8 PM Result</title>
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
                    <li>8 PM Lottery Results</li>
                </ol>
                <h2>8 PM Lottery Results</h2>

            </div>
        </section><!-- End Breadcrumbs -->









        <!-- ======= Contact Section ======= -->

        <section id="contact" class="contact mt-3">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>🎉 **Showing Lottery Results - 8 PM**🎉</h2>
                    <p>We are excited to announce the winning numbers for today's lottery draw. Check your
                        tickets carefully, and best of luck to all participants!</p>
                </div>
<br><br>
                <div class="row text-center mt-5" data-aos="fade-up" data-aos-delay="100"
                    style="max-width: 500px; margin: 0 auto;">

                    @forelse ($eightpmdata as $data)
                        <h5>Lottery Results for {{ \Carbon\Carbon::today()->format('F j, Y') }} - 8:00 PM Draw</h5>

                        <img src="{{ $data->getFirstMediaUrl('lottery_image') }}" style="max-width: 500px;" class="mx-auto d-block img-fluid"/>

                        <p class="mt-3">{!!$data->description!!}</p>
                    @empty
                        <img src="{{ url('assets/img/gif.gif') }}" style="max-width: 400px;"/>
                    @endforelse
                   
                </div>

               



                    





               



            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @include('homeLayout.footer')

</body>

</html>
