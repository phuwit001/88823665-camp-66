
@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <!-- /.register-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <a href="../index2.html"
                        class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                        <h1 class="mb-0"><b>Admin</b>LTE</h1>
                    </a>
                </div>
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register')}}" onsubmit="return myfuction(event);" method="post">
                        @csrf
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input name="name" id="name" type="text" class="form-control" placeholder="" />
                                <label for="registerFullName">Full Name</label>
                                <div class="valid-feedback">
                                    OK
                                </div>
                                <div class="invalid-feedback" id="invalid-name">
                                    กรุณากรอกข้อมูล name
                                </div>
                            </div>
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input name="email" id="email" type="email" class="form-control" placeholder="" />
                                <label for="registerEmail">Email</label>
                                <div class="valid-feedback">
                                    OK
                                </div>
                                <div class="invalid-feedback" id="invalid-email">
                                    กรุณากรอกข้อมูล email
                                </div>
                            </div>
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input name="password" id="pass" type="password" class="form-control" placeholder="" />
                                <label for="registerPassword">Password</label>
                                <div class="valid-feedback">
                                    OK
                                </div>
                                <div class="invalid-feedback" id="invalid-pass">
                                    กรุณากรอกข้อมูล password
                                </div>
                            </div>
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8 d-inline-flex align-items-center">
                                <div class="form-check">
                                    <input id="mycheckbox" class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                    <div class="valid-feedback">
                                        OK
                                    </div>
                                    <div class="invalid-feedback" id="invalid-mycheckbox">
                                        กรุณากรอกข้อมูล name
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                    </form>
                    <button class="btn" onclick="myfunction()"> click me </button>

                    <div class="social-auth-links text-center mb-3 d-grid gap-2">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-primary">
                            <i class="bi bi-facebook me-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="bi bi-google me-2"></i> Sign in using Google+
                        </a>
                    </div>
                    <!-- /.social-auth-links -->
                    <p class="mb-0">
                        <a href="login.html" class="link-primary text-center"> I already have a membership </a>
                    </p>
                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
@endsection


@section('scripts')
<script>
    let $myval
    var myval2
    const myval3 =""

    console.log("Hello")
 /**/
 //
    // alert("Hello")


    function myfuction(event) {
            let name = document.getElementById('name');
            name = $('#name');
            let email = document.getElementById('email');
            email = $('#email');
            let pass = document.getElementById('pass');
            pass = $('#pass');
            let mycheckbox = document.getElementById('mycheckbox');
            mycheckbox = $('#mycheckbox');
            //document.getElementByClass()
            //name.value = "My Name Value"
            //name.val("My Name Value");
            console.log(name.val(), email.val(), pass.val(), mycheckbox.checked);
            name.removeClass('is-invalid');
            email.removeClass('is-invalid');
            pass.removeClass('is-invalid');
            mycheckbox.removeClass('is-invalid');
            if (name.val() == "My Name Value") {
                name.addClass('is-invalid');
                $('#invalid-name').html("<b><u>ไม่สามารถใช้ชื่อนี้ได้</u></b>")
                return false;
            } else {
                name.removeClass('is-invalid');
            }
            if (name.val() == "") {
                name.addClass('is-invalid');
                $('#invalid-name').html("<b><u>กรุณากรอกชื่อ</u></b>");
                return false;
            } else {
                name.removeClass('is-invalid');
            }
            if (email.val() == "") {
                email.addClass('is-invalid');
                $('#invalid-email').html("<b><u>กรุณากรอก email</u></b>")
                return false;
            } else {
                email.removeClass('is-invalid');
            }
            if (!/@/.test(email.val()) || !/\./.test(email.val())) {
                email.addClass('is-invalid');
                $("#invalid-email").html("<b><u>กรุณากรอก email ให้ถูกต้อง</u></b>");
                return false;
            } else {
                email.removeClass('is-invalid');
            }
            if (pass.val() == "") {
                pass.addClass('is-invalid');
                $('#invalid-pass').html("<b><u>กรุณากรอก password</u></b>");
                return false;
            } else {
                pass.removeClass('is-invalid');
            }
            if (!/[A-Z]/.test(pass.val()) || !/[a-z]/.test(pass.val()) || !/\d/.test(pass.val())) {
                pass.addClass('is-invalid');
                $('#invalid-pass').html("<b><u>password ต้องมีตัวอักษรพิมพ์ใหญ่,พิมพ์เล็กและตัวเลข</u></b>")
                return false;
            } else {
                pass.removeClass('is-invalid');
            }
            if (!mycheckbox.prop('checked')) {
                mycheckbox.addClass('is-invalid');
                $('#invalid-mycheckbox').html("<b><u>กรุณายอมรับข้อตกลง</u></b>")
                return false;
            } else {
                mycheckbox.removeClass('is-invalid');
            }
            event.preventDefault();
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            }).then(() => {
                event.target.closest("form").submit();
                return true;
            });

        }
    // myfunction
</script>
<script>
    console.log(myval2)
</script>
@endsection
