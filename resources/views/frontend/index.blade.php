@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link rel="stylesheet" href="{{ url('aqo_se/Styles/css/index.css') }}">

@endpush


@section('content')

    <div class="main">
        <div class="hero-image">


            <div class="container">
                <div class="" style="margin-bottom: 20px;padding: 10px;border-radius: 10px;">
                    <div class="srarchBar">
                        <form action="{{url('competition/explorer/search_keyword')}}" method="post">
                            {{csrf_field()}}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" name="search_keyword" placeholder="Try Rhythmic Gymnastic" autocomplete="off">
                                <div class="input-group-append">
                                    <button style="background: #002857;" class="btn btn-success" type="submit">Find Competitions</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8 mb-3 mb-md-0">
                        @if(count($sliders) != 0)
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @if(count($sliders) != 0)
                                        @foreach($sliders as $key => $slider)
                                            <div class="swiper-slide position-relative">
                                                @if($slider->link != null)
                                                    <a href="{{ $slider->link }}" target="_blank">

                                                        @if($slider->extension == 'mp4')
                                                            <video width="100%" style="height: 29rem; object-fit: cover" autoplay muted>
                                                                <source src="{{url('files/homepage',$slider->image)}}" type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        @else
                                                            <img src="{{url('files/homepage',$slider->image)}}" class="w-100" style="height: 29rem; object-fit: cover">
                                                        @endif

                                                    </a>
                                                @else

                                                    @if($slider->extension == 'mp4')
                                                        <video width="100%" style="height: 29rem; object-fit: cover" autoplay muted>
                                                            <source src="{{url('files/homepage',$slider->image)}}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    @else
                                                        <img src="{{url('files/homepage',$slider->image)}}" class="w-100" style="height: 29rem; object-fit: cover">
                                                    @endif
                                                @endif
                                            </div>
                                        @endforeach
                                    @else
                                        <img src="{{url('img/no-image.jpg')}}" class="w-100" style="height: 29rem;">
                                    @endif
                                    
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        @else
                            <img src="{{url('img/no-image.jpg')}}" class="w-100" style="height: 29rem;">
                        @endif
                    </div>
                    <div class="col-12 col-md-4 side-banner">
                        @if($homepage_ad != null)
                            @if($homepage_ad->link != null)
                                <a href="{{$homepage_ad->link}}" target="_blank" >
                                    <img src="{{url('files/advertisement',$homepage_ad->image)}}" alt="" class="w-100" style="height: 29rem;">
                                </a>
                            @else
                                <img src="{{url('files/advertisement',$homepage_ad->image)}}" alt="" class="w-100" style="height: 29rem;">
                            @endif
                        @else
                            <img src="{{url('img/no-image.jpg')}}" alt="" class="w-100" style="height: 29rem; object-fit: contain">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="trending-competitions">
            <div class="container">
                <h1 class="text-center font-weight-bold">Trending Competitions</h1>
                <div class="exploreBody">
                    <div class="row">
                        @if(count($trendingCompetition) == 0)
                            <div class="col-md-12">
                                <div style="border-style: dashed;border-width: 2px;padding: 90px;color: grey;">
                                    <h2 style="text-align: center;color: grey;"> Competition Not Found</h2>
                                </div>
                            </div>
                        @else
                            @foreach($trendingCompetition as $competition)
                                <div class="imageCard col-12 col-md-3">
                                    <div class="imageSize">
                                        <a href="{{route('frontend.competition_page',$competition->id)}}">
                                            <img src="{{url('files/'.$competition->feature_image)}}" alt="" srcset="" />
                                        </a>
                                    </div>
                                    <div class="container">
                                        <div class="nameCard p-2">
                                            <p class="mb-1" style="color: #F29709; font-size: 0.9rem;">Worldwide</p>
                                            <h5 class="font-weight-bold mb-1">{{$competition->competition_name}}</h5>
                                            <p class="mb-1" style="color: #919191; font-size: 0.9rem; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">{{$competition->description}}</p>
                                            <p class="font-weight-bold" style="color: #F29709; font-size: 0.9rem;">{{ $competition->started_date}} to {{ $competition->end_date}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container advert" style="margin-top: 5rem;">
            <div class="row">
                <div class="col-12 col-md-6 text-center mb-3 mb-md-0">
                    @if($left != null)
                    <a href="{{$left->link}}" target="_blank">
                        <img src="{{ url('files/advertisement',$left->image) }}" alt="..." class="img-fluid w-100 left" style="height: 20rem; object-fit: cover;">
                    </a>
                    @else
                        <img src="{{ url('img/no-image.jpg') }}" alt="..." class="img-fluid w-100 left" style="height: 20rem; object-fit: cover;">
                    @endif
                </div>
                <div class="col-12 col-md-6 pl-3 pl-md-0">
                    <div class="row">
                        <div class="col-12 col-md-8 pr-3 pr-md-0 mb-3 mb-md-0">
                            <div class="row">
                                <div class="col-12">
                                    @if($middle_top != null)
                                    <a href="{{$middle_top->link}}" target="_blank">
                                        <img src="{{ url('files/advertisement',$middle_top->image) }}" alt="..." class="img-fluid w-100 middle-top" style="height: 9.7rem; margin-bottom: 0.6rem; object-fit: cover;">
                                    </a>
                                    @else
                                        <img src="{{ url('img/no-image.jpg') }}" alt="..." class="img-fluid w-100 middle-top" style="height: 9.7rem; margin-bottom: 0.6rem; object-fit: cover;">
                                    @endif
                                </div>
                                <div class="col-12">
                                    @if($middle_bottom != null)
                                    <a href="{{$middle_bottom->link}}" target="_blank">
                                        <img src="{{ url('files/advertisement',$middle_bottom->image) }}" alt="..." class="img-fluid w-100 middle-bottom" style="height: 9.7rem; object-fit: cover;">
                                    </a>
                                    @else
                                        <img src="{{ url('img/no-image.jpg') }}" alt="..." class="img-fluid w-100 middle-bottom" style="height: 9.7rem; object-fit: cover;">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 pl-3 pl-md-0">
                            <div class="col-12">
                                @if($right != null)
                                <a href="{{$right->link}}" target="_blank">
                                    <img src="{{ url('files/advertisement',$right->image) }}" alt="..." class="img-fluid w-100 right" style="height: 20rem; object-fit: cover;">
                                </a>
                                @else
                                    <img src="{{ url('img/no-image.jpg') }}" alt="..." class="img-fluid w-100 right" style="height: 20rem; object-fit: cover;">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(count(App\Models\Blog::where('status','Enabled')->get()) != 0)
            <div class="container news" style="margin-top: 5rem;">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center font-weight-bold mb-3">Trending News</h1>
                        <div class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                                
                                @foreach(App\Models\Blog::where('category', 'News')->where('status', 'Enabled')->get() as $key => $blog_posts)  
                                    <div class="swiper-slide position-relative">
                                        <a href="{{route('frontend.blog_post',$blog_posts->id)}}" style="color:black">
                                            <div class="card" style="height: 31rem;">
                                                <img src="{{ url('files/blog',$blog_posts->feature_image) }}" class="card-img-top" alt="..." style="height: 17rem; object-fit: cover;">
                                                <div class="card-body">
                                                    <h6 class="fw-bold" style="font-size: 0.9rem;">{{ $blog_posts->title }}</h6>
                                                    <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; font-size: 0.8rem;">
                                                        {!!$blog_posts->description!!}
                                                    </div>
                                                    
                                                    <div class="position-absolute read">
                                                        <p style="color: #FF0000; font-size: 0.8rem;">Read More<i class="fas fa-arrow-right ml-2"></i></p>
                                                    </div>

                                                    <div class="row position-absolute card-social">
                                                        <div class="col-12">
                                                            <a><i class="fab fa-facebook-square text-white"></i></a>

                                                            <a><i class="fab fa-instagram text-white"></i></a>

                                                            <a><i class="fab fa-youtube-square text-white"></i></a>

                                                            <a><i class="fab fa-twitter text-white"></i></a>

                                                            <a><i class="fab fa-tiktok text-white"></i></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('frontend.posts', 'news') }}" type="button" class="btn text-white px-5 py-2 view" style="background-color: #002979; font-size: 1.1rem;">View all news</a>
                        </div>
                    </div>
                </div>
                
            </div>
        @endif

        <section class="trending" style="margin-top: 5rem;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center font-weight-bold">Popular Categories</h1>

                        @if(count($competitionCategory) == 0)
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="border-style: dashed;border-width: 2px;padding: 90px;color: grey;">
                                        <h2 style="text-align: center;color: grey;">Popular Categories Not Found</h2>
                                    </div>
                                </div>
                            </div>
                        @else

                            <div class="swiper mySwiper2 mt-5">
                                <div class="swiper-wrapper">
                                    @foreach($competitionCategory as $category)
                                        <div class="swiper-slide position-relative">
                                            <a href="{{route('frontend.explorer', [$category->id,'keyword','desc','country','start_date','end_date'])}}">
                                                <img src="{{url('files/'.$category->feature_image)}}" alt="" srcset="" class="w-100" style="height: 18rem; object-fit:cover;"/>
                                            </a>

                                            <i class="fas fa-chevron-up arrow"></i>

                                            <div class="carousel-caption">
                                                <h5 class="mb-2">{{$category->category_name}}</h5>
                                                <p style="font-size: 0.9rem; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">{{$category->description}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>


        @if(count($aqo_group) != 0)
            <section class="our-group" style="margin-top: 5rem;">
                <div class="container">
                    <h1 class="text-center font-weight-bold mb-3">AQO Group</h1>
                    <div class="row">
                        @foreach($aqo_group as $key => $aqo)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 mt-3">
                                <div class="card p-1">
                                    <img src="{{url('files/aqo_group',$aqo->image)}}" style="object-fit: contain; height:70px;" alt="" class="img-fluid" data-toggle="modal" data-target="#ad-modal{{$aqo->id}}">                                  
                                    <input type="hidden" value="https://www.vedha.com" class="ad-link">
                                    <input type="hidden" value="AQ) Leatherware" class="ad-description">
                                </div>
                            </div>
                        @endforeach  
                    </div>                
                </div>
            </section>
        @endif

        <div class="container black-social" style="margin-top: 7rem; margin-bottom: 3rem;">
            <!-- <div class="row justify-content-center align-items-center mb-5 icons">
                <div class="col col-md-1 text-center">
                    <a href="https://www.facebook.com/AQO-Sports-Entertainment-100887884844064" target="_blank"><i class="fa fa-facebook-square"></i></a>
                </div>
                <div class="col col-md-1 text-center">
                    <a href="https://www.youtube.com/channel/UCjfaVwdsnD9-GH0mX_XKC9g" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
                <div class="col col-md-1 text-center">
                    <a href="https://www.instagram.com/aqosportsandentertainment/" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div> -->

            <div class="row justify-content-center blogs">
                <div class="col-12 col-md-4 mb-4 mb-md-0 fb">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAQO-Sports-Entertainment-100887884844064&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=901780930716877" style="border:none;overflow:hidden; width: 100%; height: 29rem;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>

                @if(count(App\Models\Blog::where('status','Enabled')->get()) != 0)
                    @foreach(App\Models\Blog::where('category', 'Blog')->latest()->take(1)->get() as $key => $blog_posts)  
                        <div class="col-12 col-md-4 mb-4 mb-md-0 position-relative">
                            <div class="card" style="height: 29rem;">
                                <img src="{{ url('files/blog',$blog_posts->feature_image) }}" class="card-img-top" alt="..." style="height: 17rem; object-fit: cover;">
                                <div class="card-body">
                                    <h6 class="fw-bold" style="font-size: 0.9rem;">{{ $blog_posts->title }}</h6>
                                    <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; font-size: 0.8rem;">
                                        {!!$blog_posts->description!!}
                                    </div>

                                    @if($blog_posts->external_link != null)
                                        <div class="position-absolute article">
                                            <a href="{{ $blog_posts->external_link }}" type="button" class="btn" target="_blank">View Article</a>
                                        </div>
                                    @endif
                                    
                                    <div class="position-absolute read">
                                        <a href="{{route('frontend.posts', 'blogs')}}" style="color: #FF0000; font-size: 0.8rem;">Read More<i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>


    @if(count($aqo_group) != 0)
        @foreach($aqo_group as $key => $aqo)
            <!-- Ad Modal -->
            <div class="modal fade" id="ad-modal{{$aqo->id}}" tabindex="-1" aria-labelledby="adModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{url('files/aqo_group',$aqo->image)}}" alt="" class="img-fluid w-100" style="object-fit: contain; height:100px;">
                                    <p class="mt-3" style="text-align: justify;">{{$aqo->description}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="{{$aqo->link}}" type="button" class="btn btn-primary" id="modal-ad-link" target="_blank">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection


@push('after-scripts')

<!-- <script>
    $.get("{{route('twitter_news')}}", function(data, status){
        var data = JSON.parse(data);
        $(".twitter-link").attr("href", data.link);
        $("#description_twitter").text(data.title);
    }).
    fail(function(jqXHR, textStatus, errorThrown) {
        $('.twitter').addClass('d-none');
    });

    $('._2p3a').css('width', '500px');

</script> -->

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        loop: true,
        autoplay: {
          delay: 20000,
          disableOnInteraction: false,
        },
      });
    </script>


    <script>
        var swiper = new Swiper(".mySwiper2", {
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            breakpoints: {

                0: {
                    slidesPerView: 1,
                },

                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 4,
                }
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper3", {
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {

                0: {
                    slidesPerView: 1,
                },

                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                }
            },
            loop: true,
        });
    </script>

    <!-- <script>
      var swiper = new Swiper(".mySwiper4", {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
        autoplay: {
          delay: 1000,
          disableOnInteraction: false,
        },
      });
    </script> -->


      <script>
          $('.trending .swiper .swiper-slide').hover(function() {
              $(this).find('.carousel-caption').addClass('trans-caption');
              $(this).find('i').addClass('trans-arrow');
          }, function() {
            $(this).find('.carousel-caption').removeClass('trans-caption');
            $(this).find('i').removeClass('trans-arrow');
          });
      </script>


    <!-- <script>
        $('.our-group .card').on('click', function() {
            let img = $(this).find('img').attr('src');
            let link = $(this).find('.ad-link').val();
            let description = $(this).find('.ad-description').val();

            $('#modal-ad-img').attr('src', img);
            $('#modal-ad-link').attr('href', link);
            $('#modal-ad-description').text(description);

            
        });
    </script> -->
@endpush