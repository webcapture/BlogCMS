@extends('layouts.app')


@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Vizualiza toate postarile</div>

            <div class="card-body">
                <!-- table to list posts -->
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th width="30">S.N.</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                    @if (count($posts) > 0 )
                    <!-- Lets get all posts here -->

                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>
                                <img src="{{url($post->featured)}}" alt="{{$post->title}}" width="60" height="auto">
                            </td>
                            <!-- We can use the relationship to get the category of each post directly -->
                            <td>
                                {{$post->category->name}}
                            </td>
                            <td>
                                <a href="{{route('posts.edit', $post->id)}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                    @else

                    <tr>
                        <td colspan="6">No posts have been found</td>
                    </tr>

                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection