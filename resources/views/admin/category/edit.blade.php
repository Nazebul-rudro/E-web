<x-.admin.layouts.master>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-header">
                            <h3>Category<a href="" class="btn btn-primary btn-sm float-end">Back</a></h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('categories.update', ['category'=>$category->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="mb-1">Name <span style="color:red">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{old('name',$category->name)}}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="slug" class="mb-1">Slug <span style="color:red">*</span></label>
                                        <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug', $category->slug)}}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="description" class="mb-1">Description <span style="color:red">*</span></label>
                                       <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description', $category->description)}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="image" class="mb-1">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="status" class="mb-1">Status <span style="color:red">*</span></label>
                                        <br/>
                                        <input type="checkbox" name="status" id="status" class="from-control">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <h4>SEO Tags</h4>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="meta_title" class="mb-1">Meta Title <span style="color:red">*</span></label>
                                        <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{old('meta_title',$category->meta_title)}}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="meta_keyword" class="mb-1">Meta Keyword <span style="color:red">*</span></label>
                                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{old('meta_keyword',$category->meta_keyword)}}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="meta_description" class="mb-1">Meta Description <span style="color:red">*</span></label>
                                        <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control">{{old('meta_description',$category->meta_description)}}</textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <input type="submit" value="Update" class="btn btn-info btn-sm float-end">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-.admin.layouts.master>