    <div class="flash-error">
      <b>Error:</b>
      @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
    </div>
