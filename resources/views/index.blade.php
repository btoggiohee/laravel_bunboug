@extends('app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="text-left">
            <h2 style="font-size:1rem;">文房具マスター</h2>
        </div>
        <div class="text-right">
        <a class="btn btn-success" href="{{route('bunbougus.create')}}">新規登録</a>
        </div>
    </div>
</div>
<div>
    <div>
        @if ($message=Session::get('success'))
            <div class="alert"><p>{{$message}}</p></div>
        @endif
    </div>
</div>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>名前</th>
        <th>価格</th>
        <th>分類</th>
    </tr>
    @foreach ($bunbougus as $bunbougu )
    <tr>
        <td class="text-align:right">{{$bunbougu->id}}</td>
        <td>
            <a href="{{route('bunbougus.show',['bunbougu'=>$bunbougu->id])}}">
            {{$bunbougu->name}}
            </a>
        </td>
        <td>{{$bunbougu->kakaku}}円</td>
        <td>{{$bunbougu->bunrui}}</td>
        <td >
            <a class="btn btn-primary" href="{{route('bunbougus.edit',['bunbougu'=>$bunbougu->id])}}">変更</a>
        </td>
        <td>
            <form action="{{route('bunbougus.delete',['bunbougu'=>$bunbougu->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" onclick='return confirm("削除しますか");' >削除</button>
            </form>
           
        </td>
    </tr>
        
    @endforeach
</table>
{!! $bunbougus->links('pagination::bootstrap-5') !!}
@endsection
