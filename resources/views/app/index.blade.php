@extends("layout.master")

@section("content")
<div class="container">
    <div class="row">
        <div class="title add-animation">
            <h2>Submit your informations</h2>
            <div class="separator-container">
                <div class="separator line-separator">♫</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <div class="card add-animation animation-1">
                <form action="{{ route('infos.submit') }}" method="POST">
                    @csrf
                    <div class="row text-left">
                        <label for="name">Nom(s)</label>
                        <input style="margin-bottom: 0px !important;" required type="text" class="form-control" name="lastname"  placeholder="Doe">
                        @error('lastname')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row text-left margin-top">
                        <label for="name">Prénom(s)</label>
                        <input style="margin-bottom: 0px !important;" type="text" class="form-control" name="firstname" required placeholder="John">
                        @error('firstname')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row text-left margin-top">
                        <label for="name">Numéro</label>
                        <input style="margin-bottom: 0px !important;" type="text" class="form-control" name="phone" required placeholder="01 02 03 04 05">
                        @error('phone')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row text-left margin-top">
                        <label for="name">Filière</label>
                        <input style="margin-bottom: 0px !important;" type="text" class="form-control" name="filiere" required placeholder="Ressources humaines">
                        @error('filiere')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row text-left margin-top">
                        <label for="name">Email</label>
                        <input style="margin-bottom: 0px !important;" required type="email" class="form-control" name="email" placeholder="johndoe01@email.com">
                        @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row margin-top">
                        <input type="submit" class="btn btn-black btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection