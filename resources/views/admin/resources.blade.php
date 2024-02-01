@extends('admin.layout.master')

@section('content')
<section class="dashboard-section body-collapse">
    <div class="overlay pt-120">
        <div class="container-fluid">
            <div class="main-content">
                <div class="row">
                    <div class="tab-pane pb-120 fade active show" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                        <div class="card-area">
                            <h4>Resources</h4>
                            <div class="card-content d-flex flex-wrap">
                                @for ($i = 0; $i < 20; $i++)
                                <div class="single-card mb-4 p-2">
                                    <button type="button" class="reg w-100" data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                        <img src="{{ asset('assets/images/add-new.png') }}" alt="image" class="w-100">
                                    </button>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
