<x-main-layout title="Edit Classroom">
    <div class="container p-3">
        <h3 class="mb-3">Edit Contact Data </h3>
        <form action="{{route('contacts.update' , $contact->id)}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @include('contacts._form' , [
            'button' => 'Update contact'
            ])
        </form>
    </div>
</x-main-layout>