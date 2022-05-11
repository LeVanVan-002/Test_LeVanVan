@extends('templates.mytemplate')

@section('themthongtin')

<div class="container">
    <div class="card mt-4" style="width: 50%; margin: 0 auto; float: none; margin-bottom: 10px;">
        <div class="card-header  text-center" style="background: lightskyblue;">
            <h1>Thêm thông tin khách hàng</h1>
        </div>
        @if (count($errors) > 0)
      <div class="alert alert-danger">
          Thông tin không đầy đủ, bạn cần chỉnh sửa như sau:
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    @if (isset($message))
      <div class="alert alert-success">
      {{ $message }}
      </div>
    @endif
        <div class="mt-3 mb-3">
            {!! Form::open(['url' =>'/themtt/submit','files' => True]) !!}
            {{Form::label('tentt', 'Nhập họ và tên')}}
            {{Form::text('tentt', '',['class'=> 'form-control','placeholder'=>'vui lòng nhập đầy đủ họ tên'])}}<br>

            {{Form::label('diachi', 'Nhập địa chỉ')}}
            {{Form::text('diachi', '',['class'=> 'form-control','placeholder'=>'vui lòng nhập chính xác địa chỉ'])}}<br>
            
            {{Form::label('phone', 'Nhập số điện thoại')}}
            {{Form::text('phone', '',['class'=> 'form-control','placeholder'=>'vui lòng nhập đúng số điện thoại'])}}<br>

            {{Form::label('email', 'Nhập email')}}
            {{Form::text('email', '',['class'=> 'form-control','placeholder'=>'vui lòng nhập chính xác email'])}}<br>

            <div class="text-center" >
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                {{Form::reset('Clear',['class'=>'btn btn-warning'])}}
            </div>    
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection