@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($blogcategory->name) ? $blogcategory->name : 'Blogcategory' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('blogcategories.blogcategory.destroy', $blogcategory->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('blogcategories.blogcategory.index') }}" class="btn btn-primary" title="Show All Blogcategory">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('blogcategories.blogcategory.create') }}" class="btn btn-success" title="Create New Blogcategory">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('blogcategories.blogcategory.edit', $blogcategory->id ) }}" class="btn btn-primary" title="Edit Blogcategory">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Blogcategory" onclick="return confirm(&quot;Click Ok to delete Blogcategory.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $blogcategory->name }}</dd>
            <dt>Slug</dt>
            <dd>{{ $blogcategory->slug }}</dd>
            <dt>Description</dt>
            <dd>{{ $blogcategory->description }}</dd>

        </dl>

    </div>
</div>

@endsection