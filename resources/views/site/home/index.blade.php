@extends('site.index')

@section('title','Home')

@section('content')

    <div class="popular-posts-area">
        <h2 class="section-title">popular posts</h2>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="single-popular-post">
                    <div class="post-img">
                        <a href="#"><img src="{{ asset('images/blog/5.jpg') }}" alt="Popular Post"/></a>
                        <a href="#" class="post-tag">travel</a>
                        <div class="post-info">
                            <p>
                                <span class="post-date"><a href="#">July 10, 2015</a></span>
                                <span class="post-comments"><a href="#">3 comments</a></span>
                                <span class="post-social-links">
														<a href="#" data-toggle="tooltip" data-placement="bottom"
                                                           title="Likes"><i class="fa fa-heart"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom"
                                                           title="Facebook"><i class="fa fa-facebook"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom"
                                                           title="Twitter"><i class="fa fa-twitter"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom"
                                                           title="Google+"><i class="fa fa-google-plus"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom"
                                                           title="Pinterest"><i class="fa fa-pinterest"></i></a>
								</span>
                            </p>
                        </div>
                    </div>
                    <div class="post-content">
                        <h6 class="post-title"><a href="#">Savior of Hustler</a></h6>
                        <p class="post-short-desc">Lorem ipsum dolor sit amet, consegectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco
                            laboris nisi...</p>
                        <a href="#" class="continue-link">Continue Reading...</a>
                    </div>
                </div><!-- /.single-popular-post -->
            </div>
        </div>
    </div><!-- /.popular-posts-area -->

@endsection
