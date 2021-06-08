@extends("app")
@section("content")

<div class="card"> 
    <table class="table table-striped">                                
        <thead>
            <tr>
                <th>
                    Ürün İsmi
                </th>
                <th>
                    Fiyat
                </th>
            </tr>
        </thead>
        @foreach($products as $product)
        <tr>
            <td>     
                <a href="{{url('/product/'.$product->id)}}">{{ $product->product_name }}</a>
            </td>
            <td>
                {{ $product->list_price }}
            </td>
        </tr>
        @endforeach
    </table>
</div>



@endsection
