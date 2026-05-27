<!DOCTYPE html>
<html>

<head>
    <title>School Registration</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 mb-5">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card shadow">

                    <div class="card-header text-center">
                        <h2>School Registration Form</h2>
                    </div>

                    @if($errors->any())
                    <div class="alert alert-danger">


                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach

                    </div>
                    @endif

                    <div class="card-body">

                        <form action="/register" method="POST">

                            @csrf

                            <!-- Student Name -->

                            <div class="mb-3">
                                <label class="form-label">
                                    Full Name
                                </label>

                                <input type="text" name="name" class="form-control" placeholder="Enter full name">
                            </div>

                            <!-- Father Name -->

                            <div class="mb-3">
                                <label class="form-label">
                                    Father Name
                                </label>

                                <input type="text" name="father_name" class="form-control"
                                    placeholder="Enter father name">
                            </div>

                            <!-- Mother Name -->

                            <div class="mb-3">
                                <label class="form-label">
                                    Mother Name
                                </label>

                                <input type="text" name="mother_name" class="form-control"
                                    placeholder="Enter mother name">
                            </div>

                            <!-- Gender -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Gender
                                </label>

                                <select name="gender" class="form-control">

                                    <option value="">
                                        Select Gender
                                    </option>

                                    <option value="Male">
                                        Male
                                    </option>

                                    <option value="Female">
                                        Female
                                    </option>

                                    <option value="Other">
                                        Other
                                    </option>

                                </select>

                            </div>

                            <!-- Date of Birth -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Date of Birth
                                </label>

                                <input type="date" name="dob" class="form-control">

                            </div>

                            <!-- Email -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Email
                                </label>

                                <input type="email" name="email" class="form-control" placeholder="Enter email">

                            </div>

                            <!-- Phone -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Phone Number
                                </label>

                                <input type="text" name="phone" class="form-control" placeholder="Enter phone number">

                            </div>

                            <!-- Address -->


                            <!-- Class -->




                            <!-- Admission Number -->



                            <!-- Password -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Password
                                </label>

                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter password">

                            </div>

                            <!-- Confirm Password -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Confirm Password
                                </label>

                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm password">

                            </div>

                            <!-- Submit Button -->

                            <button class="btn btn-primary w-100">
                                Register
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>