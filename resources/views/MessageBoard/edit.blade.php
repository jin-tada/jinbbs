<form action="/MessageBoard/edit/{{$contact->id}}" method="post">

    <div>
    <label for="name">投稿者</label>
    <input type="text" name="name" id="name"
    value="{{old('name',$contact->name)}}">
    @if($errors->has('name'))
    <p class="error">*{{$error->first('name')}}</p>
    @endif

    <div>
    <label for="tel">投稿者の連絡先</label>
    <input type="text" name="tel" id="tel"
    value="{{old('tel',$contact->tel)}}">
    @if($errors->has('tel'))
    <p class="error">*{{$errors->first('tel')}}</p>
    @endif

    <div>
    <label for="address">伝言の宛先</label>
    <input type="text" name="address" id="address"
    value="{{old('address',$contact->address)}}">
    @if($errors->has('address'))
    <p class="error">*{{$errors->first('address')}}</p>
    @endif

    <div>
    <label for="detail">要件・詳細</label>
    <input type="text" name="detail" id="detail"
    value="{{old('detail',$contact->detail)}}">
    @if($errors->has('detail'))
    <p class="error">*{{$errors->first('detail')}}</p>
    @endif




</div>

<div><input type="submit" value="送信"></div>
@csrf
</form>
