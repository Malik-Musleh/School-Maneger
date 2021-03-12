<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  @if($layout=="index")
  <div class="container-fluid">
    <div class="row">
      <section class="col">
        @include("studentsList")
      </section>
      <section class="col">
    </div>
  </div>
  @elseif($layout=="create")
  <div class="container-fluid">
    <div class="row">
      <section class="col">
        @include("studentsList")
      </section>
      <section class="col">
        <form action="{{url('store')}}" method="POST" class="row g-3">
        @csrf
          <div class="col-auto">
            <label for="cne">CNE</label>
            <input name="cne" class="form-control-plaintext" placeholder="Enter Enter CNE">
          </div>
          <div class="col-auto">
            <label for="firstName">First Name</label>
            <input name="firstName" class="form-control-plaintext" placeholder="Enter First Name">
          </div>
          <div class="col-auto">
            <label for="secondName">Second Name</label>
            <input name="secondName" class="form-control-plaintext" placeholder="Enter Second Name">
          </div>
          <div class="col-auto">
            <label for="age">Age</label>
            <input name="age" class="form-control-plaintext" placeholder="Enter Age">
          </div>
          <div class="col-auto">
            <label for="speciality">Speciality</label>
            <input name="speciality" class="form-control-plaintext" placeholder="Enter Speciality">
          </div>
          <input type="submit" class="btn btn-info" value="Save" />
          <input type="reset" class="btn btn-info" value="Reset" />
        </form>
      </section>
    </div>
  </div>
  @elseif($layout=="show")
  <div class="container-fluid">
    <div class="row">
      <section class="col">
        @include("studentsList")
      </section>
      <section class="col">
      </section>
    </div>
  </div>
  @elseif($layout=="edit")
  <div class="container-fluid">
    <div class="row">
      <section class="col">
        @include("studentsList")
      </section>
      <section class="col">
      <form action="{{url('update/'.$student->id)}}" method="GET" class="row g-3">
        @csrf
          <div class="col-auto">
            <label for="cne">CNE</label>
            <input  value="{{$student->cne}}" name="cne" class="form-control-plaintext" placeholder="Enter Enter CNE">
          </div>
          <div class="col-auto">
            <label for="firstName">First Name</label>
            <input value="{{$student->firstName}}" name="firstName" class="form-control-plaintext" placeholder="Enter First Name">
          </div>
          <div class="col-auto">
            <label for="secondName">Second Name</label>
            <input value="{{$student->secondName}}"  name="secondName" class="form-control-plaintext" placeholder="Enter Second Name">
          </div>
          <div class="col-auto">
            <label for="age">Age</label>
            <input value="{{$student->age}}" name="age" class="form-control-plaintext" placeholder="Enter Age">
          </div>
          <div class="col-auto">
            <label for="speciality">Speciality</label>
            <input value="{{$student->speciality}}" name="speciality" class="form-control-plaintext" placeholder="Enter Speciality">
          </div>
          <input type="submit" class="btn btn-info" value="Update" />
          <input type="reset" class="btn btn-info" value="Reset" />
        </form>
      </section>
    </div>
  </div>
  @endif
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>