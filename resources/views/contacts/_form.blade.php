<div class="card p-5">
    <x-errors />
    <form class="form-simple" action="{{route('contacts.store')}}" method="post">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="first_name" id="first_name" class="form-control" value="{{old('first_name' , $contact->first_name)}}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="surname" class="col-sm-3 col-form-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="surname" id="surname" class="form-control" value="{{old('surname' , $contact->surname)}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="birthday" class="col-sm-3 col-form-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input name="birthday" id="birthday" type="date" class="form-control" value="{{old('birthday' , $contact->birthday)}}" placeholder="dd/mm/yyyy">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="company" class="col-sm-3 col-form-label">Company</label>
                    <div class="col-sm-9">
                        <input name="company" id="company" type="text" class="form-control" value="{{old('company' , $contact->company)}}" placeholder="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="job_title" class="col-sm-3 col-form-label">Job</label>
                    <div class="col-sm-9">
                        <input name="job_title" id="job_title" value="{{old('job_title' , $contact->job_title)}}" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input name="email" id="email" type="email" value="{{old('email' , $contact->email)}}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                        <input name="phone" id="phone" type="text" value="{{old('phone' , $contact->phone)}}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="note" class="col-sm-3 col-form-label">Note</label>
                    <div class="col-sm-9">
                        <input name="note" id="note" type="text" value="{{old('note' , $contact->note)}}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="image" id="image" value="{{old('image' , $contact->image)}}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="action d-flex justify-content-end">
                    <button type="submit" class="btn btn-inverse-primary btn-fw" style="margin-right: 10px;">{{$button}}</button>
                    <a href="{{route('contacts.index')}}" class="btn btn-inverse-danger btn-fw">Cancel</a>
                </div>

            </div>
        </div>
    </form>
</div>