<x-.admin.layouts.master>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Brands List <a href="{{ route('brands.list') }}">
                                        < </a>
                                            <button type="button" class="btn btn-primary float-end"
                                                data-bs-toggle="modal" data-bs-target="#addItemModal"> Add Brand
                                            </button>
                                            
                                </h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">sl</th>
                                            <th scope="col">name</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $brand)
                                            <tr>
                                                <td>{{ $brands->firstItem() + $loop->index }}</td>
                                                <td>{{ $brand->name }}</td>
                                                <td>{{ $brand->slug }}</td>
                                                <td>{{ $brand->status == 1 ? 'Visible' : 'Hidden' }}</td>
                                                <td>
                                                    {{-- <button type="button" class="btn btn-info editbtn">
                                                        Edit
                                                    </button> --}}
                                                    <!-- Button trigger modal -->
                                                    <a href="#exampleModal{{ $brand->id }}" class="btn btn-sm btn-info"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $brand->id }}">
                                                        Edit
                                                    </a>
                                                    @include('admin.brand.action')
                                                    <a href="#deleteModal{{ $brand->id }}" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $brand->id }}">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                {{$brands->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Brand Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        {{-- form part --}}
                        <div class="form-group">
                            <label for="name">Brand Name <span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="slug">Brand Slug <span style="color:red">*</span></label>
                            <input type="text" name="slug" id="slug" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label> <br>
                            <input type="checkbox" name="status" id="status"> Checked = Hidden, Un-Check =
                            Visiable
    
                        </div>
                        {{-- form part --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Brand</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-.admin.layouts.master>
