@extends('admin.Master')

@section('title')
    Crear Nueva Noticia
@endsection

@section('content')
    <!-- Page content area start -->
    <div class="page-body" style="background: #000; margin-top: 80px;">
        <div class="card" style="background: #fff">
            <div class="card-body">
                <h1>Crear Nueva Noticia</h1>
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" id="newsForm">
                    @csrf

                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label text-dark">Título</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- News Type -->
                    <div class="mb-3">
                        <label for="type" class="form-label text-dark">Tipo</label>
                        <select name="type" class="form-control" id="newsType" required>
                            <option value="text">Texto</option>
                            <option value="image">Imagen</option>
                            <option value="audio">Audio</option>
                            <option value="video">Video</option>
                        </select>
                        @error('type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Content Field for Text -->
                    <div class="mb-3" id="textField" >
                        <label for="content" class="form-label text-dark">Contenido</label>
                        <textarea name="content" class="form-control summernote" rows="5">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- File Field for Image, Audio, Video -->
                    <div class="mb-3" id="fileField" style="display: none;">
                        <label for="file" class="form-label text-dark">Archivo</label>
                        <input type="file" name="file" class="form-control">
                        @error('file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Thumbnail Field -->
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label text-dark">Portada (Thumbnail)</label>
                        <input type="file" name="thumbnail" class="form-control">
                        @error('thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Author -->
                    <div class="mb-3">
                        <label for="author" class="form-label text-dark">Autor</label>
                        <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                        @error('author')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Page content area end -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const newsType = document.getElementById('newsType');

            const fileField = document.getElementById('fileField');

            // Show/Hide fields based on selected type
            newsType.addEventListener('change', function () {
                const type = this.value;

                // Reset all fields

                fileField.style.display = 'none';

                // Display the appropriate field based on the selected news type
                if (type === 'image' || type === 'audio' || type === 'video') {
                    fileField.style.display = 'block';
                }
            });

            // Trigger the change event on page load to handle old values
            newsType.dispatchEvent(new Event('change'));
        });
    </script>
@endsection
