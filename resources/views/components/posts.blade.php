<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($posts as $key => $post)
        <x-post :key="$key" :post="$post" :pageNo="$posts->currentPage()"/>
    @endforeach
</table>
{{ $posts->links() }}

