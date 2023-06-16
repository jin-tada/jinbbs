
<h1>入力画面</h1>
<p>伝言内容を入力してください</p>
@foreach ($errors->all() as $error)
<li><span class="error">{{$error}}</span><li>
    @endforeach

<form action="/MessageBoard/confirm" method="post">

    <div>
        <label for="name">投稿者</label>
        <input type="text" id="name" name="name" value="{{old('name')}}"><br>
        @if ($errors->has('name'))
        <span class="error">{{$errors->first('name')}}</span>
        @endif

        <label for="tel">投稿者の連絡先</label>
        <input type="text" id="tel" name="tel" value="{{old('tel')}}"><br>
        @if ($errors->has('tel'))
        <span class="error">{{$errors->first('tel')}}</span>
        @endif

        <label for="tel">伝言の宛先</label>
        <input type="text" id="address" name="address" value="{{old('address')}}"><br>
        @if ($errors->has('address'))
        <span class="error">{{$errors->first('address')}}</span>
        @endif

        <label for="tel">要件・詳細</label>
        <input type="text" id="detail" name="detail" value="{{old('detail')}}"><br>
        @if ($errors->has('detail'))
        <span class="error">{{$errors->first('detail')}}</span>
        @endif

        <input type="submit" value="送信">
    </div>


    @csrf
</form>

