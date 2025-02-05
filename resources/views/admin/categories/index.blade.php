@extends('admin.layouts.master')
@section('content')

<main class="main-content">
    <div class="card">
        <div class="card-body">
            <div class="table overflow-auto" tabindex="8">
                @include('admin.layouts.partials.message')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" wire:model="search">
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center align-middle text-primary">ردیف</th>
                        <th class="text-center align-middle text-primary">نام دسته بندی</th>
                        <th class="text-center align-middle text-primary">زیر دسته</th>
                        <th class="text-center align-middle text-primary">ویرایش</th>
                        <th class="text-center align-middle text-primary">حذف</th>
                        <th class="text-center align-middle text-primary">تاریخ ایجاد</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $index => $category)
                        <tr>
                            <td class="text-center align-middle">{{$categories->firstItem()+$index}}</td>
                            <td class="text-center align-middle">{{$category->title}}</td>
                            <td class="text-center align-middle">
                                @if($category->parentCategory->title==0)
                                    {{'دسته بندی اصلی'}}
                                @else
                                {{$category->parentCategory->title}}
                                @endif
                            </td>

                            <td class="text-center align-middle">
                                <a class="btn btn-outline-info" href="{{route('categories.edit',$category->id)}}">
                                    ویرایش
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-info" href="#">
                                    حذف
                                </a>
                            </td>
                            <td class="text-center align-middle">{{\Hekmatinasser\Verta\Verta::instance($category->created_at)->format('%B %d، %Y')}}</td>

                        </tr>
                    @endforeach
                </table>
                <div style="margin: 40px !important;"
                     class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
