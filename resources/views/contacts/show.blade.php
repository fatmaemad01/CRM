<x-main-layout title="Contact">
    <div class="container">

        <div class="card p-5 m-5">
            <h4>Contact Details</h4>

            <div class="row">
                <div class="col-4 p-5  align-self-center">
                    @if($contact->image)
                    <img src="{{ asset('storage/'.$contact->image)}}" alt="xx" height="150" width="170px">
                    @else
                    <img src="{{asset('img/user.jpg')}}" class="rounded" alt="" height="150" width="150">
                    @endif

                </div>

                <div class="col-5">
                    <div class="row p-3 mb-2 border-bottom">
                        <h4 style="margin-right: 20px;"><b>Name: </b></h4>
                        <h4>{{$contact->first_name}} {{$contact->surname}} </h4>
                    </div>

                    <div class="row p-3 mb-2 border-bottom">
                        <h4 style="margin-right: 20px;"><b>Phone:</b> </h4>
                        <h4>{{$contact->phone}} </h4>

                    </div>
                    <div class="row p-3 mb-2 border-bottom">
                        <h4 style="margin-right: 20px;"><b>Email:</b> </h4>
                        <h4>{{$contact->email}} </h4>

                    </div>
                    <div class="row p-3 mb-2 border-bottom">
                        <h4 style="margin-right: 20px;"><b>Job:</b> </h4>
                        <h4>{{$contact->job}}</h4>
                    </div>
                    <div class="row p-3 mb-2 border-bottom">
                        <h4 style="margin-right: 20px;"><b>Company:</b> </h4>
                        <h4>{{$contact->company}}</h4>
                    </div>
                    <div class="row p-3 mb-2 border-bottom">
                        <h4 style="margin-right: 20px;"><b>Note:</b> </h4>
                        <h4>{{$contact->note}} </h4>

                    </div>
                    <div class="row p-3 mb-2 border-bottom">
                        <h4 style="margin-right: 20px;"><b>Birthday:</b> </h4>
                        <h4>{{$contact->birthday}} </h4>

                    </div>
                </div>
                <div class="col-3 d-flex justify-content-end align-self-center">
                    <div class="actions" style="margin: 20px; padding:50px">
                        <a href="{{route('contacts.edit' , $contact->id)}}" class=" mb-4 btn btn-inverse-info btn-fw">Update</a>
                        <form action="{{route('contacts.destroy' , $contact->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-inverse-danger btn-fw">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-main-layout>