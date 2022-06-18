@extends('layouts.app')

@section('content')
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" dir="rtl">
            <a class="btn btn-primary" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                {{ __('تسجيل خروج') }}
            </a>
        </nav>
        <form class="form-inline my-2 my-lg-0" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <hr>
        <div class="container" dir="rtl">

            <form method="POST" action="{{ route('add_artical') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="float-right">عنوان المقال</label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1"
                        placeholder="كتبي هنا عنوان المقال ...." required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="float-right"> المقال</label>
                    <textarea class="form-control" name="article" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">حفظ المقال</button>
                </div>
            </form>
        </div>


    </div>
@endsection
