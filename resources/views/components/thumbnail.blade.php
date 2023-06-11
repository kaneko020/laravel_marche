@php
  if($type == 'shops') {
    $path = 'storage/shops/';
  }
  if($type == 'products') {
    $path = 'storage/products/';
  }
@endphp

<div class="flex items-center aspect-ratio-block">
  @if(empty($filename))
    <img src="{{ asset('images/no_image.jpg') }}">
  @else
    <img src="{{ asset($path . $filename) }}">
  @endif
</div>

<style>
  .aspect-ratio-block {
    aspect-ratio: 1 / 1;
  }
</style>