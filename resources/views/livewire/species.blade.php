<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="my-3">Species</h4>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    @foreach ($results as $result )
                        <div class = "col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title mt-0">Name: {{$result['name']}} </h4>
                                    <p class="card-text">Gender :  {{$result['classification']}}</p>
                                    <p class="card-text">
                                        <small class="text-muted">Average Height : {{$result['average_height']}}cm</small>
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