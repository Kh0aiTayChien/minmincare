<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th class="col-lg-1">Tên ảnh</th>
            <th class="col-lg-1">Ảnh </th>
            <th class="col-lg-1">Chủ đề</th>
            <th class="col-lg-1">Ngày tạo</th>
            <th class="col-lg-1">Ngày cập nhật</th>
            <th class="col-lg-1"></th>
            <th class="col-lg-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($images as $image)
            <tr class="image-row" data-id="{{ $image->id }}">
                <td class="col-lg-1">{{ $image->name }}</td>
                <td class="col-lg-1"><img src="{{ asset($image->image_url) }}" alt="ảnh" style="height: 3rem">
                </td>
                <td class="col-lg-1">{{ $image->Category->title }}</td>
                <td class="col-lg-1">{{ $image->created_at }}</td>
                <td class="col-lg-1">{{ $image->updated_at }}</td>
                <td class="col-lg-1">
                    <a href="{{route('images.edit',[ $image->id ])}}" class="btn btn-warning">
                        Sửa
                        <i class="fa fa-magic" aria-hidden="true"></i>
                    </a>
                </td>
                <td class="col-lg-1">
                    <form action="{{route('images.destroy',[ $image->id ])}}" method="POST" id="delete-image">
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
    {!! $images->appends(request()->query())->links() !!}
</div>
<script>

    $(document).ready(function () {
        $('form#delete-image').submit(function (e) {
            e.preventDefault();

            if (confirm("Bạn có muốn xóa bức ảnh này không ? Nó sẽ được xóa vĩnh viễn")) {
                let url = $(this).attr('action');
                let token = $(this).find('input[name="_token"]').val();
                let row = $(this).closest('.image-row');
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: token
                    },
                    success: function () {
                        row.fadeOut();
                    },
                    error: function (xhr, status, error) {
                    }
                });
            }
        });
    });
</script>

{{--<script src="{{ asset('js/page.js') }}"></script>--}}

