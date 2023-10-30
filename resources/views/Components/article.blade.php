@props(['h1','desc','btn'])

<div class="card article mt-3 col-sm-4">
  <div class="card-body">
    <h5 class="card-title">{{ $h1 }}</h5>
    <p class="card-text">{{ $desc }}</p>
    <a href="#" class="btn btn-primary">{{ $btn }}</a>
  </div>
</div>