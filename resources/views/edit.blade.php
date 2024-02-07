@extends('app')
@section('content')
<div>
    <h2>{{$bunbougu->name}}変更画面</h2>    
</div>
<div>
    <a href="{{url('/bunbougus')}}" class="btn btn-success">戻る</a>
</div>

<div>
    <form action="{{route('bunbougus.update',['bunbougu'=>$bunbougu->id])}}" method="post">
        @method('PUT')
        @csrf
        
        <div>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{$bunbougu->name}}">
                @error('name')
                    <span>名前を20文字以内で入力してください</span>
                @enderror
            </div>
        </div>
        <div>
            <div>
                <input type="text" name="kakaku" placeholder="価格" value="{{$bunbougu->kakaku}}">
            </div>
            @error('kakaku')
                <span>価格を数値で入力してください</span>
            @enderror
        </div>
        <div>
            <div>
                <select name="bunrui" >
                    <option >分類を選択してください</option>
                    @foreach ($bunruis as $bunrui)
                        <option value="{{$bunrui->id}}">{{$bunrui->str}}</option>
                    @endforeach
                </select>
            </div>
            @error('bunrui')
                <span>分類を選択してください</span>
            @enderror
        </div>
        <div>
            <div>
                <textarea name="shosai"  cols="30" rows="10" placeholder="詳細"></textarea>
            </div>
            @error('shosai')
                <span>詳細を記入してください</span>
            @enderror
        </div>
        <div>
            <div>
                <button type="submit" >登録</button>
            </div>
        </div>
    </form>
</div>
@endsection