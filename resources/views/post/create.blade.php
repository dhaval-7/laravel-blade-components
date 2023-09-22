<x-app :pageName="__('create')">
    <x-post-form :title="__('Add New Post')" :actionUrl="route('posts.store')" :submitButtonText="__('Create Record')"></x-post-form>
</x-app>
