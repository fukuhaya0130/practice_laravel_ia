<h1>記事詳細</h1>
<div>
    <h2>{{ $text->id }} : {{ $text->title }}</h2>
    <div>{{ $text->content }}</div>
    <div>{{ $text->email }} </div>
    <div>{{ $text->price }}</div>
    <div>{{ $text->is_visible === 0 ? "true" : "false" }} </div>
</div>
<a href="{{ route('text.edit', [ 'id' => $text->id ] ) }}">編集</a>
<a href="{{ route('text.destroy', [ 'id' => $text->id ] ) }}">削除</a>