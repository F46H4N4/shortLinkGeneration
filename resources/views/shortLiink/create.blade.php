
<!DOCTYPE html>
<html>
<head>
    <title>SHORT LINK</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
   </head>
<body>
    <div class="container">
         <div class="content">
            <h1>Create a url</h1>
@if (session('message'))
    <div class="alert alert-info">{{ session('message') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            {!! NoCaptcha::renderJs() !!}
            <form action="{{route('shortlinks.store')}}" method="POST"> 
                    
                <input type="text" name="urlAddress" placeholder="url">
               
                <input type="text" name="shorturl" placeholder="enter custom link">
                 {!! app('captcha')->display() !!}
     </form>
</div>
   <div>
                <button class="btn btn-primary"type="submit">Create url</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


                  