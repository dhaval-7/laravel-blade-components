<x-app>
    <x-post-form :title="__('Update Post')" :actionUrl="route('posts.update',$post->id)" :submitButtonText="__('Update Post')" :post="$post"></x-post-form>
</x-app>