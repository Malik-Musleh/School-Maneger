<table class="table caption-top">
  <caption>List of users</caption>
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Secand Name</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operational</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <th > {{$student->firstName}}</th>
      <td>{{$student->secandName}}</td>
      <td>{{$student->cne}}</td>
      <td>{{$student->Speciality}}</td>
      <td>
      <a href="#" class="btn btn-sm btn-info">show</a>
      <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-info">edit</a>
      <a href="{{url(/distroy/.$student->id)}}" class="btn btn-sm btn-info"></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>