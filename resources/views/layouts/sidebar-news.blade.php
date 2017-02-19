<div class="col-md-4 ">
  <div class="well1">
    <div>
      <h4 class="text-center">Don't want to miss updates? Please click the below button!</h4>
      
      <button class="btn btn-site btn-lg center-block"  title="Share this content" data-toggle="modal" data-target="#myModal" center-block >
      <i class="fa fa-envelope-o"></i> Newsletter
      </button>
    </div>
    
    <div class="col-md-12">
      <h4>Blog Search</h4>
      <div class="input-group">
        <input type="text" class="form-control">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
          <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
      <!-- /.input-group -->
    </div>
    <!-- Blog Categories Well -->
    
    
    <div class="row">
      <div class="col-md-6">
        <h4>News Categories</h4>
          <ul class="list-unstyled">
            @foreach($news_cats as $cat)
            <li><a href="{{ route('post.news', $cat->slug) }}">{{ $cat->name }}</a></li>
            @endforeach
        </ul>
        </ul>
        
      </div>
      <!-- /.row -->
    </div>
    
    <div ><h4>Recent post </h4>
      <div >
        <img src="{{ asset('/images/adsense-ad.png') }}" alt="Smiley face" class="img img-responsive">
      </div>
       <ol>
            @foreach($most_recent_news as $recent)
                <li><a href="{{ route('post.show', [$recent->slug, $recent->id]) }}">{{ $recent->title }}</a></li>
            @endforeach
        </ol>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i>Newsletter</h4>
      </div>
      <div class="modal-body">
        
        
        <p>Subscribe to our weekly Newsletter and stay tuned.</p>
        
        <form action="" method="post">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="your@email.com">
          </div>
          <br />
          <button type="submit" value="sub" name="sub" class="btn btn-site"><i class="fa fa-share"></i> Subscribe Now!</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-site" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>