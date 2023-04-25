@section('title','Permissions')
<x-app-layout>
    @vite('resources/css/app.css', 'vendor/permission_ui/build')
        <main class="mx-auto my-8 max-w-7xl rounded-lg bg-white p-5 shadow-md space-y-4">
            <h1 class="text-2xl text-center">Permission Control</h1>
            <div class="space-x-2">
                <a class="text-gray-800 hover:text-gray-600 hover:underline" href="{{ route('admin') }}">Back</a>
                <a class="text-gray-800 hover:text-gray-600 hover:underline" href="{{ route(config('permission_ui.route_name_prefix') . 'users.index') }}">{{ __('PermissionsUI::permissions.users.title') }}</a>
                <a class="text-gray-800 hover:text-gray-600 hover:underline" href="{{ route(config('permission_ui.route_name_prefix') . 'roles.index') }}">{{ __('PermissionsUI::permissions.roles.title') }}</a>
                <a class="text-gray-800 hover:text-gray-600 hover:underline" href="{{ route(config('permission_ui.route_name_prefix') . 'permissions.index') }}">{{ __('PermissionsUI::permissions.permissions.title') }}</a>
            </div>
    
            <div class="max-w-full">
                @yield('content')
            </div>
        </main>
</x-app-layout>
</html>
