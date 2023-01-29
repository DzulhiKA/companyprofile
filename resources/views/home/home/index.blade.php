<style>
    .wrapper-img-banner {
        max-width: 100%;
        max-height: 400px;
    }

    .img-banner {
        width: 100%;
    }
</style>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="wrapper-img-banner">
                <img src="img/company-background.jpg" class="img-banner" alt="">
            </div>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>


        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container mt-5">
    <div class="text-center">
        <h4 class="">About</h4>
        <p>Anda tahu kami? Kami akan beritahu anda</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="/img/work.jpg" width="100%" alt="">
    </div>
    <div class="col-md-6">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure architecto, commodi id voluptatum dolor non sequi. Consectetur esse a fugit consequatur quae nesciunt nihil accusantium atque dolore nulla. Recusandae magni quae accusantium tenetur sunt doloribus, 
        quis dolor id modi nihil sequi ad labore cumque est excepturi natus rerum itaque veritatis possimus obcaecati dolorem voluptatibus? 
        Qui deleniti perspiciatis laboriosam? Nihil aliquam reiciendis ex officiis amet repudiandae maiores iusto fugit consequuntur voluptas 
        esse tempora quasi voluptatem, alias quis quo sapiente. Amet, doloremque accusamus fugiat ipsam, consequatur nulla voluptatum quas illo est 
        nobis reiciendis at quisquam blanditiis, eum delectus maiores nam ex velit!</p>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo laboriosam suscipit eius obcaecati minima itaque maiores eligendi dicta commodi ullam 
            distinctio fugiat illo harum voluptates, voluptatibus quis? Eaque dolorem ducimus exercitationem, totam vitae recusandae. Doloribus facilis, 
           </p>
</div>
</div>
</div>

<div class="bg-success my-5">
    <div class="container py-5">
        <div class="text-white"></div>
        <h5>Pelajari Tentang Kami</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dicta illum neque quia voluptas sequi, voluptate error omnis. 
            Aut nihil consectetur voluptatum accusamus repudiandae unde nam laborum, deserunt corrupti rem?</p>
        </div>
    </div>
</div> 

<div class="container my-5">
    <div class="text-center">
        <h4 class="">Services</h4>
        <p>Apa yang kami lakukan? Kami akan beritahu anda</p>
    </div>

    <div class="row">

        @for ($i = 1; $i <= 4; $i++)
        <div class="col-md-3">
            <div class="text-center">
                <i class="fas fa-home fa-3x text-success"></i>
                <h5><b>Penanaman Pohon</b></h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, repudiandae?</p>
            </div>
        </div>
        @endfor
    </div>

    <div class="text-center mt-2">
        <a href="" class="btn btn-success px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
    </div>
    </div>

    <div class="bg-success my-5">
        <div class="container py-5">
            <div class="text-white"></div>
            <h5>Pelajari Tentang Kami</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dicta illum neque quia voluptas sequi, voluptate error omnis. 
                Aut nihil consectetur voluptatum accusamus repudiandae unde nam laborum, deserunt corrupti rem?</p>
            </div>
        </div>
    </div> 