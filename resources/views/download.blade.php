<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      .special-body {
        display:inline-block;
      }

      .special-loop {
        float:left;
        margin-left:4.5rem;
      }

      .price {
        margin-left: 4rem;
      }

    </style>
</head>
<body>
    
    <div class="special-body">
        @foreach($specials as $special)
          <h2 class="title">{{$special->description}}</h2>
            <div class="special-details">
              <div class="special-loop">
              @foreach($special->winner as $win)  
                  <p>{{$win}}</p>                         
              @endforeach
              </div>
              <div class="special-loop">
              @foreach($special->cgpa as $gpa)
                  <p>CGPA- {{$gpa}}</p>        
              @endforeach
              </div>
              <div class="special-loop">
              @foreach($special->program as $dep)
                <p>{{$dep}}</p>        
              @endforeach
              </div>
              <div class="special-loop price">
                {{-- <h2>Price</h2> --}}
                @foreach($special->price as $pri)
                  <p>{{$pri}}</p>
                @endforeach
              </div>
            </div>
        @endforeach
      </div>


</body>
</html>