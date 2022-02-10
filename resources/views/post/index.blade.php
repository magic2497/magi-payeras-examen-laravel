@include('layouts.plantilla')

<main>
    <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
        <div class="mb-10 ">
            <div class="mb-5">
                <h2 class="text-xl">@lang("Contacts")</h2>
            </div>

                    <div class="mt-5">
                        <a class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded"
                           href="{{ route('post.create') }}"> @lang("Add Contact")</a>
                    </div>


        </div>

        <div class="w-full max-w-8xl mx-auto bg-white shadow-lg rounded border border-gray-200">
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400">
                        <tr>

                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">@lang("User Name")</div>
                                    </th>

                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">@lang("title")</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">@lang("publication date")</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">@lang("acces")</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">@lang("expiry")</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">@lang("commentable")</div>
                            </th>


                        </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">

                        @foreach ($post as $post)
                            <tr>
                                <td class="p-2 whitespace-nowrap">{{ $post->user->name }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $post->title }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $post->publication }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $post->acces }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $post->expiry }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $post->commentable }}</td>

                                <td class="p-2 whitespace-nowrap">
                                    <form action="{{ route('post.destroy', $post) }}" method="POST">


                                                <a class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
                                                   href="{{ route('post.show', $post) }}"> @lang("Show")</a>


                                                <a class="bg-orange-500 hover:bg-orange-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-orange-500 rounded"
                                                   href="{{ route('post.edit', $post) }}"> @lang("Edit")</a>


                                        @csrf
                                        @method('DELETE')

                                                <button type="submit"
                                                        class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                     @lang("Delete")
                                                </button>


                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
