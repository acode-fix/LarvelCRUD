<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="container-fluid row justify-content-center">
    <div class="col-6 mt-5 bg-secondary">

                           @include('alert')

        <h2> Edit Student</h2>
       
        <form method="post"  action="{{ url('/student',$student->id) }}"  >
                                {{ method_field('PUT') }}
            @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">First Name</span>
            <input type="text" name="firstname"   value="{{$student->firstname}}"   value="{{$student->firstname}}" class="form-control" placeholder="Enter your first name" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Last Name</span>
            <input type="text" name="surname" value="{{$student->surname}}"   class="form-control" placeholder="Enter your last name" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Course of Study</span>
            <input type="text" name="course"  value="{{$student->course}}"  class="form-control" placeholder="Enter your course" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email</span>
            <input type="text"  value="{{$student->email}}"  name="email" class="form-control" placeholder="Enter email" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Date of Birth </span>
            <input type="date"   value="{{$student->dob}}"  name="dob" class="form-control" placeholder="Enter date of birth" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <button class="btn btn-success" name="submit">Update </button>
        </form>


    </div>
  
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>