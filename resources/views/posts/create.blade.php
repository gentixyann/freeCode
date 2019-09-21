@extends('layouts.app')

@section('content')
<div class="container">
  <form>
    <div class="row">

    <div class="col-8 offset-2">

       <div class="form-group row">
        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
           <div class="col-md-6">

                 <input id="caption" 
                 type="text" 
                 class="form-control 
                 @error('caption') is-invalid @enderror" 
                 caption="caption" value="{{ old('caption') }}" 
                 autocomplete="caption" autofocus>

                 @error('caption')
              <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        </div>


        <div class="row">
          <label for="image" class="col-md-4 col-form-label">Post Image</label>
          <input id="image" 
                   type="file" 
                   class="form-control-file
                   @error('image') is-invalid @enderror" 
                   caption="image" value="{{ old('image') }}" 
                   autocomplete="image" autofocus>

                   @error('image')
                <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror


        </div>
      </div>

    </div>

  </div>
  </form>
</div>
@endsection
