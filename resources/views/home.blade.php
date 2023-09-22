<x-app>
    <div class="row justify-content-center">
        <div class="col-md-10">
            @auth
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href={{ route('posts.create') }}> Create New Post</a>
                                </div>
                            </div>
                        </div>
                        @isset($posts)
                            <x-posts :posts=$posts />
                        @endisset
                    </div>
                </div>
            @endauth
        </div>
    </div>
</x-app>
