<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Products
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Image</td>
                                    <td>Name</td>
                                    <td>Stock</td>
                                    <td>Price</td>
                                    <td>Category</td>
                                    <td>Date</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" width="60" alt=""></td>
                                        {{-- <img src="{{ ('assets/images/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}"> --}}
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->stock_status }}</td>
                                        <td>{{ $product->regular_price }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
