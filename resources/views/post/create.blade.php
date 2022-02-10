@include('layouts.plantilla')

<main class="mt-5">
    <div class="w-full max-w-xl mx-auto bg-white shadow-lg rounded border border-gray-200">
        <h2 class="text-xl m-5">{{ __("public Post") }}</h2>
        @if ($errors->any())
            <div class="mx-auto max-w-md border-2 border-solid border-red-600 bg-red-300 rounded text-center">
                <strong>Whoops! </strong>{{ __("There were some problems with your input.") }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="m-5" method="POST" enctype="multipart/form-data" action="{{ route('post.store') }}">
            @csrf
            <label for="title"> {{ __("title") }}:
                <input class="border-2 border-solid border-gray-100 rounded-full px-2" type="text" name="title"
                       value="{{old('title')}}" placeholder="title"/>
            </label>
            @error('title')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <br>
            <label for="publication"> {{ __("publication") }}:
                <input class="border-2 border-solid border-gray-100 rounded-full px-2" type="date" name="publication"
                       value="{{old('publication')}}"/>
            </label>
            <br>
            <br>
            <label for="extract"> {{ __("extract") }}:
                <input class="border-2 border-solid border-gray-100 rounded-full px-2" type="text" name="extract"
                       value="{{old('extract')}}"
                       placeholder="extract"/>
            </label>
            @error('extract')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <br>
            <label for="acces">{{ __("acces") }}: </label>
            <select class="border-2 border-solid border-gray-100 rounded-full px-2" name="acces" id="acces">
                <option value="private" @if (old('acces') === 'private') selected @endif>{{ __("private") }}</option>
                <option value="public" @if (old('acces') === 'public') selected @endif>{{ __("public") }}</option>

            </select>
            <br>
            <br>
            <label for="description"> {{ __("Description") }}:
                <br>
                <textarea class="border-2 border-solid border-gray-100 rounded px-2" name="description"
                          placeholder="description">{{old('description')}}</textarea>
            </label>
            <br>


            <br>

            <button
                class="text-green-400 no-underline border-solid border-2 border-green-400 rounded p-1 px-5 ml-5 mt-5 hover:bg-green-400 hover:text-white"
                type="submit" name="add">➕ {{ __("Add Contact") }}
            </button>
        </form>
    </div>
</main>
