
    <div id="colorlib-reservation">
        <!-- <div class="container"> -->
        <div class="row">
            <div class="search-wrap">
                <div class="container">
                    <ul class="nav nav-tabs">
                        <!-- <li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li> -->
                        <li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
                        <!-- <li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car Rent</a></li> -->
                        <!-- <li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Cruises</a></li> -->
                    </ul>
                </div>
                <div class="tab-content">
                    <!-- <div id="flight" class="tab-pane fade in active">
                        <form method="post" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Where:</label>
                                        <div class="form-field">
                                            <input type="text" id="location" class="form-control" placeholder="Search Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="date">Check-in:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="date">Check-out:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="guests">Guest</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">1</option>
                                                <option value="#">2</option>
                                                <option value="#">3</option>
                                                <option value="#">4</option>
                                                <option value="#">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div> -->
                    <div id="hotel" class="tab-pane fade in active">
                        <form method="post" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="booknow">
                                        <h2>Đặt Ngay</h2>
                                        <span>Giá Phòng Tốt Nhất</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Ngày Đến:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Ngày Đi:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="guests">Số Người</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control" >
                                                <option  style="background-color:rgb(44,46,62);" value="#">1</option>
                                                <option style="background-color:rgb(44,46,62);" value="#">2</option>
                                                <option style="background-color:rgb(44,46,62);" value="#">3</option>
                                                <option style="background-color:rgb(44,46,62);" value="#">4</option>
                                                <option style="background-color:rgb(44,46,62);" value="#">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="submit" id="submit" value="ĐẶT NGAY" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <div id="car" class="tab-pane fade">
                        <form method="post" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="date">Where:</label>
                                        <div class="form-field">
                                            <input type="text" id="location" class="form-control" placeholder="Search Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Start Date:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Return Date:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="submit" id="submit" value="Find Car" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div> -->
                    <!-- <div id="cruises" class="tab-pane fade">
                        <form method="post" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="date">Where:</label>
                                        <div class="form-field">
                                            <input type="text" id="location" class="form-control" placeholder="Search Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Start Date:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="guests">Categories</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="category" id="category" class="form-control">
                                                <option value="#">Suite</option>
                                                <option value="#">Super Deluxe</option>
                                                <option value="#">Balcony</option>
                                                <option value="#">Economy</option>
                                                <option value="#">Luxury</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="submit" id="submit" value="Find Cruises" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="colorlib-services">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 animate-box text-center aside-stretch">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-around"></i>
                        </span>
                        <h3>Amazing Travel</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-boat"></i>
                        </span>
                        <h3>Our Cruises</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-car"></i>
                        </span>
                        <h3>Book Your Trip</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-postcard"></i>
                        </span>
                        <h3>Nice Support</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<div class="colorlib-tour colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Địa Điểm Phổ Biến</h2>
                <p>Những địa điểm không thể không đến khi tới với Cái Chiên, đi câu mực, tắm biển bãi biển đầu rồng hoang sơ, bãi biển 2 trầm lắng cho người không thích ồn ào..v..v</p>
            </div>
        </div>
    </div>
    <div class="tour-wrap">
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(./public/images/tour-1.jpg);">
            </div>
            <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                    <h2>Athens, Greece</h2>
                    <span class="city">Athens, Greece</span>
                    <span class="price">$450</span>
                </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(./public/images/tour-2.jpg);">
            </div>
            <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                    <h2>Family Tour in Thailand</h2>
                    <span class="city">Athens, Greece</span>
                    <span class="price">$450</span>
                </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(./public/images/tour-3.jpg);">
            </div>
            <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                    <h2>Family Tour in Philippines</h2>
                    <span class="city">Lipa, Philippines</span>
                    <span class="price">$450</span>
                </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(./public/images/tour-4.jpg);">
            </div>
            <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                    <h2>Family Tour in Greece</h2>
                    <span class="city">Athens, Greece</span>
                    <span class="price">$450</span>
                </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(./public/images/tour-5.jpg);">
            </div>
            <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                    <h2>Family Tour in Greece</h2>
                    <span class="city">Athens, Greece</span>
                    <span class="price">$450</span>
                </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(./public/images/tour-6.jpg);">
            </div>
            <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                    <h2>Family Tour in Greece</h2>
                    <span class="city">Athens, Greece</span>
                    <span class="price">$450</span>
                </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(./public/images/tour-7.jpg);">
            </div>
            <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                    <h2>Family Tour in Greece</h2>
                    <span class="city">Athens, Greece</span>
                    <span class="price">$450</span>
                </span>
        </a>
        <a href="#" class="tour-entry animate-box">
            <div class="tour-img" style="background-image: url(./public/images/tour-8.jpg);">
            </div>
            <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                    <h2>Family Tour in Greece</h2>
                    <span class="city">Athens, Greece</span>
                    <span class="price">$450</span>
                </span>
        </a>
    </div>
