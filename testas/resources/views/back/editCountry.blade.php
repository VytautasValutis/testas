    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit{{$country->id}}">
        Edit
    </button>
    <div class="modal fade" id="edit{{$country->id}}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Edit country</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('country-edit', $country)}}" method="post">
                        <div class="col col-6">
                            <label class="form-label">Country title</label>
                            <input type="text" class="form-control" name="title" value="{{$country->title}}">
                            <label class="form-label">Country season</label>
                            <input type="text" class="form-control" name="season" value="{{$country->season}}">
                            <button type="submit" class="mt-2 btn btn-outline-success">Submit</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
