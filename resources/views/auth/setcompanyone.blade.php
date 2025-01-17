<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Bintang Tobing">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Boxity - Setup Company - Step 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!!asset('auth/css/setupcompany.css')!!}">
    <link rel="shortcut icon" href="#" type="image/png" sizes="64x64">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="my-login-page">


<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
        <form action="{{ route('companydetails.create.step.one.post') }}" method="POST">
                @csrf
                {{ csrf_field() }}

                <div class="card rounded">
                    <div class="py-3 px-4">
                        <h2 class="font-weight-bold">
                        Welcome friend!
                        </h2>
                        <p class="mt-3 mb-4 text-grey text-description">
                        Welcome to boxity platform, we want to collect your data, just for completing our site’s
                            installation. Just fill in the information below and you’ll be on your way to using our platform.
                        </p>
                        <hr>
                    </div>

                    <div class="card-body pt-0 ">
                            <!-- {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif -->

                            <h2 class="font-weight-bold mb-4">
                            Information Needed
                            </h2>

                            <div class="row my-2">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="title" class="text-title-form text-grey">Company ID</label>
                                        <input type="text" value="{{ old('company_id')}}" class="form-control" id="taskTitle"  name="company_id">
                                        @error('company_id')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="title" class="text-title-form text-grey">Company Name</label>
                                        <input type="text" value="{{ old('company_name') }}" class="form-control" id="taskTitle"  name="company_name">
                                        @error('company_name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row my-2">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="title" class="text-title-form text-grey">City</label>
                                        <input type="text" value="{{ old('city') }}" class="form-control" id="taskTitle"  name="city">
                                        @error('city')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="title" class="text-title-form text-grey">State</label>
                                        <input type="text" value="{{ old('state') }}" class="form-control" id="taskTitle"  name="state">
                                        @error('state')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="title" class="text-title-form text-grey">Country</label>
                                        <input type="text" value="{{ old('country') }}" class="form-control" id="taskTitle"  name="country">
                                        @error('country')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="title" class="text-title-form text-grey">Phone</label>
                                        <input type="text" value="{{ old('phone')}}" class="form-control" id="taskTitle"  name="phone">
                                        @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="title" class="text-title-form text-grey">Email</label>
                                        <input type="email" value="{{ old('email') }}" class="form-control" id="taskTitle"  name="email">
                                        @error('email')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="title" class="text-title-form text-grey">Site</label>
                                        <input type="text" value="{{ old('site') }}" class="form-control" id="taskTitle"  name="site">
                                        <div class="my-1">Without <span class="text-orange">https://</span> or <span class="text-orange">http://</span></div>
                                        @error('site')
                                        <div class="text-danger text-small">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>




                    </div>

                    <div class="text-right pb-4 px-3">
                        <button type="submit" class="btn">
                            <div class="rounded-circle p-2 text-center d-flex justify-content-center wrap-icon">
                            <i class="fa fa-chevron-right" style="color: #fff; font-size: 20px;"  aria-hidden="true"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{!!asset('auth/js/my-login.js')!!}"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function () {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 35,
                        "density": {
                            "enable": true,
                            "value_area": 500
                        }
                    },
                    // Dot color
                    "color": {
                        "value": "#f93a0b"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    // Line color
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ccc",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 100
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "100% 100%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            });

        });

    </script>
</body>

</html>
