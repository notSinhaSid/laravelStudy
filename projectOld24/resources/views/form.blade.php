<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body>
    <h2>Form Data</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-2">
                <form action="" method="POST">
                    @csrf
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{$message}}</span><br>
                    @enderror
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{$message}}</span><br>
                    @enderror
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your password" class="form-control">
                    @error('password')
                        <span class="text-danger">{{$message}}</span><br>
                    @enderror
                    <button type="submit" class="btn btn-outline-primary btn-sm mt-4">Register</button>
                </form>
            </div>
        </div>
        {{-- error msg --}}
        {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $err)
                <li><span class="warning">{{$err}}</span></li>
            @endforeach
        </ul>
        @endif --}}
                    {{-- @if ($errors->any())
                        @foreach ($errors->get('email') as $errMsg)
                            {{$errMsg}}
                        @endforeach
                    @endif --}}

                    {{-- only first error msg --}}
                    {{-- @if ($errors->any())
                            {{$errors->first('email')}}
                    @endif --}}

                    {{-- @if ($errors->any())
                        @if ($errors->has('email'))
                            
                        @endif
                    @endif --}}
                    
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>