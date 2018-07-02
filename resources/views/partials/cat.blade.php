@foreach($cats as $cat)
    <div class="cat">
        <a href="{{ route('cat.show', $cat->id) }}">
            <strong>{{ $cat->name }}</strong> - {{ $cat->breed->name }}
        </a>
    </div>
@endforeach
{{ $cats->links() }}
<script type="application/javascript">
    // $(function () {
    //     $('a.page-link').click(function (e) {
    //         e.preventDefault(); //chan chuyen trang khi click
    //         var url= $(this).attr('href');
    //         // console.log(url);
    //         $.get(url, function (response) {
    //             $()
    //         });
    //     });
    // });
</script>