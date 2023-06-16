<h1>resources/views/MassageBoard/index.blade.php</h1>
<h2>伝言の一覧</h2>

@if ($contacts->count() > 0)
    <table border="1">
        <tr>
            <th>投稿者</th>
            <th>投稿者の連絡先</th>
            <th>伝言の宛先</th>
            <th>要件・詳細</th>
        </tr>

        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->tel }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->detail }}</td>
                <td><a href="/MessageBoard/edit/{{$contact->id}}">編集</td>
            <td>
                <form action="/MessageBoard/delete/{{$contact->id}}" method="post">
                <input type="submit" name="delete" value="削除">
            @csrf
            </form>
            </td>
            </tr>
        @endforeach
    </table>
@else
    <p>お問い合わせがありません</p>
@endif
