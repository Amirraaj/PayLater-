@include('Admin.layout.head')
@include('Admin.shoes.Sheader')
<div class="content-wrapper">
    @yield('content')
</div>
@include('Admin.layout.footer')
@include('Admin.layout.java')


{{-- ////////////////////////////////////   popup section////////////////////////////////////////// --}}
<style>
    #popup {
        position: absolute;
        width: 50%;
        height: 50%;
        top: 80%;
        left: 30%;
        background-color: gainsboro;
        display: none;

    }

    .Purchasedetails .title {
        text-align: center;
        margin-left: 10%;

    }

</style>
<!-- Button trigger modal -->

<script>
    function popup(productId) {
        $('#exampleModalCenter').modal('toggle');
        let url = '{{route('product-detail', ["product_id"])}}';
        url = url.replace('product_id', productId)
        ajaxFxn(url, {}, function (response) {
            $("#content").html("")
            $("#content").html(`<pre>${response}</pre>`)
            $("#soesid").val(`${response.id}`)
            $("#soesname").val(`${response.ShoesName}`)
            $("#soesprice").val(`${response.Price}`)

        })
    }

    function ajaxFxn(url, data, success, error) {
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: url,
            timeout: 5000,
            success: function (data, textStatus) {
                success(data)
            },
            error: function (xhr, textStatus, errorThrown) {
                error(error);
            }
        });
    }

</script>
