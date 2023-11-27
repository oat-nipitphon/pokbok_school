@extends('layouts-school.app')
@section('content')
<div class="card-body">
    @if (Auth::user())
    <div class="col-lg-12">
        <form action="{{ route('insert.ita') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('modal-form-ita')
        </form>
    </div>
    @else

    @endif

    <div class="row col-lg-12" style="margin-top: 30px; background-color: #ffffff;">
        @foreach ($itas as $ita)
            <div class="col-md-4 text-center">
                <a href="{{ route('view.ita.detail', $ita->id) }}">
                    <label id="textItaTitle">
                        {{ $ita->id }} : {{ $ita->title_name }}
                    </label>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
