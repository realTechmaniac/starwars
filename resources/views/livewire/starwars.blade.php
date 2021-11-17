<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="my-3">Films</h4>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    @foreach ($filmresults as $film )
                        <div class = "col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title mt-0">Title: {{$film['title']}} </h4>
                                    <p class="card-text">Director :  {{$film['director']}}</p>
                                    <p class="card-text">
                                        <small class="text-muted">Release Date : {{\Carbon\Carbon::parse($film['release_date'])->format('M d, Y')}}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>  
    
    <div class = "text-center pt-3">
        <a wire:click = "load" class = "btn btn-dark">LOAD MORE</a>
    </div>
    <!-- end row -->
</div>