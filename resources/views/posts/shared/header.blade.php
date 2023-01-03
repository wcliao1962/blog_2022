<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to <a href="{{ route('posts.index', $blogger->id) }}">{{$blogger->name}}</a>'s Home!</h1>
        </div>
    </div>
</header>
