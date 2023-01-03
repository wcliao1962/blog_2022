<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">歡迎來到<a href="{{ route('posts.index', $blogger->id) }}">{{$blogger->name}}</a>的城邦!</h1>
        </div>
    </div>
</header>
