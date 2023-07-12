<x-.admin.layouts.master>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Ok Done!</strong> {{ session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4>Product List <a href="{{ route('products.list') }}">
                                        < </a>
                                            <a href="{{ route('products.create') }}" class="btn btn-primary float-end">
                                                Add Brand
                                            </a>

                                </h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">sl</th>
                                            <th scope="col">Product name</th>
                                            <th scope="col">Product category</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $products->firstItem() + $loop->index }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->status == 1 ? 'Visible' : 'Hidden' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-success">Edit</a>
                                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                                   
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-.admin.layouts.master>
