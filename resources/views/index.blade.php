<x-layout>
    <x-slot name="title">
        Company List Page - Company Module List
    </x-slot>

    <div class="companies-head">
        <div class="companies-head-left">
            <h2>Companies</h2>
        </div>

        <div class="companies-head-right">
            <i class="fas fa-igloo"></i>
            <span>Home</span>
            <i class="fas fa-angle-right"></i>
            <span>Companies</span>
            <i class="fas fa-angle-right"></i>
            <span>Companies List</span>
        </div>
    </div>

    <div class="companies-contents">
        <div class="companies-contents-head">
            <h3>Company List Page</h3>
            <div>
                <span>表示項目の切替</span>
                <a href="{{ route('posts.create') }}">Add page</a>
            </div>
        </div>

        @if(session('flash_message'))
            <div class="after-message">
                {{ session('flash_message') }}
            </div>
        @endif

        <div class="paginate">
            {{ $posts->links('vendor.pagination.tailwind') }}
        </div>

        <table class="showoff-table">
            <thead>
                <tr>
                    <th width="50">ID</th>
                    <th width="140">Name</th>
                    <th width="140">Email</th>
                    <th width="100">Prefecture</th>
                    <th width="250">Address</th>
                    <th width="140">Updated At</th>
                    <th width="160">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $index => $post)
                <tr>
                    <td><a href="{{ route('posts.show', $post) }}">{{ $post->id }}</a></td>
                    <td><a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a></td>
                    <td>{{ $post->email }}</td>
                    <td>{{ $post->prefName }}</td>
                    <td>{{ $post->city }}{{ $post->local }}{{ $post->street_address }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td class="table-menu">
                        <button class="button"><a href="{{ route('posts.edit', $post) }}"><i class="far fa-edit"></i></a></button>
                        <form method="post" action="{{ route('posts.destroy', $post) }}" class="delete_post">
                            @method('DELETE')
                            @csrf

                            <button class="button"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        'use strict';

        {
            document.querySelectorAll('.delete_post').forEach(form => {
                form.addEventListener('submit', e => {
                    e.preventDefault();


                    if(!confirm('削除しますか？'))
                    {
                        return;
                    }

                    form.submit();
                });
            });
        }
    </script>
</x-layout>
