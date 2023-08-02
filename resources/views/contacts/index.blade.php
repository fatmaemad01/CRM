<x-main-layout title="Contacts">
    <div class="container m-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="header d-flex justify-content-between">
                        <h3 class="card-title">Contacts</h3>
                        <td><a href="{{route('contacts.create')}}" class="btn btn-inverse-primary btn-fw">Create</a></i>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>User </th>
                                    <th>phone</th>
                                    <th>Show More</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td class="py-1">
                                        @if($contact->image)
                                        <img src="{{ asset('storage/'.$contact->image)}}" alt="xx">
                                        @else
                                        <img src="{{asset('img/user.jpg')}}" class="rounded" alt="" height="150" width="150">
                                        @endif
                                    </td>
                                    <td>{{$contact->first_name}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td><a href="{{route('contacts.show' , $contact->id)}}" class="btn btn-inverse-info btn-fw">Show</a></i>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card p-4 mb-4">

           <h5>{{$contact->first_name}} . {{$contact->surname}}</h5>
        <h6>{{$contact->company}}</h6>
        <h6>{{$contact->job_title}}</h6>
        <h6>{{$contact->email}}</h6>
        <h6>{{$contact->birthday}}</h6>
        <div class="actions d-flex justify-content-end">
            <a class="btn btn-outline-primary me-3" href="{{route('contacts.edit' ,  $contact->id)}}">
                update
            </a>
            <form action="{{route('contacts.destroy' ,  $contact->id)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-outline-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach --}}
    </div>

</x-main-layout>