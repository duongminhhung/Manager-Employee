<form action="" wire:submit.prevent='addPost'>
    <div class="form-group mb-3">
        <label for="">Post Slug</label>
        <input type="text" name="" id="" wire:model='slug' class="form-control"
            placeholder="Enter slug" />
            @error('slug')
                <p class="text-danger" style="font-size: 12.5px;">{{ $message }}</p>
            @enderror
    </div>


    <div class="form-group mb-3">
        <label for="">Post Slug</label>
        <textarea name="" id="" wire:model='content' class="form-control" cols="30" rows="6" placeholder="Enter content"></textarea>
        @error('content')
                <p class="text-danger" style="font-size: 12.5px;">{{ $message }}</p>
        @enderror
    </div>


    <div class="form-group mb-3">
        <button type="submit" class="btn btn-primary btn-sm btn-block">Add Post</button>
    </div>
</form>