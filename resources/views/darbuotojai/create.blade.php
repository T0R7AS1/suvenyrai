@extends('layouts.app')

@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Prideti Suvenyra</h3></div>
                            <a href="{{ route('darbuotojai.index')}}" class="btn btn-primary">Atgal</a>
                            <div class="card-body">
                                <form action="/darbuotojai" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1" for="inputProjectname">Pavadinimas</label>
                                        <input type="text" class="form-control" placeholder="Irasykite Suvenyro Pavadinima" name="pavadinimas" autocomplete="off">
                                    </div>
                                    <div class="form-group"> 
                                        <label class=" mb-1" for="inputProjectname">Kaina</label>
                                        <input class="form-control" placeholder="Irasykite Suvenyro Verte" name="kaina" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label class=" mb-1" for="inputProjectname">Apie </label>
                                        <textarea type="text" class="form-control" placeholder="Placiau Apie Suvenyra" name="apie" autocomplete="off" rows="5"></textarea>
                                    </div>
                                    <div class="mb-3 text-danger">
                                    </div>
                                    <label class=" mb-1" for="inputProjectname">Nuotrauka</label>
                                    <div class="form-group">
                                        <input type="file" name="image">
                                    </div>
                                    <input type="submit" class="btn btn-success btn-block mt-4 mb-2" name="add" value="Prideti">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </main>
    </div>
</div>
@endsection