@extends('admin.layouts.master')
@section('main-content')
<section class="section">
    <div class="section-header">
        <h1>Posts</h1>        
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @can('pre-registers_create')
                        <div class="card-header">
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-icon icon-left btn-primary"><i
                                    class="fas fa-plus"></i>Add Post</a>
                        </div>
                        @endcan

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="maintable"
                                data-url="{{ route('admin.posts.get-posts') }}"
                                data-status="{{ \App\Enums\Status::ACTIVE }}" data-hidecolumn="{{ auth()->user()->can('posts_show') || auth()->user()->can('posts_edit') || auth()->user()->can('posts_delete') }}">
                                <thead>
                                    <tr>
                                        <th width="5%">S.N.</th>
                                        <th width="8%">Date</th>
                                        <th width="20%">Title</th>
                                        <th width="5%">Category</th>
                                        <th width="5%">Publish</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
@endsection

@section('scripts')

<script src="{{ asset('assets/modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/post/index.js') }}"></script>

@endsection
