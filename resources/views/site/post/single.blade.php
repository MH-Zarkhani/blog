@extends('site.index')

    @section('content')
        <img style="height: 300px;width: 100%;" src="{{ asset('images/blog/blog-bg.jpg') }}" alt="">
        <div class="single-blog-details">
            <h1 class="post-title">Tale in The Lover</h1>
            <p class="post-date">Posted on July 10, 2015</p>
            <div class="post-long-desc">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    desrunt mollit anim id est laborum. Sed ut per spiciatis unde omnis iste natus
                    error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                    fugit.</p>
                <p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                    magnam aliquam quaerat voluptatem.</p>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ulla mco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.</p>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    desrunt mollit anim id est laborum. Sed ut per spiciatis unde omnis iste natus
                    error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                    fugit.</p>
                <p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                    magnam aliquam quaerat voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia desrunt mollit anim id est laborum. Sed ut per spiciatis unde
                    omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                    vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                    aut odit aut fugit.</p>
                <p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                    magnam aliquam quaerat voluptatem.</p>
            </div>
            <div class="single-blog-bottom fix">
                <div class="post-social-links pull-left">
                    <p>
                        <span class="lbl">Share on&nbsp;&nbsp;-</span>
                        <span>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-pinterest"></i></a>
										</span>
                    </p>
                </div>
                <div class="post-tags pull-right">
                    <p>
                        <span class="lbl">Tags&nbsp;&nbsp;-</span>
                        <span>
											<a href="#">sports,</a>
											<a href="#">football,</a>
											<a href="#">soccer</a>
										</span>
                    </p>
                </div>
            </div>
            <div class="about-author fix">
                <h6 class="title">about the author</h6>
                <div class="author-img">
                    <img src="img/comments/author.jpg" alt="Author Image"/>
                </div>
                <div class="author-info">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div><!-- /.about-author -->
            <div class="comments-area">
                <h6 class="title">12 comments</h6>
                <ul class="comments-list">
                    <li class="single-comment">
                        <div class="comment-box">
                            <div class="comment-author">
                                <img src="img/comments/1.jpg" alt="Comment Author"/>
                            </div>
                            <div class="comment-info">
                                <p class="author-name"><a href="#">Laurel Lance</a></p>
                                <span class="comment-date">July 11, 2015</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod temp incididunt ut labore et dolore magna aliqua. Ut enim ad
                                    minim veniam nostrud exercitation ullamco laboris nisi ut commodo
                                    consequat.</p>
                                <a href="#" class="reply-link" title="Reply">reply</a>
                            </div>
                        </div>
                    </li><!-- /.single-comment -->
                    <li class="single-comment">
                        <div class="comment-box">
                            <div class="comment-author">
                                <img src="img/comments/2.jpg" alt="Comment Author"/>
                            </div>
                            <div class="comment-info">
                                <p class="author-name"><a href="#">Alex Reim</a></p>
                                <span class="comment-date">July 11, 2015</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod temp incididunt ut labore et dolore magna aliqua. Ut enim ad
                                    minim veniam nostrud exercitation ullamco laboris nisi ut commodo
                                    consequat.</p>
                                <a href="#" class="reply-link" title="Reply">reply</a>
                            </div>
                        </div>
                        <ul class="reply">
                            <li class="single-comment">
                                <div class="comment-box">
                                    <div class="comment-author">
                                        <img src="img/comments/author-small.jpg" alt="Comment Author"/>
                                    </div>
                                    <div class="comment-info">
                                        <p class="author-name"><a href="#">Wally West</a></p>
                                        <span class="comment-date">July 11, 2015</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod temp incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam nostrud exercitation ullamco laboris nisi ut commodo
                                            consequat.</p>
                                        <a href="#" class="reply-link" title="Reply">reply</a>
                                    </div>
                                </div>
                            </li><!-- /.single-comment -->
                        </ul><!-- /.reply -->
                    </li><!-- /.single-comment -->
                </ul>
            </div><!-- /.comments-area -->
            <div class="comment-form-area">
                <p>leave a comment</p>
                <form action="#" method="post">
                    <input type="text" placeholder="Name"/>
                    <input type="text" placeholder="Email"/>
                    <textarea placeholder="Message"></textarea>
                    <button type="submit" class="submit-btn">submit</button>
                </form>
            </div><!-- /.comment-form-area -->
        </div><!-- /.single-blog-details -->
    @endsection

