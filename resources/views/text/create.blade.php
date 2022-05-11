<h1>記事作成</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('text.store') }}" method="post">
    @csrf
    <label for="title">タイトル</label>
    <input id="title" type="text" name="title" value="{{ old('title') }}">
    <br>
    <label for="content">コンテンツ</label>
    <input id="content" type="text" name="content" value="{{ old('content') }}">
    <br>
    <label for="email">メールアドレス</label>
    <input id="email" type="text" name="email" value="{{ old('email') }}">
    <br>
    <label for="price">金額</label>
    <input id="price" type="number" name="price" value="{{ old('price') }}">
    <br>
    <label for="is_visible">表示・非表示</label>
    <label>表示</label>
    <input id="is_visible" type="radio" name="is_visible" value=0>
    <label>非表示</label>
    <input id="is_visible" type="radio" name="is_visible" value=1>
    <br>
    <button>送信</button><br>
    <a href="/text">戻る</a>

</form>