<section class="single-similar-movie">
    <hr class="style-one my-5">
    <div class="container-fluid">
        <h2 class="my-5 text-white d-flex justify-content-center">Similar Movie</h2>
        <div class="row justify-content-center">
            <x-movies :movies="$similar" :genreMovies="$genreMovies"></x-movies>
        </div>
    </div>
</section>
