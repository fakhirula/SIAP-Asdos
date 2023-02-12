@php
use Illuminate\Http\Request;
@endphp

<div class="col-12 col-md-6 order-md-2 order-first">
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb">
            @php
            $request = Request::createFromGlobals();
            $segments = $request->segments();
            $url = '';
            @endphp
            @foreach($segments as $segment)
            @php
            $url .= '/'.$segment;
            @endphp
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                @if ($loop->last)
                {{ str_replace("_", " ", ucfirst($segment)) }}
                @else
                <a href="{{ url($url) }}">{{ str_replace("_", " ", ucfirst($segment)) }}</a>
                @endif
            </li>
            @endforeach
        </ol>
    </nav>
</div>