</div>


<!-- <div id="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Recent Blog</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="blog-flex">
            <div class="f-entry-img" style="background-image: url(./public/images/blog-3.jpg);">
            </div>
            <div class="blog-entry aside-stretch-right">
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <a href="blog.html" class="blog-post">
                            <span class="img" style="background-image: url(./public/images/blog-1.jpg);"></span>
                            <div class="desc">
                                <span class="date">Feb 22, 2018</span>
                                <h3>A Definitive Guide to the Best Dining</h3>
                                <span class="cat">Activities</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="blog.html" class="blog-post">
                            <span class="img" style="background-image: url(./public/images/blog-2.jpg);"></span>
                            <div class="desc">
                                <span class="date">Feb 22, 2018</span>
                                <h3>How These 5 People Found The Path to Their Dream Trip</h3>
                                <span class="cat">Activities</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="blog.html" class="blog-post">
                            <span class="img" style="background-image: url(./public/images/blog-4.jpg);"></span>
                            <div class="desc">
                                <span class="date">Feb 22, 2018</span>
                                <h3>Our Secret Island Boat Tour Is just for You</h3>
                                <span class="cat">Activities</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
;
<!-- <div id="colorlib-intro" class="intro-img" style="background-image: url(./public/images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="intro-desc">
                        <div class="text-salebox">
                            <div class="text-lefts">
                                <div class="sale-box">
                                    <div class="sale-box-top">
                                        <h2 class="number">45</h2>
                                        <span class="sup-1">%</span>
                                        <span class="sup-2">Off</span>
                                    </div>
                                    <h2 class="text-sale">Sale</h2>
                                </div>
                            </div>
                            <div class="text-rights">
                                <h3 class="title">Just hurry up limited offer!</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                <p><a href="#" class="btn btn-primary">Book Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="video-wrap">
                        <div class="video colorlib-video" style="background-image: url(./public/images/img_bg_2.jpg);">
                            <a href="" class="popup-vimeo"><i class="icon-video"></i></a>
                            <div class="video-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<div id="colorlib-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Recommended Hotels</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="hotel-entry">
                            <a href="hotels.html" class="hotel-img" style="background-image: url(./public/images/hotel-1.jpg);">
                                <p class="price"><span>$120</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                <h3><a href="#">Hotel Edison</a></h3>
                                <span class="place">New York, USA</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hotel-entry">
                            <a href="hotels.html" class="hotel-img" style="background-image: url(./public/images/hotel-2.jpg);">
                                <p class="price"><span>$120</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                <h3><a href="#">Hotel Edison</a></h3>
                                <span class="place">New York, USA</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hotel-entry">
                            <a href="hotels.html" class="hotel-img" style="background-image: url(./public/images/hotel-3.jpg);">
                                <p class="price"><span>$120</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                <h3><a href="#">Hotel Edison</a></h3>
                                <span class="place">New York, USA</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hotel-entry">
                            <a href="hotels.html" class="hotel-img" style="background-image: url(./public/images/hotel-4.jpg);">
                                <p class="price"><span>$120</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                <h3><a href="#">Hotel Edison</a></h3>
                                <span class="place">New York, USA</span>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="colorlib-testimony" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Our Satisfied Guests says</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 animate-box">
                <div class="owl-carousel2">
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url(./public/images/person1.jpg);"></span>
                            <span class="user">Alysha Myers</span>
                            <small>Miami Florida, USA</small>
                            <blockquote>
                                <p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url(./public/images/person2.jpg);"></span>
                            <span class="user">James Fisher</span>
                            <small>New York, USA</small>
                            <blockquote>
                                <p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url(./public/images/person3.jpg);"></span>
                            <span class="user">Jacob Webb</span>
                            <small>Athens, Greece</small>
                            <blockquote>
                                <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="colorlib-tour">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Most Popular Travel Countries</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="f-tour">
                    <div class="row row-pb-md">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(./public/images/tour-1.jpg);">
                                        <div class="desc">
                                            <h3>Rome - 5 Days</h3>
                                            <p class="price"><span>$120</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(./public/images/tour-2.jpg);">
                                        <div class="desc">
                                            <h3>Rome - 5 Days</h3>
                                            <p class="price"><span>$120</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(./public/images/tour-3.jpg);">
                                        <div class="desc">
                                            <h3>Rome - 5 Days</h3>
                                            <p class="price"><span>$120</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(./public/images/tour-4.jpg);">
                                        <div class="desc">
                                            <h3>Rome - 5 Days</h3>
                                            <p class="price"><span>$120</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="desc">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Italy, Europe</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Best Tours City</h4>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Rome</a></li>
                                                    <li><a href="#">Milan</a></li>
                                                    <li><a href="#">Genoa</a></li>
                                                    <li><a href="#">Verona</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Venice</a></li>
                                                    <li><a href="#">Bologna</a></li>
                                                    <li><a href="#">Trieste</a></li>
                                                    <li><a href="#">Florence</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Palermo</a></li>
                                                    <li><a href="#">Siena</a></li>
                                                    <li><a href="#">San Marino</a></li>
                                                    <li><a href="#">Naples</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-tour">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">
                            <div class="row">
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(./public/images/tour-5.jpg);">
                                        <div class="desc">
                                            <h3>Rome - 5 Days</h3>
                                            <p class="price"><span>$120</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(./public/images/tour-6.jpg);">
                                        <div class="desc">
                                            <h3>Rome - 5 Days</h3>
                                            <p class="price"><span>$120</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(./public/images/tour-7.jpg);">
                                        <div class="desc">
                                            <h3>Rome - 5 Days</h3>
                                            <p class="price"><span>$120</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <a href="tours.html" class="f-tour-img" style="background-image: url(./public/images/tour-8.jpg);">
                                        <div class="desc">
                                            <h3>Rome - 5 Days</h3>
                                            <p class="price"><span>$120</span> <small>/ person</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box col-md-pull-6 text-right">
                            <div class="desc">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Athens, Greece</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Best Tours City</h4>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Rome</a></li>
                                                    <li><a href="#">Milan</a></li>
                                                    <li><a href="#">Genoa</a></li>
                                                    <li><a href="#">Verona</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Venice</a></li>
                                                    <li><a href="#">Bologna</a></li>
                                                    <li><a href="#">Trieste</a></li>
                                                    <li><a href="#">Florence</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <ul>
                                                    <li><a href="#">Palermo</a></li>
                                                    <li><a href="#">Siena</a></li>
                                                    <li><a href="#">San Marino</a></li>
                                                    <li><a href="#">Naples</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Đăng ký nhận thông tin</h2>
                <p>Thông tin sẽ được gửi vào hòm thư của bạn.</p>
                <form class="form-inline qbstp-header-subscribe">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-0">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                <button type="submit" class="btn btn-primary">Đăng Ký</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer id="colorlib-footer" role="contentinfo">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-3 colorlib-widget">
                <h4>Đảo Cái Chiên</h4>
                <p>Là một hòn đảo hoang sơ mới được khai thác du lịch mấy năm gần đây. Nằm trong đại phận tỉnh Quảng Ninh, tại huyện Hải Hà.</p>
                <p>
                <ul class="colorlib-social-icons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                </ul>
                </p>
            </div>
            <div class="col-md-2 colorlib-widget">
                <h4>Đặt Ngay</h4>
                <p>
                <ul class="colorlib-footer-links">
                    <!-- <li><a href="#">Flight</a></li> -->
                    <li><a href="#">Hotels</a></li>
                    <!-- <li><a href="#">Tour</a></li> -->
                    <!-- <li><a href="#">Car Rent</a></li>
                    <li><a href="#">Beach &amp; Resorts</a></li>
                    <li><a href="#">Cruises</a></li> -->
                </ul>
                </p>
            </div>
            <div class="col-md-2 colorlib-widget">
                <h4>Dịch Vụ</h4>
                <p>
                <ul class="colorlib-footer-links">
                    <li><a href="#">Cho Thuê Lều Bạt</a></li>
                    <li><a href="#">Cho Thuê Xe Máy</a></li>
                    <li><a href="#">Cho Thuê Võng</a></li>
                    <li><a href="#">Cho Thuê Chỗ Nấu Ăn</a></li>
                    <!-- <li><a href="#">Hotel Epikk</a></li> -->
                </ul>
                </p>
            </div>
            <div class="col-md-2">
                <h4>Blog</h4>
                <ul class="colorlib-footer-links">
                    <li><a href="#">Một Ngày Trải Nghiệm Ở Cái Chiên!</a></li>
                    <li><a href="#">Chuyến đi câu mực tuyệt vời.</a></li>
                    <li><a href="#">Cái Chiên Bãi Biển Thơ Mộng.</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-md-push-1">
                <h4>Thông Tin Liên Hệ</h4>
                <ul class="colorlib-footer-links">
                    <!-- <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li> -->
                    <li><a href="tel://+84936912883">+ 84936912883</a></li>
                    <li><a href="mailto:buianhtruong14@gmail.com">buianhtruong14@gmail.com</a></li>
                    <li><a href="#">caichienisland.com</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    <span class="block">Demo Images: <a href="httl://Unsplash.co" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                </p>
            </div>
        </div>
    </div>
</footer>


