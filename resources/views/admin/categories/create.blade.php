@extends('admin.layouts.master')
@section('content')
	<main class="main-content">
		<div class="card">
            <div class="card-body">
                <div class="container">
                    @include('admin.layouts.partials.errors')

                    <h4 class="card-title">ایجاد دسته بندی</h4>
                    <form method="POST" action="{{route('categories.store')}}" >
                        @csrf
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">نام دسته بندی</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-left"  dir="rtl" name="title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">زیر دسته </label>
                            <div class="col-sm-10">
                            <select name="parent_id" class="form-control">
                                <option value="0">دسته بندی اصلی</option>
                                @foreach($categories as $key =>$value)
                                        <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
							<button type="submit" class="btn btn-success btn-uppercase">
								<i class="ti-check-box m-r-5"></i> ذخیره
							</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
	</main>
@endsection
