<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('post_update'))
                <div style="color: white;
                background: #0e9dc5;
                margin-bottom: 1%;;
                padding: 8px 10px;
                border-radius: 8px;
                font-weight: 600;">
                   {{ session('post_update') }}
                </div>
            @endif
            @if (session('post_delete'))
                <div style="color: white;
                background: #e32762;
                margin-bottom: 1%;;
                padding: 8px 10px;
                border-radius: 8px;
                font-weight: 600;">
                   {{ session('post_delete') }}
                </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($posts)
                        @foreach ($posts as $one_post)
                            <div style="margin-bottom: 3%;
                            border-bottom: 1px solid white;
                            padding: 15px;
                            border-radius: 2px;
                            box-shadow: 1px 1px 2px #c6c5d7;">
                                <div style="display: flex;">
                                    <div style="width: 87%;">
                                        <h3 style="width: fit-content;
                                        border-bottom: 3px ridge rgb(95, 61, 170);
                                        margin-bottom: 10px;
                                        box-shadow: 0px 1px 0px white;
                                        color: aquamarine;
                                        font-weight: 600;
                                        font-size: large;
                                        text-transform: capitalize;">{{ $one_post->title }}</h3>
                                    </div>
                                    <div class="col-6">
                                        {{-- {{ $one_post->user->name}} --}}
                                        <a href="{{ route('post_edit',$one_post->id)}}" style="display: inline-block;
                                        background: cadetblue;
                                        padding: 2px 12px;
                                        border-radius: 8px;
                                        box-shadow: 2px 1px 3px white;">Edit</a>
                                        &nbsp;&nbsp;
                                        <a href="{{ route('post_delete',$one_post->id)}}" style="display: inline-block;
                                        background: rgb(226, 47, 101);
                                        padding: 2px 12px;
                                        border-radius: 8px;
                                        box-shadow: 2px 1px 3px rgb(237, 233, 233);">Delete</a>
                                    </div>
                                </div>
                                <p style="padding: 10px;
                                background: #5656562b;">{{ $one_post->body }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
