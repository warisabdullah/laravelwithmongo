<script>
    $(document).ready(function ($) {
        $('#addProduct').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'create/product',
                data: $(this).serialize(),
                success: function (result) {
                    window.location.reload();
                },
                error: function (result) {
                    $.each(result.responseJSON.errors, function (field_name, error) {
                        toastr.error(error);
                    });
                }
            })

        });
        $('.edit').click(function () {
            console.log($(this).data("value"));
            $.ajax({
                type: "GET",
                url: 'edit/product',
                data: {
                    "id": $(this).data("value")
                },
                success: function (result) {
                    $('#objectId').val(result._id);
                    $('#name').val(result.name);
                    $('#slug').val(result.slug);
                    $('#price').val(result.price);
                    if (result.is_active == "on") {
                        $('#is_active').prop('checked', true);
                    }
                },
                error: function (result) {
                }
            })
        })
        $('#updateProduct').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'update/product',
                data: $(this).serialize(),
                success: function (result) {
                    window.location.reload();
                },
                error: function (result) {
                    $.each(result.responseJSON.errors, function (field_name, error) {
                        toastr.error(error);
                    });
                }
            })

        });
        $('.delete').click(function () {
            console.log($(this).data("value"));
            $.ajax({
                type: "GET",
                url: 'delete/product',
                data: {
                    "id": $(this).data("value")
                },
                success: function (result) {
                    window.location.reload();
                },
                error: function (result) {
                }
            })
        })
    });
</script>
