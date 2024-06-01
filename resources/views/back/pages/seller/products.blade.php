@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>My products</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('seller.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        My products
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <a href="{{ route('seller.product.add-product') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Add new product</a>
        </div>
    </div>
</div>

@livewire('seller.products')

@endsection
@push('stylesheets')
    <style>
        .swal2-popup{
            font-size: .87em;
        }
    </style>
@endpush
@push('scripts')
    <script>
        $(document).on('click','a#deleteProductBtn', function(e){
             e.preventDefault();
             var url = "{{ route('seller.product.delete-product') }}";
             var token = "{{ csrf_token() }}";
             var product_id = $(this).data('id');
             swal.fire({
                title:'Are you sure?',
                html:'You want to delete this product',
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
             }).then(function(result){
                if( result.value ){
                    $.post(url,{ _token:token, product_id:product_id }, function(response){
                         toastr.remove();
                         if( response.status == 1 ){
                            Livewire.dispatch('refreshProductsList');
                            toastr.success(response.msg);
                         }else{
                            toastr.error(response.msg);
                         }
                    },'json');
                }
             });
        });
    </script>
@endpush