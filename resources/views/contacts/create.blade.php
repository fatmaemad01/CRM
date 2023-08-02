<x-main-layout title="Create Classroom">
    <div class="container p-3">
        <h3 mb-3>Create contact </h3>
        <form action="{{route('contacts.store')}}" method="post" enctype="multipart/form-data">
            @include ('contacts._form' , [
            'button' => 'Create Contact'
            ])
        </form>
    </div>
</x-main-layout>