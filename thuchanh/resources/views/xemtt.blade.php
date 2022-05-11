@extends('templates.mytemplate')

@section('xemthongtin')

<div class="container">
    <div class="mt-4">
            <a href="../thuchanh/themtt" class="btn btn-primary" style="float:right" role="button">Thêm +</a>
        <!-- {!! Form::open(['url' =>'/xemsp/submit']) !!}
        <div class="text-center">
            {{Form::text('search', '',['class'=> 'insi','placeholder'=>'Bạn cần tìm gì?'])}}
            {{Form::submit('Tìm',['class'=>'btn btn-primary'])}}   
        </div>
        {!! Form::close() !!} -->
    </div>
    
    <table class="table mt-4">
        <tr>
            <th>Tên Khách hàng</th>
            <th>địa chỉ khách hàng</th>
            <th>số điện thoại</th>
            <th>email</th>
        </tr>
        @foreach ($tbthongtin as $row)
        <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->address}}</td>
            <td><p class="card-text" style="color: red;">{{$row->phone}} </p></td>
            <td>{{$row->email}}</td>
        </tr>
        @endforeach
    </table>
        

</div>

@endsection