@extends('admin.layouts.master')
@section('content')
	<main class="main-content">
		<div class="card">
            <div class="card-body">
                <div class="container">
                    @include('admin.layouts.partials.errors')

                    <h4 class="card-title">ویرایش نقش</h4>
                    <form method="POST" action="{{route('roles.update',$role->id)}}" >
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">نام</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-left"  dir="rtl" name="name" value="{{$role->name}}">
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
