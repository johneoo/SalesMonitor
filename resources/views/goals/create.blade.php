@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add / Update Goal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>Success: </strong>{{ session('message') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('goals.store') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="goal_amount" class="col-md-4 col-form-label text-md-right">{{ __('Goal Amount') }}</label>

                            <div class="col-md-6">
                                <input id="goal_amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus min="50000" step="10000">

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Goal') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
