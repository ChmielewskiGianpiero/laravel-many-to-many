@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                
                @csrf

                <div class="mb-3 py-3">
                    <label for="title" class="form-label">Titolo progetto</label>
                    <input type="text" required class="form-control mb-3" name="title" id="title" placeholder="Titolo del progetto" value="{{ old('title') }}">

                    <label for="type_id" class="form-label">Type</label>
                    <select name="type_id" class="form-control" id="type_id">
                        
                        <option>Seleziona un tipo di progetto</option>

                        @foreach($types as $type)
                            <option @selected( old('type_id') == $type->id ) value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach

                    </select>

                    <label for="content" class="form-label">Contenuto</label>
                    <textarea  class="form-control" name="content" id="title" placeholder="Contenuto del progetto" value="{{ old('content') }}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </section>
@endsection