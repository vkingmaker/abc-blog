<div class="col-md-4 mt-5">
    <h2>Post a Blog</h2>
    <p class="small mb-4">Create another amazing Blog</p>
    <form method="POST" action="/blog">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
        </div>
        <div class="form-group">
            <textarea type="text" class="form-control" id="body" name="body" placeholder="Blog Post"
                required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
</div>
