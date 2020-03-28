@if (count($errors) > 0)
 @foreach ($errors->all() as $errors)
   <div class="alert alert-danger">
       {{$errors}}
   </div>
 @endforeach

@endif


   @if (session('success'))
      <div class="alert alert-success mt-4">
            {{session('success')}}
      </div>

   @endif
