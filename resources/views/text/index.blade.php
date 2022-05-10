@foreach($texts as $text)
<h1>{{ $text->title }}</h1>
<div>{{ $text->content }} </div>
@endforeach