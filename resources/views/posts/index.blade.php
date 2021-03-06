@extends('layouts.app')
@section('title')Index @endsection


       @section('content')
        <div class="text-center ">
            <a  href="{{route('posts.create')}}" type="button" class="btn btn-success p-2">Create Post</a>
        </div>


        <table class="table table-dark table-hover mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($allPosts as $post)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['posted_by']}}</td>
                    <td>{{$post['created_at']}}</td>
                    <td>
                        <a  href="/posts/{post}" class="btn btn-primary">View</a>
                        <a href="/posts/{post}/edit" class="btn btn-secondary">Edit</a>
                   
                        <a class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        @endsection