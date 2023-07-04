<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th class="col-lg-1">Tên sản phẩm</th>
            <th class="col-lg-1">Ảnh đại diện</th>
            <th class="col-lg-2">Miêu tả</th>
            <th class="col-lg-1">Giá</th>
            <th class="col-lg-1">Ngày tạo</th>
            <th class="col-lg-1">Ngày cập nhật</th>
            <th class="col-lg-1"></th>
            <th class="col-lg-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr class="product-row" data-id="{{ $product->id }}">
                <td class="col-lg-1">{{ $product->name }}</td>
                <td class="col-lg-1"><img src="{{ asset($product->image) }}" alt="ảnh đại diện" style="height: 3rem">
                </td>
                <td class="col-lg-2">{{ Str::limit(strip_tags($product->description), 45) }}</td>
                <td class="col-lg-1">{{ $product->price }}</td>
                <td class="col-lg-1">{{ $product->created_at }}</td>
                <td class="col-lg-1">{{ $product->updated_at }}</td>
                <td class="col-lg-1">
                    <a href="{{route('products.edit',[ $product->id ])}}" class="btn btn-warning">
                        Sửa
                        <i class="fa fa-magic" aria-hidden="true"></i>
                    </a>
                </td>
                <td class="col-lg-1">
                    <form action="{{route('products.destroy',[ $product->id ])}}" method="POST" id="delete-product">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center">
    {!! $products->appends(request()->query())->links() !!}
</div>
<script>

    $(document).ready(function () {
        $('form#delete-product').submit(function (e) {
            e.preventDefault();

            if (confirm("Bạn có muốn xóa sản phẩm này không ? Nó sẽ được xóa vĩnh viễn")) {
                let url = $(this).attr('action');
                let token = $(this).find('input[name="_token"]').val();
                let row = $(this).closest('.product-row');
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: token
                    },
                    success: function () {
                        // Xử lý khi xóa thành công
                        console.log(row);
                        row.fadeOut();
                    },
                    error: function (xhr, status, error) {
                        // Xử lý khi xóa thất bại
                    }
                });
            }
        });
    });
</script>

{{--<script src="{{ asset('js/page.js') }}"></script>--}}

