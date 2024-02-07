@extends('app')
@section('content')
<div>
    <h2>{{$bunbougu->name}}詳細画面</h2>    
</div>
<div>
    <a href="{{url('/bunbougus')}}" class="btn btn-success">戻る</a>
</div>
<div>
    <div>
        <div>
            {{$bunbougu->name}}
        </div>
    </div>
    <div>
        <div>
            {{$bunbougu->kakaku}}
        </div>
    </div>
    <div>
        <div>
            @foreach ($bunruis as $bunrui)
                @if ($bunrui->id==$bunbougu->id)
                    {{$bunrui->str}}
                @endif
            @endforeach
        </div>
    </div>
    <div>
        <div>
            {{$bunbougu->shosai}}
        </div>
    </div>
</div>
@endsection