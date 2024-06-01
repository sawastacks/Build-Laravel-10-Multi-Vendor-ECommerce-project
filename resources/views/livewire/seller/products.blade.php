<div>
    
    <div class="product-wrap">
        <div class="product-list">

            <ul class="row">
                @forelse ($products as $item)
                    
                
                <li class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-box">
                        <div class="producct-img">
                            <img src="/images/products/{{ $item->product_image }}" alt="">
                        </div>
                        <div class="product-caption">
                            <h4><a href="#">{{ $item->name }}</a></h4>
                            <div class="price">
                                @if ( $item->compare_price )
                                    <del>${{$item->compare_price }}</del>
                                @endif
                                
                                <ins>${{ $item->price }}</ins>
                            </div>
                            <div class="btn-group">
                                <a href="{{ route('seller.product.edit-product',['id'=>$item->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                <a href="javascript:;" data-id="{{ $item->id }}" id="deleteProductBtn" class="btn btn-outline-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                @empty
                    <li class="col-12">
                       <span class="text-danger">No product(s) found!</span>
                    </li>
                @endforelse
            </ul>

        </div>
        <div class="blog-pagination mb-30">
            <div class="btn-toolbar justify-content-center mb-15">
                <div class="btn-group">
                   {{ $products->links('livewire::simple-bootstrap') }}
                </div>
            </div>
        </div>
    </div>

</div>
