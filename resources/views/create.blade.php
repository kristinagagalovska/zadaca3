@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<form action="{{ route('store') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <legend></legend>
        <div class="form-group">
            <label for="inputName" class="col-lg-2 control-label">Име и Презиме</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputName" placeholder="Име и Презиме" name="name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputBday" class="col-lg-2 control-label">Внеси датум на раѓање</label>
            <div class="col-lg-10">
                <input type="date" class="form-control" id="inputBday" name="bday">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAmount" class="col-lg-2 control-label">Внеси износ</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputAmount" placeholder="Износ" name="amount">
            </div>
        </div>
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default">Откажи</button>
            <button type="submit" name="store" class="btn btn-danger">Додади корисник</button>
        </div>
    </div>
</form>
</html>
@endsection