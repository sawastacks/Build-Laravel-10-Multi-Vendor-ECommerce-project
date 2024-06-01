@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Profile</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('seller.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Profile
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

@livewire('seller.seller-profile')

@endsection
@push('scripts')
    <script>
        $('input[type="file"][id="sellerProfilePictureFile"]').Kropify({
            preview:'#sellerProfilePicture',
            viewMode:1,
            aspectRatio:1,
            cancelButtonText:'Cancel',
            resetButtonText:'Reset',
            cropButtonText:'Crop & update',
            processURL:'{{ route("seller.change-profile-picture") }}',
            maxSize:2097152,
            showLoader:true,
            success:function(data){
                if( data.status == 1 ){
                    toastr.success(data.msg);
                    Livewire.dispatch('updateAdminSellerHeaderInfo');
                    Livewire.dispatch('updateSellerProfilePage');
                }else{
                    toastr.error(data.msg);
                }
            },
            errors:function(error, text){
                console.log(text);
            },
        });
    </script>
@endpush