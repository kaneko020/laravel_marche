<p class="mb-4">{{ $user->name }}様</p>

<p class="mb-4">
  この度は「Laravel Marche」をご利用いただきまして、誠にありがとうございます。
</p>

<p>ご注文内容</p>
@foreach ($products as $product)
  <ul class="mb-4">
    <li>商品名：{{ $product['name'] }}</li>
    <li>商品金額：{{ number_format($product['price']) }}円</li>
    <li>商品数：{{ $product['quantity'] }}</li>
    <li>合計金額：{{ number_format($product['price'] * $product['quantity']) }}円</li>
  </ul>
@endforeach
