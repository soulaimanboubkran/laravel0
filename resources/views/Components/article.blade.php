@props(['h1','desc','btn','img'])

<div class="card article mt-3 col-sm-4">
  <div class="card-body">
    <img src={{$img}} alt="">
    <h5 class="card-title">{{ $h1 }}</h5>
    <p class="card-text">{{ $desc }}</p>
    <a href="#" class="btn btn-primary">{{ $btn }}</a>
  </div>
</div>