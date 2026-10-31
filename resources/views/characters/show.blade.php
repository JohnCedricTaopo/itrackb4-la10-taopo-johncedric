@extends('layouts.app')

@section('title', $character->name)

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <p class="text-uppercase text-primary fw-semibold small mb-1">
                Character details
            </p>

            <h2 class="mb-4">
                {{ $character->name }}
            </h2>

            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $character->id }}</dd>

                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{ $character->name }}</dd>

                <dt class="col-sm-3">Element</dt>
                <dd class="col-sm-9">
                    {{ $character->element->name }}
                </dd>

                <dt class="col-sm-3">Weapon</dt>
                <dd class="col-sm-9">{{ $character->weapon }}</dd>

                <dt class="col-sm-3">Rarity</dt>
                <dd class="col-sm-9">
                    {{ $character->rarity }}-Star
                </dd>

                <dt class="col-sm-3">Playable</dt>
                <dd class="col-sm-9">
                    {{ $character->is_playable ? 'Yes' : 'No' }}
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
