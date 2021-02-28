@extends('layouts.test')
@section('content')
    <div class="container">
        <div class="row col-6">
            <form method="POST" action="{{ route('results.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="mynumber" class="form-label">Искомое число</label>
                    <input
                        value="{{ old('mynumber')  }}"
                        type="number"
                        name="mynumber"
                        class="form-control"
                        id="mynumber"
                        placeholder="введите числа через запятую">
                    @error('mynumber')
                    <div class="alert alert-danger">Ошибка</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="myarray" class="form-label">Массив</label>
                    <input
                        value="{{ old('myarray')  }}"
                        type="text"
                        name="myarray"
                        class="form-control"
                        id="myarray"
                        placeholder="введите числа через запятую">
                    @error('myarray')
                    <div class="alert alert-danger">Ошибка</div>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Отправить</button>
                </div>

            </form>
        </div>

    </div>
@endsection
