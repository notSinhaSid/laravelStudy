<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Data with Query Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h3 class="text-center">CRUD operation with Query Builder</h3>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <form action="" method="POST">
                        @csrf
                        {{-- @method('DELETE') --}}
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" placeholder="Student's name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="City" class="form-label">City</label>
                            <input type="text" name="city" id="city" placeholder="Your city" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Marks" class="form-label">Marks Obtained</label>
                            <input type="number" name="marks" id="marks" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                    @if (session()->has('status'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            {{session('status')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="col-lg-5 col-sm-6 offset-lg-1">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Marks</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th>{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->city}}</td>
                                <td>{{$item->marks}}</td>
                                <td>
                                    <a href="{{url('/edit', $item->id)}}" class="btn btn-outline-info btn-sm">Edit</a>
                                    <form action="{{url('/delete', $item->id)}}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Delete this record ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>