<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="docement-body mt-4">
    @foreach($awards as $award)
      <h2 class="title">{{$award->award_description}}</h2>
      <div class="document-details">
        <p>{{$award->student->fname}} {{$award->student->lname}}</p>
        <p><b>CGPA :</b>  <span>{{$award->student->cgpa}}</span></p>
        <p>{{$award->student->program->short_name}}</p>
        <p><b>Price:</b> <span>{{$award->price}}</span></p>
      </div>
    @endforeach
</div>

</body>
</html>


