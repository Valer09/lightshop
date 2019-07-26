@extends('layout.defaultLayout')
@section('title', 'Visca s.n.c.')

@section('head')
    <link rel="stylesheet" href="{{url('vendors/nice-select/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('vendors/owl-carousel/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{url('css/singleElement.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/styleElement.css')}}" />
@endsection

@section('content')
@php
 $el = $Element[0];
 $photos = App\Http\Controllers\gets_controller::photo_element_controller($el->id);
 $brand = App\Http\Controllers\gets_controller::brand_controller($el->brand);
 $Offerts = \App\Offert::allWithKey();
@endphp


<body class="cms-index-index cms-home-page">

	<!--div Desktop-->
	<div id="page">
		<div class="top-banners">
			<div class="banner"> Populate this marketing banner to advertise a special promotion such as: <span>Save
					20%</span>
				this weekend! </div>
		</div>
		<!-- Header -->
		@include('components.navbarDesktop')
		<!-- end header -->
		<!--================Single Product Area =================-->
		<div class="product_image_area">
			<div class="container">
				<div class="row s_product_inner">
					<div class="col-lg-6">
						<div class="owl-carousel owl-theme s_Product_carousel">
							<div class="single-prd-item">
								<img class="img-fluid" src="{{ asset('storage').$el->pathPhoto }}" alt="{{ $el->name }}">
							</div>
							@foreach($photos as $photo)
							<div class="single-prd-item">
								<img class="img-fluid" src="{{ asset('storage').$photo->path}}" alt="{{$photo->alt}}">
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="s_product_text">
							<h3>{{$el->name}}</h3>
							<!--------------Brand------------------>
							@if($brand->link != null || $brand->link != "")
							<a target="_blank" href="{{$brand->link}}">
								<h5>{{ $el->brand }}</h5>
							</a>
							@else
							<h5>{{ $el->brand }}</h5>
							@endif
							<!--------------Price------------------>
							@if(isset($Offerts[$el->id]) && $Offerts[$el->id]->date_end > date('Y-m-d h:i:sa'))
							<h2>€ {{ number_format(($el->price - (($el->price)/100*$Offerts[$el->id]->discount_perc)), 2, '.', ',') }}
							</h2>
							<span class="prices" style="text-decoration: line-through">€
								{{ number_format($el->price, 2, '.', ',') }}</span> -{{$Offerts[$el->id]->discount_perc}}%</span>
							@else
							<h2>{{ number_format($el->price, 2, ',', '.') }} €</h2>
							@endif
							<!--------------end------------------>
							<hr>
							<ul class="list">
								<li><a class="active"><span>Category</span> : {{ $el->subcategories }}</a></li>
								<li>
									<a><span>Availibility</span> :
										@if($el->availability <= 0) <span style="color: red">Out of stock</span>
											@else
											<span style="color: green">In stock</span>
											@endif
									</a>
								</li>
							</ul>
							<p>{!! nl2br($el->description) !!}</p>
							<div class="product_count">
								<label for="qty">Quantity:</label>
                                @if($el->availability > 0)
                                <form method="post" id="formAddCart" action="{{ route('Element.addToCart', ['id' => $el->id]) }}">
                                    @csrf
                                    <button
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i class="ti-angle-left"></i></button>
                                    <input type="text" name="quantity" id="sst" size="2" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                    <button
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i class="ti-angle-right"></i></button>
                                    <a class="button primary-btn" onclick="document.getElementById('formAddCart').submit();">Add to Cart</a>
                                </form>    
                                @else
                                <span class="w3-red">Questo prodotto non è disponibile al momento.</span>
                                @endif
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--================End Single Product Area =================-->

		<!--================Product Description Area =================-->
		<section class="product_description_area">
			<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
							aria-selected="true">Description</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
							aria-selected="false">Specification</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
							aria-selected="false">Reviews</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<p>{!! nl2br($el->description) !!}</p>
					</div>
					<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									{{!$specs = App\SpecElement::where('id_element', $el->id)->get()}}
									@foreach ($specs as $spec)
									<tr>
										<td>
											<h5>{{ $spec->key_spec }}</h5>
										</td>
										<td>
											<h5>{{ $spec->value_spec }}</h5>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					@php
						$temp = App\Review::where('id_element', $el->id)->orderBy('created_at','desc');
						$media= $temp->avg('rate');
						$reviews = $temp->get();

					@endphp
					<div class="tab-pane" id="review" role="tabpanel" aria-labelledby="review-tab">
						<div class="row">
							<div class="col-lg-6">
								<div class="row total_rate">
									<div class="col-6">
										<div class="box_total">
											<h5>Overall</h5>
											<h4>{{ number_format($media, 2) }}</h4>
											<h6>({{count($reviews)}} Reviews)</h6>
										</div>
									</div>
									<hr>
								</div>
								<div class="review_list">
									@foreach($reviews as $rev)
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="{{ asset('images/no-avatar.png') }}" alt="">
											</div>
											<div class="media-body">
												<h4>{{ $rev->name }}</h4>
												<p>{{ $rev->email != null ? $rev->email : ''}}</p>
												@for($star=1 ; $star <= $rev->rate ; $star++)
												<i class="fa fa-star"></i>
												@endfor
											</div>
										</div>
										<p>{{ $rev->message }}</p><br>
									</div>
									@endforeach
								</div>
							</div>
							<div class="col-lg-6">
								<div class="review_box">
									<h4>Add a Review</h4>
									<p>Your Rating:</p>
									
									<ul class="list">
										<li><a onclick="checkStar(1)"><i class="fa fa-star"></i></a></li>
										<li><a onclick="checkStar(2)"><i class="fa fa-star st2"></i></a></li>
										<li><a onclick="checkStar(3)"><i class="fa fa-star st3"></i></a></li>
										<li><a onclick="checkStar(4)"><i class="fa fa-star st4"></i></a></li>
										<li><a onclick="checkStar(5)"><i class="fa fa-star st5"></i></a></li>
									</ul>
									<p>Outstanding</p>

									<form class="w3-container" method="post" class="form-contact form-review mt-3" 
										action="{{URL::to('/review-').$el->id}}?ref={{$_SERVER['REQUEST_URI']}}" enctype="multipart/form-data" >
										@csrf
										<input style="display:none" id="ratingStar" name="rate" type="number" value="5" required>
										<div class="form-group">
											<input class="form-control" name="name" type="text" placeholder="Enter your name" required>
										</div>
										<div class="form-group">
											<input class="form-control" name="email" type="email" placeholder="Enter email address">
										</div>
										<div class="form-group">
											<textarea class="form-control different-control w-100" name="message" id="textarea" cols="30"
												rows="5" placeholder="Enter Message"></textarea>
										</div>
										<div class="form-group text-center text-md-right mt-3">
											<button type="submit" class="button button--active button-review">Submit Now</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================End Product Description Area =================-->

		<!--footer Desktop-->
		@include('components.footerDesktop')
		<!-- End Footer Desktop -->
	</div>

	<!-- JavaScript -->
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.mobile-menu.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/revslider.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/skrollr.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendors/nice-select/jquery.nice-select.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/mail-script.js') }}"></script>

	<script src="{{ asset('js/mainElem.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/menu_up.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/rating.js') }}"></script>

</body>

@endsection