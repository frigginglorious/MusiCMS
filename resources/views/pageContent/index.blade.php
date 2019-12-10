<h1>All Page Contnets</h1>
<ul>
@foreach ($pageContent as $pc)

<li>
<a href="pageContent/{{$pc->id}}/edit">{{$pc->title}}</a>
</li>

@endforeach
</ul>
<a href="pageContent/create">Create</a>