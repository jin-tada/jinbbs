

<h1>resources/viewMessageBoard/confirm.blade.php</h1>
<p>伝言内容確認</p>
<ul>
    <li>
        投稿者:
        <p>{{$request->name}}</p>
        投稿者の連絡先:
        <p>{{$request->tel}}</p>
        伝言の宛先:
        <p>{{$request->address}}</p>
        要件・詳細:
        <p>{{$request->detail}}</p>


    </li>
</ul>

    <form action="" method="POST">
    <input type="hidden" name="name" value="{{$request->name}}">
    <input type="hidden" name="tel" value="{{$request->tel}}">
    <input type="hidden" name="address" value="{{$request->address}}">
    <input type="hidden" name="detail" value="{{$request->detail}}">


    <div>
    <button class="btn btn-primary" type="submit" name="back">
        {{-- <i class="fa-solid fa-caret-left"></i>戻る</button> --}}
        {{-- <i class="fa-brands fa-odysee"></i>戻る</button> --}}
    <i class="fa-brands fa-golang fa-flip"></i>戻る</button>
     <button class="btn btn-primary" type="submit" name="send">
            送信
            <i class="fa-brands fa-golang fa-flip"></i>
        </button>
    </div>
    @csrf
</form>
