<form action="" wire:submit.prevent='addPost'>
    <div class="form-group mb-3">
        <label for="">Post name</label>
        <input type="text" name="name" id="" wire:model='name' class="form-control"
            placeholder="Full Name" />
            @error('name')
                <p class="text-danger" style="font-size: 12.5px;">{{ $message }}</p>
            @enderror
    </div>

    <div class="form-group mb-3">   
        <label for="">Password</label>
        <input type="password" name="password" id="" wire:model='password' class="form-control"
            placeholder="Enter Password" />
            @error('password')
                <p class="text-danger" style="font-size: 12.5px;">{{ $message }}</p>
            @enderror
    </div>
     <div class="form-group mb-3">   
        <label for="">Email</label>
        <input type="text" name="email" id="" wire:model='email' class="form-control"
            placeholder="Enter email" />
            @error('email')
                <p class="text-danger" style="font-size: 12.5px;">{{ $message }}</p>
            @enderror
    </div>
      <div class="form-group mb-3">   
        <label for="">Department</label>
       <select wire:model="address">
            @foreach ($data as $item )
                <option value="{{  $item->name}}">{{  $item->name}}<option>
            @endforeach
    </select>
            
    </div>
    <div class="form-group mb-3">   
        <label for="">Department</label>
       <select wire:model="selectedOption">

            @foreach ($data1 as $item )
                <option value="Select leave">Currency </option>
                <option value="{{  $item->id_dp}}">{{  $item->name}}<option>
            @endforeach
    </select>
            
    </div>

   


    <div class="form-group mb-3">
        <button type="submit" class="btn btn-primary btn-sm btn-block">Add Post</button>
        <a href="" class="btn btn-secondary btn-sm btn-block">Cancel</a>

    </div>
</form>