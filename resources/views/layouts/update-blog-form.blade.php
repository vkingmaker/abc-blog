<div class="col-md-4 mt-5">
    <h2>Update Blog</h2>
    <p class="small mb-4">Create another amazing Blog</p>
    <form method="POST" action="/blog/{{ $blogToUpdate->id }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                value="{{ $blogToUpdate->title }}"" required>
        </div>
        <div class=" form-group">
            <textarea type="text" class="form-control" id="body" name="body" placeholder="Blog Post"
                required>{{ $blogToUpdate->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
