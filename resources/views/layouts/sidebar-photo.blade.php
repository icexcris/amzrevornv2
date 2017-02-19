<div class="col-md-4 ">
    <div class="well1">
        
        <!-- Blog Categories Well -->
        <div >
            <img src="{{ asset('/images/adsense-ad.png') }}" alt="Smiley face" class="img img-responsive">
        </div>
        <h4>Categoris</h4>
        <div class="col-md-12">
            
             <ul class="list-unstyled">
            @foreach($photo_cats as $cat)
            <li><a href="{{ route('post.photos', $cat->slug) }}">{{ $cat->name }}</a></li>
            @endforeach
        </ul>
            
            
        </div>
        
        <!-- Side Widget Well -->
        <div ><h4>Most Popular post </h4>
            <div >
                <img src="{{ asset('/images/adsense-ad.png') }}" alt="Smiley face" class="img img-responsive">
            </div>
            <ol>
            @foreach($most_recent_photos as $recent)
                <li><a href="{{ route('photos.show', [$recent->slug, $recent->id]) }}">{{ $recent->title }}</a></li>
            @endforeach
        </ol>
        </div>
    </div>
</div>