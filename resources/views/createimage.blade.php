<html lang="en">
<head>
  <title>Superhero Cheesecake Challenge</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container">
        
      <div class="alert ">
        <ul></ul>
      </div>
    
    <h3 class="jumbotron">Superhero Cheesecake Challenge </h3>
    <ul>
      <li>add an image url and the following filters will be added:</li>
      <li>slightly pixlate the image</li>
      <li>slightly take out red color and add blue</li>
      <li>add green tune</li>
      <li>add a watermark text "SHCC TEST"</li>
    </ul>
  <!-- <form method="post" action="{{url('api/create')}}" enctype="multipart/form-data"> -->
    <div>
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <input type="text" name="filename" class="form-control filename" placeholder="image url">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <button type="submit" class="btn btn-primary store-image" style="margin-top:10px">add filters</button>
          </div>
        </div>
        @if($image)
        <div class="row">
         <div class="col-md-8">
              <strong>Original Image:</strong>
              <br/>
              <img src="/images/{{$image->filename}}" />
        </div>
        <div class="col-md-4">
            <strong>manipulated Image:</strong>
            <br/>
            <img src="/thumbnail/{{$image->filename}}"  />
         </div>
      </div>
        @endif       
    </div>
  <!-- </form> -->
  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="/js/app.js"></script>
</body>
</html>