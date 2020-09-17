<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود کاربران</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body dir="rtl" style="text-align:right" >
 @include('layouts.topmenu')
        <div class="container">
          @include('layouts.messages')
        <div class="d-flex justify-content-center">

         <form action="{{route('login')}}" method="POST">
            @csrf
       
          <div class="form-group">
            <label for="title">ایمیل</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{old('email')}}">
            @error('email')
               <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div> 
          <div class="form-group">
            <label for="title">رمز ورود</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror " name="password">
            @error('password')
               <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div> 

          <div class="form-group">
            <label for="title">مرا به خاطر بسپار</label>
            <input type="checkbox" class="form-check-input" name="remember">

          </div> 
   
      
          <div class="form-group">
            <label for="title"></label>
            <button type="submit" class="btn btn-success">ورود</button>
          </div>    
        </form>  
        </div>
        </div>
     </body>
    </table>
</body>
</html>