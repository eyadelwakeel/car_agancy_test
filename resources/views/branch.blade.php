



@if(count($branches) > 0)
    @foreach($branches as $branch)
        <li>
            ID: {{ $branch->id }} - Name: {{ $branch->name }}
        </li>
    @endforeach
@else
    <p>No branches found</p>
@endif
