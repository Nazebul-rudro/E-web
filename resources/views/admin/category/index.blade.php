<x-.admin.layouts.master>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Ok Done!</strong> {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>Category<a href="{{ route('categories.create') }}"
                                    class="btn btn-primary btn-sm float-end">Add Category</a></h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $categories->firstItem() + $loop->index }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                            <td>
                                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                                    class="btn btn-sm btn-success">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger deleteCategoryBtn" data-bs-toggle="modal"
                                                    data-bs-target="#Deletemodal{{$category->id}}">Delete</a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="Deletemodal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Category delete</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form id="deleteCategoryForm{{$category->id}}" action="{{route('categories.destroy', ['category'=>$category->id])}}" method="post" enctype="multipart/form-data">
                                                       @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="category_id" id="category_id" value="{{$category->id}}">
                                                        <div class="modal-body">
                                                            <h5>Are you sure you want to delete this category?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-danger">Yes, delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-.admin.layouts.master>
