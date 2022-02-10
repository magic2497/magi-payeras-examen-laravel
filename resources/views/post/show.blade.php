@include('layouts.plantilla')

<main class="mt-5">
    <div class="w-full max-w-xl mx-auto bg-white shadow-lg rounded border border-gray-200">

        <div class="text-center">
            <ul class="list-none m-5">
                <li class="font-bold">
                    <div class="flex">
                        {{$post->name}}


                    </div>
                </li>
                <ul class="ml-5">
                    <li>title: {{$post->title}}</li>
                    <li>extract: {{$post->extract}}</li>
                    <li>acces: {{$post->acces}}</li>
                    <li>expiry: {{$post->expiry}}</li>
                    <li>commentable post: {{$post->commentable}}</li>
                    <li>publication post: {{$post->publication}}</li>
                    <li>description:{{$post->description}}</li>

                </ul>
            </ul>
        </div>
    </div>
</main>
