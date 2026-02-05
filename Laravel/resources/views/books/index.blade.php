<!-- x-appでヘッダーとフッターの継承 -->
<x-app-layout>
    <div class="container">
        <form action="/search" method="post">
            @csrf
            <input type="text" name="keyword" class="form" placeholder="タイトルで検索">
            <button type="submit" class="btn btn-success">検索</button>
        </form>

        <p class="text-right"><a href="/create-form" class="btn btn-success">登録する</a></p>

        <h2 class="page-header">本のリスト一覧</h2>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>タイトル</th>
                <th>著者名</th>
                <th>金額</th>
                <th>登録日時</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <!-- $book->Bookモデルのauthorメソッド呼出 → authorsの1レコード（モデル）取得 → その中のnameカラム参照 -->
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->created_at }}</td>
                <td><a href="/book/{{$book->id}}/update-form" class="btn btn-primary">更新</a></td>
                <td><a class="btn btn-danger" href="/book/{{$book->id}}/delete" onclick="return confirm('こちらの本を削除してもよろしいでしょうか？')">削除</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
