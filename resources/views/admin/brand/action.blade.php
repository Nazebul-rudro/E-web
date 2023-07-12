{{-- <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <div class="modal-body"> --}}
                    {{-- form part --}}
                    {{-- <div class="form-group">
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

                    </div> --}}
                    {{-- form part --}}
                {{-- </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Brand</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}


{{-- update part --}}


<div class="modal fade" id="exampleModal{{$brand->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Brand</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('brands.update', ['brand'=>$brand->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Brand Name </label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name', $brand->name)}}">
            </div>
            <div class="form-group">
                <label for="slug">Brand Slug </label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug', $brand->slug)}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label> <br>
                <input type="checkbox" name="status" id="status"> Checked = Hidden, Un-Check =
                Visiable

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Brand Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>




  {{-- Delete part --}}

  <div class="modal fade" id="deleteModal{{$brand->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Brand</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('brands.destroy', ['brand'=>$brand->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('delete')
        <div class="modal-body">
           Do you want to Delete Brand <span style="color:red">!!</span> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Brand Delete</button>
        </div>
        </form>
      </div>
    </div>
  </div>