<h1>記事一覧</h1>
@foreach($texts as $text)
<div>
    <h2>{{ $text->id }} : {{ $text->title }}</h2>
    <div>{{ $text->email }} </div>
    <div>{{ $text->is_visible === 0 ? "true" : "false" }} </div>
    <a href="{{ route('text.show', [ 'id' => $text->id ] ) }}">詳細</a>
</div>
@endforeach
<a href="text/create">記事登録</a>