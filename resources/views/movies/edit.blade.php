@extends('layouts.main')

@section('title', 'Ubah Film')

@section('page-title', 'Ubah Film')

@section('content')
  <div class="card">
    <div class="card-body">
      <form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Judul Film -->
        <div class="mb-3">
          <label class="form-label">Judul</label>
          <input required type="text" class="form-control" name="title" placeholder="Masukkan judul"
                 value="{{ old('title', $movie->title) }}">
        </div>

        <!-- Tahun Rilis -->
        <div class="mb-3">
          <label class="form-label">Tahun Rilis</label>
          <input required type="number" class="form-control" name="year" placeholder="Masukkan tahun rilis"
                 value="{{ old('year', $movie->year) }}">
        </div>

        <!-- Genre -->
        <div class="mb-3">
          <label class="form-label">Genre</label>
          <select class="form-select" name="genre_id">
            <option value="">Pilih Genre</option>
            @foreach ($genres as $genre)
              <option value="{{ $genre->id }}" {{ old('genre_id', $movie->genre_id) == $genre->id ? 'selected' : '' }}>
                {{ $genre->name }}
              </option>
            @endforeach
          </select>
        </div>

        <!-- Pemeran -->
        <div class="mb-3">
          <label class="form-label">Pemeran</label>
          <select class="form-select" name="casts[]" multiple>
            @foreach ($casts as $cast)
              <option value="{{ $cast->id }}"
                {{ in_array($cast->id, old('casts', $movie->movieCasts->pluck('id')->toArray())) ? 'selected' : '' }}>
                {{ $cast->name }}
              </option>
            @endforeach
          </select>
        </div>

        <!-- Sinopsis -->
        <div class="mb-3">
          <label class="form-label">Sinopsis</label>
          <textarea class="form-control" name="synopsis" rows="4"
                    placeholder="Masukkan sinopsis film">{{ old('synopsis', $movie->synopsis) }}</textarea>
        </div>

        <!-- Poster -->
        <div class="mb-3">
          <label class="form-label">Poster</label>
          <input type="file" class="form-control" name="poster" id="posterInput" onchange="previewPoster()">
          <img id="posterPreview" src="{{ $movie->poster }}" alt="Preview Poster"
               style="max-width: 100px; margin-top: 10px; {{ $movie->poster ? 'display: block;' : 'display: none;' }}">
        </div>

        <!-- Ketersediaan -->
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="available" id="availableCheck"
            {{ old('available', $movie->available) ? 'checked' : '' }}>
          <label class="form-check-label" for="availableCheck">Tersedia</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">
          Ubah Film
        </button>
      </form>
    </div>
  </div>

  <script>
    function previewPoster() {
      const input = document.getElementById('posterInput');
      const preview = document.getElementById('posterPreview');

      if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
          preview.src = e.target.result;
          preview.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
      } else {
        preview.style.display = 'none';
      }
    }
  </script>
@endsection
