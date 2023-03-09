<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="container-fluid row justify-content-center">
    <div class="col-6 mt-5">

          <a href="{{route('student.create')}}"   class="btn btn-success btn-lg" >  Add New Student </a></br>   

        <h2> students Listings </h2>

         <table  class="table table-bordered table-striped">
           <tr>
               <th>S/N</th>
               <th> Surname </th>
               <th> Firstname</th>
               <th> Date of Birth</th>
               <th> Course</th>
               <th> Email </th>
               <th> Actions </th>
                
           </tr>

                   @foreach( $students  as    $index=>$student )
                        <tr>
                           <td>{{$index + 1 }}</td>
                            <td>{{$student->surname }}</td>
                            <td>{{$student->firstname }}</td>
                            <td>{{   date('d/M/Y', strtotime($student->dob))   }}</td>
                            <td>{{$student->course }}</td>
                            <td>{{$student->email }}</td>
                              <td> 
                                  <span>
                                   <a   class="btn btn-info"  href="/student/{{$student->id }}/edit" >  Edit </a>    
                                
                                <form method="post"  action="{{ url('/student',$student->id) }}"  >
                                {{ method_field('DELETE') }}
                                @csrf   
                                <button type="submit"  class="btn btn-danger"  >  Delete </button>     
                            
                                </form>
                                 </span>  
                               
                            </td>
                        </tr>
                      @endforeach
         </table>
       


    </div>
  
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>