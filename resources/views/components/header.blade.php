<!-- header pc -->

<header class="container-fluid d-none d-md-block">
    <div class="row header">
        <div class="col-12">
            <x-navbar />
        </div>
        <div class="col-12 text-white d-flex align-items-start justify-content-center flex-column">
            <img src="media/logo.png" class="logo ml-15" alt="logo">
            <h1 class="ml-4 fs-9">Cucina Italiana</h1>
            <h3 class="ml-4 mt-text-uppercase mt-5 fst-italic fs-0">Lorem ipsum dolor</h3>
            <div class="btn btn-light text-uppercase ml-4 mt-5 btn-custom">
                Per saperne di più
            </div>
            <p class="ml-4 mt-3 mb-6">Lorem ipsum dolor sit amet consectetur,adipisicing elit. Sed quidem at
                <br>deleniti mollitia est quas, ut quae alias. Officiis nemo eveniet, <br>accusamus impedit dolor
                quidem expedita soluta <br>recusandae porro quia?</p>
        </div>
    </div>
</header>

<!-- navbar smart -->
<div class="d-block d-md-none">
    <x-navbar />
</div>

{{-- header sma --}}
<section class="container-fluid d-block d-md-none">
    <div class="row header-sma">
        <div class="col-12 d-flex justify-content-center align-items-center flex-column text-center">
            <h1 class="fs-9 text-white">Cucina Italiana</h1>
            <div class="btn btn-light text-uppercase btn-custom">
                Per saperne di più
            </div>
        </div>
    </div>
</section>