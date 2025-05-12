<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paginaion Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <h3>Pagination in Query Builder</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                @foreach ($students as $item)
                    {{$item->name}} <br>                    
                    {{$item->email}}    <br>                
                    {{$item->marks}} <br>
                    <hr>                    
                @endforeach

                {{ $students->links() }}
                {{-- {{ $students->count() }} --}}
                {{-- {{ $students->links('pagination::bootstrap-5') }} --}}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>

