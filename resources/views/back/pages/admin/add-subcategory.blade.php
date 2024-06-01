@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-dark">Add Sub Category</h4>
                </div>
                <div class="pull-right">
                    <a href="{{ route('admin.manage-categories.cats-subcats-list') }}" class="btn btn-primary btn-sm">
                     <i class="ion-arrow-left-a"></i> Back to categories list
                    </a>
                </div>
            </div>
            <hr>
            <form action="{{ route('admin.manage-categories.store-subcategory') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                @csrf
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        <strong><i class="dw dw-checked"></i></strong>
                        {!! Session::get('success') !!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (Session::get('fail'))
                <div class="alert alert-danger">
                    <strong><i class="dw dw-checked"></i></strong>
                    {!! Session::get('fail') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="">Parent category</label>
                        <select name="parent_category" id="" class="form-control">
                            <option value="">Not Set</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}" {{ old('parent_category') == $item->id ? 'selected' : '' }}>{{ $item->category_name }}</option>
                            @endforeach
                        </select>
                        @error('parent_category')
                            <span class="text-danger ml-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="">Sub Category name</label>
                        <input type="text" class="form-control" name="subcategory_name" placeholder="Enter sub category name" value="{{ old('subcategory_name') }}">
                        @error('subcategory_name')
                            <span class="text-danger ml-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="">Is Child Of</label>
                        <select name="is_child_of" id="" class="form-control">
                            <option value="0">-- Independent --</option>
                            @foreach ($subcategories as $item)
                                <option value="{{ $item->id }}" {{ old('is_child_of') == $item->id ? 'selected' : '' }}>{{ $item->subcategory_name }}</option>
                            @endforeach
                        </select>
                        @error('is_child_of')
                            <span class="text-danger ml-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                 
                </div>
            </div>
            <button type="submit" class="btn btn-primary">CREATE</button>
            </form>
        </div>
    </div>
  </div>
@endsection
@push('scripts')

@endpush