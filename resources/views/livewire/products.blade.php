<div class="col-md-12 col-lg-9 col-xl-9">
                <div class="content-indent container-fluid-custom-mobile-padding-02">
                    <div class="tt-filters-options">
                        <h1 class="tt-title">
                          {{$category->name}}<span class="tt-title-total">({{$category->products->count()}})</span>
                        </h1>
                        <div class="tt-btn-toggle">
                            <a href="#">FILTER</a>
                        </div>
                        <div class="tt-sort">
                            <select>
                                <option value="Default Sorting">Default Sorting</option>
                                <option value="Default Sorting">Default Sorting 02</option>
                                <option value="Default Sorting">Default Sorting 03</option>
                            </select>
                            <select>
                                <option value="Show">Show</option>
                                <option value="9">9</option>
                                <option value="16">16</option>
                                <option value="32">32</option>
                            </select>
                        </div>
                        <div class="tt-quantity">
                            <a href="#" class="tt-col-one" data-value="tt-col-one"></a>
                            <a href="#" class="tt-col-two" data-value="tt-col-two"></a>
                            <a href="#" class="tt-col-three" data-value="tt-col-three"></a>
                            <a href="#" class="tt-col-four" data-value="tt-col-four"></a>
                            <a href="#" class="tt-col-six" data-value="tt-col-six"></a>
                        </div>
                    </div>
                    <div class="tt-product-listing row">

                    @foreach($products as $product)
                        <div class="col-6 col-md-4 tt-col-item">
                            <div class="tt-product thumbprod-center">
                                <div class="tt-image-box">

                                    <a href="{{route('product.show',$product->id)}}">
                                            <span class="tt-img-roll-over"><img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ $product->productimages->first()->image_path  }}" alt=""></span>

                                        <span class="tt-img"><img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ $product->productimages->first()->image_path  }}" alt=""></span>

                                    </a>
                                </div>
                                <div class="tt-description">
                                  
                                    <h2 class="tt-title"><a href="{{route('product.show',$product->id)}}">{{$product->title}}</a></h2>
                                    <div class="tt-price">
                                        {{$product->wear->color}}
                                    </div>
                                    <div class="tt-product-inside-hover">
                                        <div class="tt-row-btn">
                                            <a href="{{route('product.show',$product->id)}}" class="btn btn-sm" ><i class="icon-e-46"></i>More Details</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="text-center tt_product_showmore">
                        <a href="#" class="btn btn-border">LOAD MORE</a>
                        <div class="tt_item_all_js">
                            <a href="#" class="btn btn-border01">NO MORE ITEM TO SHOW</a>
                        </div>
                    </div>
                </div>
            </div>