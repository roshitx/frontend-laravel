@extends('layouts.master')

@section('content')
<h1 class="text-center mb-5">Data Siswa</h1>

<div class="row">
    @foreach($students as $student)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $student->nis }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $student->class }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $student->major }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $student->gender }}</h6>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
