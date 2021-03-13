<div class="card mb-3">
    <img  src="https://images.theconversation.com/files/45159/original/rptgtpxd-1396254731.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=754&fit=clip" class="card-img-top " alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <table class="table caption-top">
            <!-- <caption class="bg-dark">List of students</caption> -->
            <thead class="table-dark">
                <tr>
                    <th scope="col">CNE</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Secand Name</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operational</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->cne}}</td>
                    <th>{{$student->firstName}}</th>
                    <td>{{$student->secandName}}</td>
                    <td>{{$student->speciality}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">show</a>
                        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">edit</a>
                        <a href="{{url('/destroy/'.$student->id)}}" class="btn btn-sm btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>