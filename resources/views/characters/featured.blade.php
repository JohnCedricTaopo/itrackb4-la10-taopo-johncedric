@extends('layouts.app')

@section('title', 'Featured Character')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <p class="text-uppercase text-warning fw-semibold small mb-1">
                Featured character
            </p>

            <h2 class="mb-4">
                {{ $character->name }}
            </h2>

            <dl class="row">
                <dt class="col-sm-3">Element</dt>
                <dd class="col-sm-9">
                    {{ $character->element->name }}
                </dd>

                <dt class="col-sm-3">Weapon</dt>
                <dd class="col-sm-9">
                    {{ $character->weapon }}
                </dd>

                <dt class="col-sm-3">Rarity</dt>
                <dd class="col-sm-9">
                    {{ $character->rarity }}-Star
                </dd>

                <dt class="col-sm-3">Remarks</dt>
                <dd class="col-sm-9">
                    {{ $character->remarks ?: 'No remarks.' }}
                </dd>
            </dl>

            <a
                class="btn btn-primary"
                href="{{ route('characters.index') }}"
            >
                Back to characters
            </a>
        </div>
    </div>
@endsection
