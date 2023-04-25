@section('title', 'Admin Setting')
{{-- <link rel="stylesheet" href="css/home.css"> --}}
<x-app-layout>
    @role('admin')
        <section>
            <div class="mx-auto mt-5 max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
                <h1 class="text-3xl font-semibold text-center text-gray-900">Website CMS</h1>
                <main class="my-8">
                    <a class="rounded-md border border-transparent bg-indigo-400 px-4 py-2 text-xs font-semibold text-white hover:bg-indigo-300"
                        href="{{ route('admin.product') }}"><button>Products CRUD</button></a>
                    <a class="rounded-md border border-transparent bg-indigo-400 px-4 py-2 text-xs font-semibold text-white hover:bg-indigo-300"
                        href="{{ route('admin.category') }}"><button>Categores CRUD</button></a>
                    <a class="rounded-md border border-transparent bg-indigo-400 px-4 py-2 text-xs font-semibold text-white hover:bg-indigo-300"
                        href="{{ route('admin.order') }}"><button>All Orders</button></a>
                    <a class="rounded-md border border-transparent bg-indigo-400 px-4 py-2 text-xs font-semibold text-white hover:bg-indigo-300"
                        href="/permissions/users"><button>Permissions Settings</button></a>
                </main>
            </div>
        </section>
    @endrole
    @role('user')
    @endrole
</x-app-layout>
